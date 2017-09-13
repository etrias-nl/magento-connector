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

namespace Etrias\MagentoConnector\Adapter;

use Etrias\MagentoConnector\SoapTypes\ApiEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogAssignedProduct;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityNoChildren;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryInfo;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryTree;

interface AdapterInterface
{
    /**
     * @param string $username
     * @param string $password
     *
     * @return string SessionID
     */
    public function login(string $username, string $password): string;

    /**
     * @return string SessionId
     */
    public function startSession(): string;

    /**
     * @param string $sessionId
     *
     * @return bool
     */
    public function endSession(string $sessionId): bool;

    /**
     * @param string $sessionId
     *
     * @return ApiEntity[]
     */
    public function resources(string $sessionId): array;

    public function globalFaults(string $sessionId): array;

    public function resourceFaults(string $sessionId, string $resourceName): array;

    public function getCurrentStoreView(string $sessionId): int;

    public function setCurrentStoreView(string $sessionId, int $storeView): int;

    public function getCategoryTree(string $sessionId, int $parentId = null, int $storeView = null): CatalogCategoryTree;

    /**
     * @param string $sessionId
     * @param int $categoryId
     * @return CatalogAssignedProduct[]
     */
    public function getAssignedProducts(string $sessionId, int $categoryId): array;

    public function assignProduct(string $sessionId, int $categoryId, int $product, int $position = null, string $identifierType = 'id'): bool;

    public function createCategory(string $sessionId, int $parentId, CatalogCategoryEntityCreate $categoryData, string $storeView = null): int;

    public function deleteCategory(string $sessionId, int $categoryId): bool;

    public function getCategory(string $sessionId, int $categoryId, string $storeView = null, array $attributes = null): CatalogCategoryInfo;

    /**
     * @param string $sessionId
     * @param int|null $parentId
     * @param int|null $websiteId
     * @param int|null $storeView
     * @return CatalogCategoryEntityNoChildren[]
     */
    public function getCategoriesByParent(string $sessionId, int $parentId = null, int $websiteId = null, int $storeView = null): array;
}
