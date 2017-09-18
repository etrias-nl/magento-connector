<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 18-9-17
 * Time: 13:42
 */

namespace Tests\Etrias\MagentoConnector\Functional\Services;


use DateTime;
use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\Services\ProductAttributeService;
use Etrias\MagentoConnector\Services\ProductService;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;
use Etrias\MagentoConnector\SoapTypes\StoreEntity;

trait RandomizeTrait
{
    /** @var  GeneralService */
    private $generalService;

    /** @var  ProductService */
    private $productService;

    /** @var  ProductAttributeService */
    private $productAttributeService;

    /**
     * @param DateTime $min
     * @param DateTime $max
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
}
