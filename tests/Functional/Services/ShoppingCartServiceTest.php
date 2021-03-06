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

use Etrias\MagentoConnector\Exceptions\MagentoSoapException;
use Etrias\MagentoConnector\Services\ShoppingCartService;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartCustomerAddressEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartCustomerEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartInfoEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartProductEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartTotalsEntity;

/**
 * @coversNothing
 */
class ShoppingCartServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;

    /**
     * @var ShoppingCartService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ShoppingCartService($this->adapter, $this->authenticationService);
    }

    public function testCreateCart()
    {
        $shoppingCartId = $this->service->createCart();

        $this->assertInternalType('numeric', $shoppingCartId);
    }

    public function testGetCartInfo()
    {
        $shoppingCartId = $this->service->createCart();
        $shoppingCartInfo = $this->service->getCartInfo($shoppingCartId);

        $this->assertInstanceOf(ShoppingCartInfoEntity::class, $shoppingCartInfo);
    }

    public function testGetCartLicence()
    {
        $shoppingCartId = $this->service->createCart();
        $shoppingCartLicences = $this->service->getCartLicences($shoppingCartId);

        $this->assertInternalType('array', $shoppingCartLicences);
    }

    public function testGetCartTotals()
    {
        $shoppingCartId = $this->service->createCart();
        $totals = $this->service->getCartTotals($shoppingCartId);

        $this->assertInternalType('array', $totals);
        $this->assertInstanceOf(ShoppingCartTotalsEntity::class, reset($totals));
    }

    public function testAddAndRemoveCouponToCart()
    {
        $quoteId = $this->service->createCart('20');
        $quoteProduct = new ShoppingCartProductEntity();
        $quoteProduct->setSku('9990001793135')
            ->setQty(3);
        $this->service->addProductToCart($quoteId, $quoteProduct);

        $this->assertTrue(
            $this->service->addCouponToCart($quoteId, 'VRND10')
        );

        $this->assertTrue(
            $this->service->removeCouponFromCart($quoteId)
        );
    }

    public function testSetCustomerAddresses()
    {
        $quoteId = $this->service->createCart('20');
        $billingAddress = new ShoppingCartCustomerAddressEntity();
        $billingAddress->setMode(ShoppingCartCustomerAddressEntity::MODE_BILLING)
            ->setFirstname($this->getFaker()->firstName)
            ->setLastname($this->getFaker()->lastName)
            ->setStreet($this->getFaker()->streetName)
            ->setCity($this->getFaker()->city)
            ->setPostcode($this->getFaker()->postcode)
            ->setCountryId('NL')
        ;

        $shippingAddress = new ShoppingCartCustomerAddressEntity();
        $shippingAddress->setMode(ShoppingCartCustomerAddressEntity::MODE_SHIPPING)
            ->setFirstname($this->getFaker()->firstName)
            ->setLastname($this->getFaker()->lastName)
            ->setStreet($this->getFaker()->streetName)
            ->setCity($this->getFaker()->city)
            ->setPostcode($this->getFaker()->postcode)
            ->setCountryId('NL')
        ;

        $this->assertTrue(
            $this->service->setCustomerAddresses($quoteId, [$billingAddress, $shippingAddress])
        );

        $cardInfo = $this->service->getCartInfo($quoteId);

        $this->assertSame($shippingAddress->getFirstname(), $cardInfo->getShippingAddress()->getFirstname());
        $this->assertSame($shippingAddress->getLastname(), $cardInfo->getShippingAddress()->getLastname());
        $this->assertSame($shippingAddress->getStreet(), $cardInfo->getShippingAddress()->getStreet());
        $this->assertSame($shippingAddress->getCity(), $cardInfo->getShippingAddress()->getCity());
        $this->assertSame($shippingAddress->getPostcode(), $cardInfo->getShippingAddress()->getPostcode());
        $this->assertSame($shippingAddress->getCountryId(), $cardInfo->getShippingAddress()->getCountryId());

        $this->assertSame($billingAddress->getFirstname(), $cardInfo->getBillingAddress()->getFirstname());
        $this->assertSame($billingAddress->getLastname(), $cardInfo->getBillingAddress()->getLastname());
        $this->assertSame($billingAddress->getStreet(), $cardInfo->getBillingAddress()->getStreet());
        $this->assertSame($billingAddress->getCity(), $cardInfo->getBillingAddress()->getCity());
        $this->assertSame($billingAddress->getPostcode(), $cardInfo->getBillingAddress()->getPostcode());
        $this->assertSame($billingAddress->getCountryId(), $cardInfo->getBillingAddress()->getCountryId());
    }

    public function testSetCustomerInfo()
    {
        //due to a bug in magento :(
        $this->expectException(MagentoSoapException::class);

        $quoteId = $this->service->createCart('20');

        $data = new ShoppingCartCustomerEntity();
        $data->setFirstname($this->getFaker()->firstName)
            ->setLastname($this->getFaker()->lastName)
            ->setEmail($this->getFaker()->email)
            ->setWebsiteId(0)
            ->setStoreId(0)
            ->setMode('guest');

        $this->assertTrue(
            $this->service->setCustomerInfo($quoteId, $data)
        );
    }

    //TODO finish test. (Due to Magento bugs)

    public function testGetAvailablePaymentMethods()
    {
        $quoteId = $this->service->createCart('20');

        $paymentMethods = $this->service->getAvailablePaymentMethods($quoteId);
    }
}
