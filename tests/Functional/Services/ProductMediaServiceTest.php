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

namespace Tests\Etrias\MagentoConnector\Functional\Services;

use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\Services\ProductAttributeService;
use Etrias\MagentoConnector\Services\ProductMediaService;
use Etrias\MagentoConnector\Services\ProductService;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeMediaCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeMediaTypeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductImageFileEntity;

/**
 * @coversNothing
 */
class ProductMediaServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;

    /**
     * @var ProductMediaService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ProductMediaService($this->adapter, $this->authenticationService);
        $this->productAttributeService = new ProductAttributeService($this->adapter, $this->authenticationService);
        $this->productService = new ProductService($this->adapter, $this->authenticationService);
        $this->generalService = new GeneralService($this->adapter, $this->authenticationService);
    }

    public function testGetCurrentStoreView()
    {
        $storeview = $this->service->getCurrentStoreView();
        $this->assertSame(0, $storeview);
    }

    public function testSetCurrentStoreView()
    {
        $storeView = $this->getRandomStoreView()->getStoreId();
        $selectedStoreView = $this->service->setCurrentStoreView($storeView);
        $this->assertSame($storeView, $selectedStoreView);
    }

    public function testGetMediaTypes()
    {
        $attributeSet = $this->getRandomAttributeSet();

        $mediaTypes = $this->service->getMediaTypes($attributeSet->getSetId());
        $this->assertInstanceOf(CatalogProductAttributeMediaTypeEntity::class, reset($mediaTypes));
    }

    public function testCreateAndGetProductMedia()
    {
        $image = 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAMAAACsjQ8GAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACVVBMVEXJycnk5OTHxwLk5AAByMcA5OQA2dkAzwAA5AAAzADYANjkAOTBALvfAADkAACqAAwAAOQAAKYAAAAAAADj4+Ph4QEB4+IA6gDZANPBAAwAALkAAACLAIdMAEqNAIkUABMSABKWAJLExMTd3d3AwATd3QADwL0A3d0A09MAxwEA3QAAyQDQANDdAN29ALfXAADdAACqAAoAAN0AAKMAAAAAAACpAAC6AACjAACgnp66urq0tLSoqKitra2uAACjAAC2AACeBwehoaGpqanjAADhAADj4uLq6urZAADNDAzMzMzFAADeAADBAADBv7/e3t7U1NTJycnJycnQAAC/AADZAAC0Cgqzs7PFxcUAhAAAiwAAfQAAiAAAgAAAhACEhISLi4uCgoKIiIh9fX17e3uEhIQA4wAA4QAA4wDZ2dnNzc0AyAAA4wAAyAAAxwAA2QAAzwAAzQDW1tbj4+PAwMDe3t61tbW3t7fIyMgAAFwAAF1VVVVdXV0AAFNbW1sAAFsAAFVTU1MGBllcXFwAAOPg4OEBAeMGBtnBwc0TE8wAANMAAO7R0dLu7u4BAdMAAOTa2trX19cAAOIGBsnp6em0tL8SEsDT09MAAAAAAAD//////wAA//8A8/MA/wAA5gDyAPL/AP/5AAD/AAAAAP8AAAAAqgAvAC8IAAgmACYAFwCZAJn3APfbANsAIgCBAIHFAMX1APUAxgBmAGY1ADUQABDTANMAUgDPAM/4APinAKcAlgAkACQHAAcrACvz8/Pm5ubyAAAA8wDy8vL5+fkAAPMAAPIyjJcPAAAAmnRSTlPh9Or07vT08fT29vTw9PTu9Or04enx9vr59vHp+/37/v77tsLDwsbCxMXCxsfCxcTCxcLDwrZcYGdpYGJmZGVmYmlnXOnx9vr59vG5xsbIxsjIysrIx8nGuTY5PTo8PDw5Ozo9Pjbp8fb59trs4+jt6u7u7Ovt6OPaJykqKSsqKiorKyfp8fb59vHn/O/88/z3/Pz3/PTv5wgJ2EgfEAAAAAFiS0dEmpjfZxIAAAAHdElNRQfhCRMMDTIqEy4uAAAByklEQVQoz2NgYGRkZGJmZmZhZWVj5+Dg5OLm5uHl4+MXEBAQFBISEmYQmTVrlujs2bPF5syZKz5v3vwFCxdKLFq8WHLJkiVSS5culQYpWAoCYiBi3rxly1eslFkEFkEomCW6FGjCUrAJq1avWSsLNGEpsgnICtat37BRAocCsBWbNm/ZKofPBKAjt8njU7B9x85dCvis2L1n7z5FTAX4wkFJWVlZRVVVVU1dXUNTS0tbR1dXT9/AwNDIyMjYxMTElMHM3NzcAogtraysbaysbO3Mze0dzM0draysnIDYmcFl8eLFrkDsNmvWfvdZsw4cXLzYA2iFJ9BmLyAWIazA28fHxxeI/fz9AwL9/YOCfXxCQn18wvz9/cOBOIIhMioqKhqCY2KjouLiExISkxISkhMSElKAOJUhbd68eelAnDFv3iGQNw/PmpV5ZNasLLgVBBVk5+Tk5AJxXk5OfkFOTmFRcXFJaXFxWXFxcTkQVzBUVlVVVdfU1NRC6Lr6qqoGILcRyG0C0s0MLcAwbQWa1bZkyVGQN48tWdIOtKIDKNwJtoKggq7u7u6e3t7evu7u/gm9vRMndXdPntLbOxUoPA0oPJ1hxky8YAYAkvRntcAIoQwAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTctMDktMTlUMTI6MTM6NTArMDA6MDAENAdVAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE3LTA5LTE5VDEyOjEzOjUwKzAwOjAwdWm/6QAAAABJRU5ErkJggg==';

        $entityId = $this->createProduct();

        $imageFile = $this->service->createProductImage(
            $entityId,
            new CatalogProductAttributeMediaCreateEntity(
                new CatalogProductImageFileEntity($image, 'image/png')
            )
        );

        $productImages = $this->service->getProductImagesById($entityId);
        $image = $productImages[0];

        $this->assertSame($imageFile, $image->getFile());

        $this->deleteProduct($entityId);
    }

    public function testGetMediaInfo()
    {
        $image = 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAMAAACsjQ8GAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACVVBMVEXJycnk5OTHxwLk5AAByMcA5OQA2dkAzwAA5AAAzADYANjkAOTBALvfAADkAACqAAwAAOQAAKYAAAAAAADj4+Ph4QEB4+IA6gDZANPBAAwAALkAAACLAIdMAEqNAIkUABMSABKWAJLExMTd3d3AwATd3QADwL0A3d0A09MAxwEA3QAAyQDQANDdAN29ALfXAADdAACqAAoAAN0AAKMAAAAAAACpAAC6AACjAACgnp66urq0tLSoqKitra2uAACjAAC2AACeBwehoaGpqanjAADhAADj4uLq6urZAADNDAzMzMzFAADeAADBAADBv7/e3t7U1NTJycnJycnQAAC/AADZAAC0Cgqzs7PFxcUAhAAAiwAAfQAAiAAAgAAAhACEhISLi4uCgoKIiIh9fX17e3uEhIQA4wAA4QAA4wDZ2dnNzc0AyAAA4wAAyAAAxwAA2QAAzwAAzQDW1tbj4+PAwMDe3t61tbW3t7fIyMgAAFwAAF1VVVVdXV0AAFNbW1sAAFsAAFVTU1MGBllcXFwAAOPg4OEBAeMGBtnBwc0TE8wAANMAAO7R0dLu7u4BAdMAAOTa2trX19cAAOIGBsnp6em0tL8SEsDT09MAAAAAAAD//////wAA//8A8/MA/wAA5gDyAPL/AP/5AAD/AAAAAP8AAAAAqgAvAC8IAAgmACYAFwCZAJn3APfbANsAIgCBAIHFAMX1APUAxgBmAGY1ADUQABDTANMAUgDPAM/4APinAKcAlgAkACQHAAcrACvz8/Pm5ubyAAAA8wDy8vL5+fkAAPMAAPIyjJcPAAAAmnRSTlPh9Or07vT08fT29vTw9PTu9Or04enx9vr59vHp+/37/v77tsLDwsbCxMXCxsfCxcTCxcLDwrZcYGdpYGJmZGVmYmlnXOnx9vr59vG5xsbIxsjIysrIx8nGuTY5PTo8PDw5Ozo9Pjbp8fb59trs4+jt6u7u7Ovt6OPaJykqKSsqKiorKyfp8fb59vHn/O/88/z3/Pz3/PTv5wgJ2EgfEAAAAAFiS0dEmpjfZxIAAAAHdElNRQfhCRMMDTIqEy4uAAAByklEQVQoz2NgYGRkZGJmZmZhZWVj5+Dg5OLm5uHl4+MXEBAQFBISEmYQmTVrlujs2bPF5syZKz5v3vwFCxdKLFq8WHLJkiVSS5culQYpWAoCYiBi3rxly1eslFkEFkEomCW6FGjCUrAJq1avWSsLNGEpsgnICtat37BRAocCsBWbNm/ZKofPBKAjt8njU7B9x85dCvis2L1n7z5FTAX4wkFJWVlZRVVVVU1dXUNTS0tbR1dXT9/AwNDIyMjYxMTElMHM3NzcAogtraysbaysbO3Mze0dzM0draysnIDYmcFl8eLFrkDsNmvWfvdZsw4cXLzYA2iFJ9BmLyAWIazA28fHxxeI/fz9AwL9/YOCfXxCQn18wvz9/cOBOIIhMioqKhqCY2KjouLiExISkxISkhMSElKAOJUhbd68eelAnDFv3iGQNw/PmpV5ZNasLLgVBBVk5+Tk5AJxXk5OfkFOTmFRcXFJaXFxWXFxcTkQVzBUVlVVVdfU1NRC6Lr6qqoGILcRyG0C0s0MLcAwbQWa1bZkyVGQN48tWdIOtKIDKNwJtoKggq7u7u6e3t7evu7u/gm9vRMndXdPntLbOxUoPA0oPJ1hxky8YAYAkvRntcAIoQwAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTctMDktMTlUMTI6MTM6NTArMDA6MDAENAdVAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE3LTA5LTE5VDEyOjEzOjUwKzAwOjAwdWm/6QAAAABJRU5ErkJggg==';

        $entityId = $this->createProduct();

        $imageFile = $this->service->createProductImage(
            $entityId,
            new CatalogProductAttributeMediaCreateEntity(
                new CatalogProductImageFileEntity($image, 'image/png')
            )
        );

        $mediaInfo = $this->service->getMediaInfo($entityId, $imageFile);

        $this->assertSame($imageFile, $mediaInfo->getFile());

        $this->deleteProduct($entityId);
    }

    public function testRemoveProductImage()
    {
        $image = 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAMAAACsjQ8GAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACVVBMVEXJycnk5OTHxwLk5AAByMcA5OQA2dkAzwAA5AAAzADYANjkAOTBALvfAADkAACqAAwAAOQAAKYAAAAAAADj4+Ph4QEB4+IA6gDZANPBAAwAALkAAACLAIdMAEqNAIkUABMSABKWAJLExMTd3d3AwATd3QADwL0A3d0A09MAxwEA3QAAyQDQANDdAN29ALfXAADdAACqAAoAAN0AAKMAAAAAAACpAAC6AACjAACgnp66urq0tLSoqKitra2uAACjAAC2AACeBwehoaGpqanjAADhAADj4uLq6urZAADNDAzMzMzFAADeAADBAADBv7/e3t7U1NTJycnJycnQAAC/AADZAAC0Cgqzs7PFxcUAhAAAiwAAfQAAiAAAgAAAhACEhISLi4uCgoKIiIh9fX17e3uEhIQA4wAA4QAA4wDZ2dnNzc0AyAAA4wAAyAAAxwAA2QAAzwAAzQDW1tbj4+PAwMDe3t61tbW3t7fIyMgAAFwAAF1VVVVdXV0AAFNbW1sAAFsAAFVTU1MGBllcXFwAAOPg4OEBAeMGBtnBwc0TE8wAANMAAO7R0dLu7u4BAdMAAOTa2trX19cAAOIGBsnp6em0tL8SEsDT09MAAAAAAAD//////wAA//8A8/MA/wAA5gDyAPL/AP/5AAD/AAAAAP8AAAAAqgAvAC8IAAgmACYAFwCZAJn3APfbANsAIgCBAIHFAMX1APUAxgBmAGY1ADUQABDTANMAUgDPAM/4APinAKcAlgAkACQHAAcrACvz8/Pm5ubyAAAA8wDy8vL5+fkAAPMAAPIyjJcPAAAAmnRSTlPh9Or07vT08fT29vTw9PTu9Or04enx9vr59vHp+/37/v77tsLDwsbCxMXCxsfCxcTCxcLDwrZcYGdpYGJmZGVmYmlnXOnx9vr59vG5xsbIxsjIysrIx8nGuTY5PTo8PDw5Ozo9Pjbp8fb59trs4+jt6u7u7Ovt6OPaJykqKSsqKiorKyfp8fb59vHn/O/88/z3/Pz3/PTv5wgJ2EgfEAAAAAFiS0dEmpjfZxIAAAAHdElNRQfhCRMMDTIqEy4uAAAByklEQVQoz2NgYGRkZGJmZmZhZWVj5+Dg5OLm5uHl4+MXEBAQFBISEmYQmTVrlujs2bPF5syZKz5v3vwFCxdKLFq8WHLJkiVSS5culQYpWAoCYiBi3rxly1eslFkEFkEomCW6FGjCUrAJq1avWSsLNGEpsgnICtat37BRAocCsBWbNm/ZKofPBKAjt8njU7B9x85dCvis2L1n7z5FTAX4wkFJWVlZRVVVVU1dXUNTS0tbR1dXT9/AwNDIyMjYxMTElMHM3NzcAogtraysbaysbO3Mze0dzM0draysnIDYmcFl8eLFrkDsNmvWfvdZsw4cXLzYA2iFJ9BmLyAWIazA28fHxxeI/fz9AwL9/YOCfXxCQn18wvz9/cOBOIIhMioqKhqCY2KjouLiExISkxISkhMSElKAOJUhbd68eelAnDFv3iGQNw/PmpV5ZNasLLgVBBVk5+Tk5AJxXk5OfkFOTmFRcXFJaXFxWXFxcTkQVzBUVlVVVdfU1NRC6Lr6qqoGILcRyG0C0s0MLcAwbQWa1bZkyVGQN48tWdIOtKIDKNwJtoKggq7u7u6e3t7evu7u/gm9vRMndXdPntLbOxUoPA0oPJ1hxky8YAYAkvRntcAIoQwAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTctMDktMTlUMTI6MTM6NTArMDA6MDAENAdVAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE3LTA5LTE5VDEyOjEzOjUwKzAwOjAwdWm/6QAAAABJRU5ErkJggg==';

        $entityId = $this->createProduct();

        $imageFile = $this->service->createProductImage(
            $entityId,
            new CatalogProductAttributeMediaCreateEntity(
                new CatalogProductImageFileEntity($image, 'image/png')
            )
        );

        $this->assertTrue($this->service->removeProductImage($entityId, $imageFile));

        $this->deleteProduct($entityId);
    }

    public function testUpdateProductImage()
    {
        $image = 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAMAAACsjQ8GAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACVVBMVEXJycnk5OTHxwLk5AAByMcA5OQA2dkAzwAA5AAAzADYANjkAOTBALvfAADkAACqAAwAAOQAAKYAAAAAAADj4+Ph4QEB4+IA6gDZANPBAAwAALkAAACLAIdMAEqNAIkUABMSABKWAJLExMTd3d3AwATd3QADwL0A3d0A09MAxwEA3QAAyQDQANDdAN29ALfXAADdAACqAAoAAN0AAKMAAAAAAACpAAC6AACjAACgnp66urq0tLSoqKitra2uAACjAAC2AACeBwehoaGpqanjAADhAADj4uLq6urZAADNDAzMzMzFAADeAADBAADBv7/e3t7U1NTJycnJycnQAAC/AADZAAC0Cgqzs7PFxcUAhAAAiwAAfQAAiAAAgAAAhACEhISLi4uCgoKIiIh9fX17e3uEhIQA4wAA4QAA4wDZ2dnNzc0AyAAA4wAAyAAAxwAA2QAAzwAAzQDW1tbj4+PAwMDe3t61tbW3t7fIyMgAAFwAAF1VVVVdXV0AAFNbW1sAAFsAAFVTU1MGBllcXFwAAOPg4OEBAeMGBtnBwc0TE8wAANMAAO7R0dLu7u4BAdMAAOTa2trX19cAAOIGBsnp6em0tL8SEsDT09MAAAAAAAD//////wAA//8A8/MA/wAA5gDyAPL/AP/5AAD/AAAAAP8AAAAAqgAvAC8IAAgmACYAFwCZAJn3APfbANsAIgCBAIHFAMX1APUAxgBmAGY1ADUQABDTANMAUgDPAM/4APinAKcAlgAkACQHAAcrACvz8/Pm5ubyAAAA8wDy8vL5+fkAAPMAAPIyjJcPAAAAmnRSTlPh9Or07vT08fT29vTw9PTu9Or04enx9vr59vHp+/37/v77tsLDwsbCxMXCxsfCxcTCxcLDwrZcYGdpYGJmZGVmYmlnXOnx9vr59vG5xsbIxsjIysrIx8nGuTY5PTo8PDw5Ozo9Pjbp8fb59trs4+jt6u7u7Ovt6OPaJykqKSsqKiorKyfp8fb59vHn/O/88/z3/Pz3/PTv5wgJ2EgfEAAAAAFiS0dEmpjfZxIAAAAHdElNRQfhCRMMDTIqEy4uAAAByklEQVQoz2NgYGRkZGJmZmZhZWVj5+Dg5OLm5uHl4+MXEBAQFBISEmYQmTVrlujs2bPF5syZKz5v3vwFCxdKLFq8WHLJkiVSS5culQYpWAoCYiBi3rxly1eslFkEFkEomCW6FGjCUrAJq1avWSsLNGEpsgnICtat37BRAocCsBWbNm/ZKofPBKAjt8njU7B9x85dCvis2L1n7z5FTAX4wkFJWVlZRVVVVU1dXUNTS0tbR1dXT9/AwNDIyMjYxMTElMHM3NzcAogtraysbaysbO3Mze0dzM0draysnIDYmcFl8eLFrkDsNmvWfvdZsw4cXLzYA2iFJ9BmLyAWIazA28fHxxeI/fz9AwL9/YOCfXxCQn18wvz9/cOBOIIhMioqKhqCY2KjouLiExISkxISkhMSElKAOJUhbd68eelAnDFv3iGQNw/PmpV5ZNasLLgVBBVk5+Tk5AJxXk5OfkFOTmFRcXFJaXFxWXFxcTkQVzBUVlVVVdfU1NRC6Lr6qqoGILcRyG0C0s0MLcAwbQWa1bZkyVGQN48tWdIOtKIDKNwJtoKggq7u7u6e3t7evu7u/gm9vRMndXdPntLbOxUoPA0oPJ1hxky8YAYAkvRntcAIoQwAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTctMDktMTlUMTI6MTM6NTArMDA6MDAENAdVAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE3LTA5LTE5VDEyOjEzOjUwKzAwOjAwdWm/6QAAAABJRU5ErkJggg==';

        $entityId = $this->createProduct();

        $imageFile = $this->service->createProductImage(
            $entityId,
            new CatalogProductAttributeMediaCreateEntity(
                new CatalogProductImageFileEntity($image, 'image/png')
            )
        );

        $updateResult = $this->service->updateProductImage($entityId, $imageFile, new CatalogProductAttributeMediaCreateEntity(
            new CatalogProductImageFileEntity($image, 'image/png')
        ));

        $this->assertTrue($updateResult);

        $this->deleteProduct($entityId);
    }
}
