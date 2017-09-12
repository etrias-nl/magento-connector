<?php

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
use Etrias\MagentoConnector\Exceptions\MagentoSoapException;

/**
 * Class which returns the class map definition.
 */
class ExceptionMap
{
    /**
     * Returns the mapping between the error codes and exception classes.
     *
     * @return string[]
     */
    public static function get()
    {
        return [
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
                '416' => CannotRemoveException::class
            ],
            'giftmessage' => [
                '1001' => StoreNotExistsException::class,
                '1002' => QuoteNotExistsException::class,
                '1101' => InvalidGiftMessageException::class,
                '1102' => InvalidProductDataException::class,
                '1103' => QuoteItemNotExistsExcpetion::class
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
            ]

        ];
    }

    /**
     * @param $code
     *
     * @return MagentoSoapException
     */
    public static function getException($code)
    {
        if (array_key_exists($code, self::get())) {
            $exceptionName = self::get()[$code];
        } else {
            $exceptionName = MagentoSoapException::class;
        }

        return new $exceptionName();
    }
}
