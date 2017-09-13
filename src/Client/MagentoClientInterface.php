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

namespace Etrias\MagentoConnector\Client;

use Etrias\PaazlConnector\SoapTypes\AddressRequest;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\BaseCheckoutRequestType;
use Etrias\PaazlConnector\SoapTypes\BatchStatusRequest;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\CancelPickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsRequest;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsResponse;
use Etrias\PaazlConnector\SoapTypes\ChangeOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\CheckoutResponse;
use Etrias\PaazlConnector\SoapTypes\CloseBatchRequest;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CommitOrderRequest;
use Etrias\PaazlConnector\SoapTypes\CreatePickupRequestRequest;
use Etrias\PaazlConnector\SoapTypes\CreatePickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\DeleteOrderRequest;
use Etrias\PaazlConnector\SoapTypes\DeleteOrderResponse;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresRequest;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateRequest;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalDocumentType;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesRequest;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\ListOrdersRequest;
use Etrias\PaazlConnector\SoapTypes\ListOrdersResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresRequest;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchRequest;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsRequest;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderRequest;
use Etrias\PaazlConnector\SoapTypes\OrderSaveResponseType;
use Etrias\PaazlConnector\SoapTypes\OrderStatusRequest;
use Etrias\PaazlConnector\SoapTypes\OrderStatusResponse;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipRequest;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestOptionsRequest;
use Etrias\PaazlConnector\SoapTypes\PickupRequestQueryType;
use Etrias\PaazlConnector\SoapTypes\PickupRequestStatusResponse;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryRequest;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryResponse;
use Etrias\PaazlConnector\SoapTypes\RateRequest;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsRequest;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionRequest;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionResponse;
use Etrias\PaazlConnector\SoapTypes\UpdateOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderResponseType;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

/**
 * Interface MagentoClientInterface.
 */
interface MagentoClientInterface
{

    /**
     * @param string            $method
     * @param RequestInterface  $request
     *
     * @return ResultInterface
     * @throws SoapException
     */
    public function call($method, RequestInterface $request);
}
