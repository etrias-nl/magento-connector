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

namespace Tests\Etrias\MagentoConnector\Functional\Services;

use DateTime;
use Etrias\MagentoConnector\Services\CreditMemoService;
use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\Services\InvoiceService;
use Etrias\MagentoConnector\Services\OrderService;
use Etrias\MagentoConnector\Services\ProductAttributeService;
use Etrias\MagentoConnector\Services\ProductService;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCreateEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderInvoiceEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderListEntity;
use Etrias\MagentoConnector\SoapTypes\StoreEntity;

trait RandomizeTrait
{
    /** @var GeneralService */
    private $generalService;

    /** @var ProductService */
    private $productService;

    /** @var ProductAttributeService */
    private $productAttributeService;

    /** @var OrderService */
    private $orderService;

    /** @var CreditMemoService */
    private $creditMemoService;

    /** @var  InvoiceService */
    private $invoiceService;

    /**
     * @param DateTime $min
     * @param DateTime $max
     *
     * @return DateTime
     */
    private function getRandomDate(DateTime $min, DateTime $max)
    {
        $val = random_int($min->getTimestamp(), $max->getTimestamp());

        return new DateTime('@'.$val);
    }

    /**
     * @return StoreEntity
     */
    private function getRandomStoreView()
    {
        $storeViews = $this->generalService->getStoreViews();

        return $storeViews[array_rand($storeViews, 1)];
    }

    /**
     * @return CatalogProductAttributeSetEntity
     */
    private function getRandomAttributeSet()
    {
        $attributeSets = $this->productService->getAttributeSetList();

        return $attributeSets[array_rand($attributeSets, 1)];
    }

    /**
     * @param null|mixed $type
     *
     * @return CatalogAttributeEntity
     */
    private function getRandomAttribute($type = null)
    {
        $attributeSet = $this->getRandomAttributeSet();
        $attributes = $this->productAttributeService->getAttributeList($attributeSet->getSetId());

        if ($type !== null) {
            $attributes = array_filter($attributes, function (CatalogAttributeEntity $attribute) use ($type) {
                return $attribute->getType() === $type;
            });
        }

        return $attributes[array_rand($attributes, 1)];
    }

    /**
     * @return SalesOrderListEntity
     */
    private function getRandomOrder()
    {
        $orders = $this->orderService->getOrders();

        return $orders[array_rand($orders, 1)];
    }

    /**
     * @return SalesOrderCreditmemoEntity
     */
    private function getRandomCreditMemo()
    {
        $creditMemos = $this->creditMemoService->getCreditMemos();

        return $creditMemos[array_rand($creditMemos, 1)];
    }

    /**
     * @return SalesOrderInvoiceEntity
     */
    private function getRandomInvoice()
    {
        $invoices = $this->invoiceService->getInvoices();

        return $invoices[array_rand($invoices, 1)];
    }

    /**
     * @return int entity_id
     */
    private function createProduct()
    {
        $attributeSets = $this->productService->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productType = 'simple';
        $sku = '1003';
        $storeView = $this->getRandomStoreView()->getStoreId();
        $productData = new CatalogProductCreateEntity();

        return $this->productService->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);
    }

    /**
     * @param int $entityId
     *
     * @return bool
     */
    private function deleteProduct(int $entityId)
    {
        return $this->productService->deleteProductById($entityId);
    }
}
