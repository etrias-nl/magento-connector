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
     * Constructor.
     *
     * @var string
     * @var string $created_at
     * @var string $updated_at
     * @var string $customer_id
     * @var int    $save_in_address_book
     * @var string $customer_address_id
     * @var string $address_type
     * @var string $email
     * @var string $prefix
     * @var string $firstname
     * @var string $middlename
     * @var string $lastname
     * @var string $suffix
     * @var string $company
     * @var string $street
     * @var string $city
     * @var string $region
     * @var string $region_id
     * @var string $postcode
     * @var string $country_id
     * @var string $telephone
     * @var string $fax
     * @var int    $same_as_billing
     * @var int    $free_shipping
     * @var string $shipping_method
     * @var string $shipping_description
     * @var float  $weight
     *
     * @param mixed $address_id
     * @param mixed $created_at
     * @param mixed $updated_at
     * @param mixed $customer_id
     * @param mixed $save_in_address_book
     * @param mixed $customer_address_id
     * @param mixed $address_type
     * @param mixed $email
     * @param mixed $prefix
     * @param mixed $firstname
     * @param mixed $middlename
     * @param mixed $lastname
     * @param mixed $suffix
     * @param mixed $company
     * @param mixed $street
     * @param mixed $city
     * @param mixed $region
     * @param mixed $region_id
     * @param mixed $postcode
     * @param mixed $country_id
     * @param mixed $telephone
     * @param mixed $fax
     * @param mixed $same_as_billing
     * @param mixed $free_shipping
     * @param mixed $shipping_method
     * @param mixed $shipping_description
     * @param mixed $weight
     */
    public function __construct($address_id, $created_at, $updated_at, $customer_id, $save_in_address_book, $customer_address_id, $address_type, $email, $prefix, $firstname, $middlename, $lastname, $suffix, $company, $street, $city, $region, $region_id, $postcode, $country_id, $telephone, $fax, $same_as_billing, $free_shipping, $shipping_method, $shipping_description, $weight)
    {
        $this->address_id = $address_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->customer_id = $customer_id;
        $this->save_in_address_book = $save_in_address_book;
        $this->customer_address_id = $customer_address_id;
        $this->address_type = $address_type;
        $this->email = $email;
        $this->prefix = $prefix;
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
        $this->suffix = $suffix;
        $this->company = $company;
        $this->street = $street;
        $this->city = $city;
        $this->region = $region;
        $this->region_id = $region_id;
        $this->postcode = $postcode;
        $this->country_id = $country_id;
        $this->telephone = $telephone;
        $this->fax = $fax;
        $this->same_as_billing = $same_as_billing;
        $this->free_shipping = $free_shipping;
        $this->shipping_method = $shipping_method;
        $this->shipping_description = $shipping_description;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getAddress_id()
    {
        return $this->address_id;
    }

    /**
     * @param string $address_id
     *
     * @return $this
     */
    public function setAddress_id($address_id)
    {
        $this->address_id = $address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     *
     * @return $this
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     *
     * @return $this
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    /**
     * @param string $customer_id
     *
     * @return $this
     */
    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getSave_in_address_book()
    {
        return $this->save_in_address_book;
    }

    /**
     * @param int $save_in_address_book
     *
     * @return $this
     */
    public function setSave_in_address_book($save_in_address_book)
    {
        $this->save_in_address_book = $save_in_address_book;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_address_id()
    {
        return $this->customer_address_id;
    }

    /**
     * @param string $customer_address_id
     *
     * @return $this
     */
    public function setCustomer_address_id($customer_address_id)
    {
        $this->customer_address_id = $customer_address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress_type()
    {
        return $this->address_type;
    }

    /**
     * @param string $address_type
     *
     * @return $this
     */
    public function setAddress_type($address_type)
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
    public function getRegion_id()
    {
        return $this->region_id;
    }

    /**
     * @param string $region_id
     *
     * @return $this
     */
    public function setRegion_id($region_id)
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
    public function getCountry_id()
    {
        return $this->country_id;
    }

    /**
     * @param string $country_id
     *
     * @return $this
     */
    public function setCountry_id($country_id)
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
    public function getSame_as_billing()
    {
        return $this->same_as_billing;
    }

    /**
     * @param int $same_as_billing
     *
     * @return $this
     */
    public function setSame_as_billing($same_as_billing)
    {
        $this->same_as_billing = $same_as_billing;

        return $this;
    }

    /**
     * @return int
     */
    public function getFree_shipping()
    {
        return $this->free_shipping;
    }

    /**
     * @param int $free_shipping
     *
     * @return $this
     */
    public function setFree_shipping($free_shipping)
    {
        $this->free_shipping = $free_shipping;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_method()
    {
        return $this->shipping_method;
    }

    /**
     * @param string $shipping_method
     *
     * @return $this
     */
    public function setShipping_method($shipping_method)
    {
        $this->shipping_method = $shipping_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_description()
    {
        return $this->shipping_description;
    }

    /**
     * @param string $shipping_description
     *
     * @return $this
     */
    public function setShipping_description($shipping_description)
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
