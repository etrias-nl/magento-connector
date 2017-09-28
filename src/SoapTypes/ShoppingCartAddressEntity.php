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

namespace Etrias\MagentoConnector\SoapTypes;

class ShoppingCartAddressEntity
{
    /**
     * @var string
     */
    protected $address_id = null;

    /**
     * @var string
     */
    protected $created_at = null;

    /**
     * @var string
     */
    protected $updated_at = null;

    /**
     * @var string
     */
    protected $customer_id = null;

    /**
     * @var int
     */
    protected $save_in_address_book = null;

    /**
     * @var string
     */
    protected $customer_address_id = null;

    /**
     * @var string
     */
    protected $address_type = null;

    /**
     * @var string
     */
    protected $email = null;

    /**
     * @var string
     */
    protected $prefix = null;

    /**
     * @var string
     */
    protected $firstname = null;

    /**
     * @var string
     */
    protected $middlename = null;

    /**
     * @var string
     */
    protected $lastname = null;

    /**
     * @var string
     */
    protected $suffix = null;

    /**
     * @var string
     */
    protected $company = null;

    /**
     * @var string
     */
    protected $street = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $region = null;

    /**
     * @var string
     */
    protected $region_id = null;

    /**
     * @var string
     */
    protected $postcode = null;

    /**
     * @var string
     */
    protected $country_id = null;

    /**
     * @var string
     */
    protected $telephone = null;

    /**
     * @var string
     */
    protected $fax = null;

    /**
     * @var int
     */
    protected $same_as_billing = null;

    /**
     * @var int
     */
    protected $free_shipping = null;

    /**
     * @var string
     */
    protected $shipping_method = null;

    /**
     * @var string
     */
    protected $shipping_description = null;

    /**
     * @var float
     */
    protected $weight = null;

    /**
     * @return string
     */
    public function getAddressId()
    {
        return $this->address_id;
    }

    /**
     * @param string $address_id
     *
     * @return $this
     */
    public function setAddressId($address_id)
    {
        $this->address_id = $address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param string $customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getSaveInAddressBook()
    {
        return $this->save_in_address_book;
    }

    /**
     * @param int $save_in_address_book
     *
     * @return $this
     */
    public function setSaveInAddressBook($save_in_address_book)
    {
        $this->save_in_address_book = $save_in_address_book;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerAddressId()
    {
        return $this->customer_address_id;
    }

    /**
     * @param string $customer_address_id
     *
     * @return $this
     */
    public function setCustomerAddressId($customer_address_id)
    {
        $this->customer_address_id = $customer_address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressType()
    {
        return $this->address_type;
    }

    /**
     * @param string $address_type
     *
     * @return $this
     */
    public function setAddressType($address_type)
    {
        $this->address_type = $address_type;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * @param string $middlename
     *
     * @return $this
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * @param string $region_id
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->region_id = $region_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * @param string $country_id
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->country_id = $country_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @return int
     */
    public function getSameAsBilling()
    {
        return $this->same_as_billing;
    }

    /**
     * @param int $same_as_billing
     *
     * @return $this
     */
    public function setSameAsBilling($same_as_billing)
    {
        $this->same_as_billing = $same_as_billing;

        return $this;
    }

    /**
     * @return int
     */
    public function getFreeShipping()
    {
        return $this->free_shipping;
    }

    /**
     * @param int $free_shipping
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->free_shipping = $free_shipping;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }

    /**
     * @param string $shipping_method
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->shipping_method = $shipping_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDescription()
    {
        return $this->shipping_description;
    }

    /**
     * @param string $shipping_description
     *
     * @return $this
     */
    public function setShippingDescription($shipping_description)
    {
        $this->shipping_description = $shipping_description;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
