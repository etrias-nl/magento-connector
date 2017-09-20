<?php

declare(strict_types = 1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\MagentoConnector\Services;

use Etrias\MagentoConnector\Adapter\AdapterInterface as MagentoAdapterInterface;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeMediaCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeMediaTypeEntity;

class ProductMediaService
{
    /** @var MagentoAdapterInterface */
    protected $adapter;

    /** @var AuthenticationService */
    protected $authenticationService;

    /**
     * AuthenticationService constructor.
     *
     * @param MagentoAdapterInterface $adapter
     * @param AuthenticationService   $authenticationService
     */
    public function __construct(
        MagentoAdapterInterface $adapter,
        AuthenticationService $authenticationService
    ) {
        $this->adapter = $adapter;
        $this->authenticationService = $authenticationService;
    }

    public function getCurrentStoreView()
    {
        return $this->adapter->getCurrentStoreView($this->authenticationService->login());
    }

    public function setCurrentStoreView(int $storeView): int
    {
        return $this->adapter->setCurrentStoreView($this->authenticationService->login(), $storeView);
    }

    /**
     * @param int $attributeSetId
     *
     * @return CatalogProductAttributeMediaTypeEntity[]
     */
    public function getMediaTypes(int $attributeSetId): array
    {
        return $this->adapter->getProductMediaTypes($this->authenticationService->login(), $attributeSetId);
    }

    /**
     * @param int      $productId
     * @param int|null $storeView
     *
     * @return array
     */
    public function getProductImagesById(int $productId, int $storeView = null): array
    {
        return $this->adapter->getProductImages($this->authenticationService->login(), (string) $productId, 'id', $storeView);
    }

    public function createProductImage(int $productId, CatalogProductAttributeMediaCreateEntity $data, int $storeView = null): string
    {
        return $this->adapter->createProductImage($this->authenticationService->login(), (string) $productId, $data, $storeView);
    }

    public function getMediaInfo(int $productId, string $fileName, int $storeView = null)
    {
        return $this->adapter->getMediaInfo($this->authenticationService->login(), (string) $productId, $fileName, $storeView);
    }

    public function removeProductImage(int $productId, string $fileName)
    {
        return $this->adapter->removeProductImage($this->authenticationService->login(), (string) $productId, $fileName);
    }

    public function updateProductImage(int $productId, string $fileName, CatalogProductAttributeMediaCreateEntity $data, int $storeView = null)
    {
        return $this->adapter->updateProductImage($this->authenticationService->login(), (string) $productId, $fileName, $data, $storeView);
    }
}
