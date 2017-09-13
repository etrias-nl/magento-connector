<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\MagentoConnector;

use Etrias\MagentoConnector\Exceptions\AccessDeniedException;
use Etrias\MagentoConnector\Exceptions\BillingAddressNotSetException;
use Etrias\MagentoConnector\Exceptions\CannotAddProductException;
use Etrias\MagentoConnector\Exceptions\CannotApplyCouponException;
use Etrias\MagentoConnector\Exceptions\CannotChangeOrderStatusOrOrderNotExistsException;
use Etrias\MagentoConnector\Exceptions\CannotCreateCreditMemoException;
use Etrias\MagentoConnector\Exceptions\CannotCreateCustomerException;
use Etrias\MagentoConnector\Exceptions\CannotCreateOrderException;
use Etrias\MagentoConnector\Exceptions\CannotCreateQuoteException;
use Etrias\MagentoConnector\Exceptions\CannotCreateSubFolderInTemporaryFolderException;
use Etrias\MagentoConnector\Exceptions\CannotDeleteCustomerOrCannotDeleteAddressException;
use Etrias\MagentoConnector\Exceptions\CannotDeleteTrackingOrCannotRefundToStoreCreditException;
use Etrias\MagentoConnector\Exceptions\CannotMoveProductException;
use Etrias\MagentoConnector\Exceptions\CannotReceiveShippingMethodsException;
use Etrias\MagentoConnector\Exceptions\CannotRemoveException;
use Etrias\MagentoConnector\Exceptions\CannotRemoveProductException;
use Etrias\MagentoConnector\Exceptions\CannotRemoveTagException;
use Etrias\MagentoConnector\Exceptions\CannotSaveException;
use Etrias\MagentoConnector\Exceptions\CannotSaveQuoteException;
use Etrias\MagentoConnector\Exceptions\CannotSaveTagException;
use Etrias\MagentoConnector\Exceptions\CannotSetShippingMethodException;
use Etrias\MagentoConnector\Exceptions\CannotUpdateProductException;
use Etrias\MagentoConnector\Exceptions\CategoryNotDeletedException;
use Etrias\MagentoConnector\Exceptions\CategoryNotExistsException;
use Etrias\MagentoConnector\Exceptions\CategoryNotMovedException;
use Etrias\MagentoConnector\Exceptions\CountryNotExistsException;
use Etrias\MagentoConnector\Exceptions\CustomerAddressNotSetException;
use Etrias\MagentoConnector\Exceptions\CustomerNotExistsException;
use Etrias\MagentoConnector\Exceptions\CustomerNotExistsOrAddressNotExistsException;
use Etrias\MagentoConnector\Exceptions\CustomerNotSetException;
use Etrias\MagentoConnector\Exceptions\CustomerNotSetForQuoteException;
use Etrias\MagentoConnector\Exceptions\CustomerQuoteNotExistsException;
use Etrias\MagentoConnector\Exceptions\EmptyCustomerAddressDataException;
use Etrias\MagentoConnector\Exceptions\EmptyPaymentDataException;
use Etrias\MagentoConnector\Exceptions\EmptyQuoteException;
use Etrias\MagentoConnector\Exceptions\EmptyTitleException;
use Etrias\MagentoConnector\Exceptions\EmptyUrlException;
use Etrias\MagentoConnector\Exceptions\FileSizeTooBigException;
use Etrias\MagentoConnector\Exceptions\GuestCheckoutNotAvailableException;
use Etrias\MagentoConnector\Exceptions\IncorrectFileExtensionException;
use Etrias\MagentoConnector\Exceptions\IncorrectResourceTypeException;
use Etrias\MagentoConnector\Exceptions\InternalErrorException;
use Etrias\MagentoConnector\Exceptions\InvalidApiPathException;
use Etrias\MagentoConnector\Exceptions\InvalidCheckoutTypeException;
use Etrias\MagentoConnector\Exceptions\InvalidCouponCodeException;
use Etrias\MagentoConnector\Exceptions\InvalidCustomerAddressException;
use Etrias\MagentoConnector\Exceptions\InvalidCustomerDataException;
use Etrias\MagentoConnector\Exceptions\InvalidCustomerDataOrAddressDataException;
use Etrias\MagentoConnector\Exceptions\InvalidDataException;
use Etrias\MagentoConnector\Exceptions\InvalidFiltersException;
use Etrias\MagentoConnector\Exceptions\InvalidFiltersOrCustomerNotExistsException;
use Etrias\MagentoConnector\Exceptions\InvalidGiftMessageException;
use Etrias\MagentoConnector\Exceptions\InvalidProductDataException;
use Etrias\MagentoConnector\Exceptions\LinkNotFoundException;
use Etrias\MagentoConnector\Exceptions\MagentoSoapException;
use Etrias\MagentoConnector\Exceptions\MissingParameterException;
use Etrias\MagentoConnector\Exceptions\NoBase64FileContentException;
use Etrias\MagentoConnector\Exceptions\OrderNotExistsOrRequestedShipmentNotExistsException;
use Etrias\MagentoConnector\Exceptions\PaymentMethodNotAllowedException;
use Etrias\MagentoConnector\Exceptions\PaymentMethodNotSetException;
use Etrias\MagentoConnector\Exceptions\ProductInventoryNotUpdatedException;
use Etrias\MagentoConnector\Exceptions\ProductNotDownloadableException;
use Etrias\MagentoConnector\Exceptions\ProductNotExistsException;
use Etrias\MagentoConnector\Exceptions\QuoteAlreadyExistsException;
use Etrias\MagentoConnector\Exceptions\QuoteItemNotExistsException;
use Etrias\MagentoConnector\Exceptions\QuoteNotExistsException;
use Etrias\MagentoConnector\Exceptions\QuotesAreSimilarException;
use Etrias\MagentoConnector\Exceptions\RequestProductNotAssignedToCategoryException;
use Etrias\MagentoConnector\Exceptions\RequiredAgreementsNotAllSetException;
use Etrias\MagentoConnector\Exceptions\ResourcePathNotCallableException;
use Etrias\MagentoConnector\Exceptions\SessionExpiredException;
use Etrias\MagentoConnector\Exceptions\ShippingAddressNotSetException;
use Etrias\MagentoConnector\Exceptions\ShippingMethodNotAvailableException;
use Etrias\MagentoConnector\Exceptions\StoreNotExistsException;
use Etrias\MagentoConnector\Exceptions\StoreViewNotFoundException;
use Etrias\MagentoConnector\Exceptions\TagNotExistsException;
use Etrias\MagentoConnector\Exceptions\TrackingNotExistsOrCannotChangeStatusException;
use Etrias\MagentoConnector\Exceptions\TransactionNotExistsException;
use Etrias\MagentoConnector\Exceptions\UnallowedCharactersException;
use Etrias\MagentoConnector\Exceptions\UnknownCustomerModeException;
use Etrias\MagentoConnector\Exceptions\UnknownErrorException;
use Etrias\MagentoConnector\Exceptions\UnknownResourceTypeException;
use Etrias\MagentoConnector\Exceptions\ValidationException;
use Etrias\MagentoConnector\Exceptions\WebsiteNotFoundException;

/**
 * Class which returns the class map definition.
 */
class ExceptionMap
{
    /**
     * @var array
     */
    private $map = [
        '' => [
            '0' => UnknownErrorException::class,
            '1' => InternalErrorException::class,
            '2' => AccessDeniedException::class,
            '3' => InvalidApiPathException::class,
            '4' => ResourcePathNotCallableException::class,
            '5' => SessionExpiredException::class,
            '6' => MissingParameterException::class,
        ],
        'catalog' => [
            '100' => StoreViewNotFoundException::class,
            '101' => WebsiteNotFoundException::class,
            '102' => CategoryNotExistsException::class,
            '103' => InvalidDataException::class,
            '104' => CategoryNotMovedException::class,
            '105' => CategoryNotDeletedException::class,
            '106' => RequestProductNotAssignedToCategoryException::class,
        ],
        'cataloginventory' => [
            '101' => ProductNotExistsException::class,
            '102' => ProductInventoryNotUpdatedException::class,
        ],
        'checkout' => [
            '1001' => StoreNotExistsException::class,
            '1002' => QuoteNotExistsException::class,
            '1003' => CannotCreateQuoteException::class,
            '1004' => QuoteAlreadyExistsException::class,
            '1005' => RequiredAgreementsNotAllSetException::class,
            '1006' => InvalidCheckoutTypeException::class,
            '1007' => GuestCheckoutNotAvailableException::class,
            '1008' => CannotCreateOrderException::class,
            '1021' => InvalidProductDataException::class,
            '1022' => CannotAddProductException::class,
            '1023' => CannotSaveQuoteException::class,
            '1024' => CannotUpdateProductException::class,
            '1025' => CannotSaveQuoteException::class,
            '1026' => CannotRemoveProductException::class,
            '1027' => CannotSaveQuoteException::class,
            '1028' => CustomerNotSetForQuoteException::class,
            '1029' => CustomerQuoteNotExistsException::class,
            '1030' => QuotesAreSimilarException::class,
            '1031' => CannotMoveProductException::class,
            '1032' => CannotSaveQuoteException::class,
            '1041' => CustomerNotSetException::class,
            '1042' => CustomerNotExistsException::class,
            '1043' => CannotCreateCustomerException::class,
            '1044' => InvalidCustomerDataException::class,
            '1045' => UnknownCustomerModeException::class,
            '1051' => EmptyCustomerAddressDataException::class,
            '1053' => InvalidCustomerAddressException::class,
            '1054' => CustomerAddressNotSetException::class,
            '1055' => InvalidCustomerAddressException::class,
            '1061' => ShippingAddressNotSetException::class,
            '1062' => ShippingMethodNotAvailableException::class,
            '1063' => CannotSetShippingMethodException::class,
            '1064' => CannotReceiveShippingMethodsException::class,
            '1071' => EmptyPaymentDataException::class,
            '1072' => BillingAddressNotSetException::class,
            '1073' => ShippingAddressNotSetException::class,
            '1074' => PaymentMethodNotAllowedException::class,
            '1075' => PaymentMethodNotSetException::class,
            '1081' => EmptyQuoteException::class,
            '1082' => CannotApplyCouponException::class,
            '1083' => InvalidCouponCodeException::class,
        ],
        'core' => [
            '100' => StoreViewNotFoundException::class,
        ],
        'customer' => [
            '100' => InvalidCustomerDataOrAddressDataException::class,
            '101' => InvalidFiltersOrCustomerNotExistsException::class,
            '102' => CustomerNotExistsOrAddressNotExistsException::class,
            '103' => CannotDeleteCustomerOrCannotDeleteAddressException::class,
        ],
        'directory' => [
            '101' => CountryNotExistsException::class,
        ],
        'downloadable' => [
            '100' => StoreNotExistsException::class,
            '101' => ProductNotExistsException::class,
            '401' => IncorrectResourceTypeException::class,
            '402' => EmptyUrlException::class,
            '403' => UnallowedCharactersException::class,
            '404' => NoBase64FileContentException::class,
            '405' => EmptyTitleException::class,
            '406' => UnknownResourceTypeException::class,
            '408' => ProductNotDownloadableException::class,
            '409' => IncorrectFileExtensionException::class,
            '410' => FileSizeTooBigException::class,
            '411' => CannotCreateSubFolderInTemporaryFolderException::class,
            '412' => LinkNotFoundException::class,
            '413' => IncorrectResourceTypeException::class,
            '414' => CannotSaveException::class,
            '415' => ValidationException::class,
            '416' => CannotRemoveException::class,
        ],
        'giftmessage' => [
            '1001' => StoreNotExistsException::class,
            '1002' => QuoteNotExistsException::class,
            '1101' => InvalidGiftMessageException::class,
            '1102' => InvalidProductDataException::class,
            '1103' => QuoteItemNotExistsException::class,
        ],
        'sales' => [
            '100' => OrderNotExistsOrRequestedShipmentNotExistsException::class,
            '101' => InvalidFiltersException::class,
            '102' => InvalidDataException::class,
            '103' => CannotChangeOrderStatusOrOrderNotExistsException::class,
            '104' => TrackingNotExistsOrCannotChangeStatusException::class,
            '105' => CannotDeleteTrackingOrCannotRefundToStoreCreditException::class,
            '106' => CannotCreateCreditMemoException::class,
        ],
        'tag' => [
            '101' => StoreNotExistsException::class,
            '102' => ProductNotExistsException::class,
            '103' => CustomerNotExistsException::class,
            '104' => TagNotExistsException::class,
            '105' => InvalidDataException::class,
            '106' => CannotSaveTagException::class,
            '107' => CannotRemoveTagException::class,
        ],
        'OPPCw' => [
            '101' => InvalidfiltersException::class,
            '102' => TransactionNotExistsException::class,
        ],
    ];

    /**
     * Returns the mapping between the error codes and exception classes.
     *
     * @return string[]
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param $code
     * @param string $module
     *
     * @return string
     */
    public function getExceptionClassName($code, $module = '')
    {
        if (array_key_exists($module, $this->getMap())) {
            $moduleCodes = $this->getMap()[$module];
        } else {
            $moduleCodes = $this->getMap()[''];
        }

        if (array_key_exists($code, $moduleCodes)) {
            $exceptionClassName = $moduleCodes[$code];
        } else {
            $exceptionClassName = MagentoSoapException::class;
        }

        return $exceptionClassName;
    }

    /**
     * @param $methodName
     *
     * @return string
     */
    public function getModuleByMethodName($methodName)
    {
        if (false !== $underscorePos = strpos($methodName, '_')) {
            return substr($methodName, 0, $underscorePos);
        }

        return '';
    }

    /**
     * @param string $module
     * @param array  $codeMap
     *
     * @return $this
     */
    public function addModule($module, array $codeMap)
    {
        $this->map[$module] = $codeMap;

        return $this;
    }
}
