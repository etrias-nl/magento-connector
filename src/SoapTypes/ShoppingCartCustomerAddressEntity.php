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

class ShoppingCartCustomerAddressEntity
{
    /**
     * @var string
     */
    protected $mode = null;

    /**
     * @var string
     */
    protected $address_id = null;

    /**
     * @var string
     */
    protected $firstname = null;

    /**
     * @var string
     */
    protected $lastname = null;

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
    protected $is_default_billing = null;

    /**
     * @var int
     */
    protected $is_default_shipping = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $address_id
     * @var string $firstname
     * @var string $lastname
     * @var string $company
     * @var string $street
     * @var string $city
     * @var string $region
     * @var string $region_id
     * @var string $postcode
     * @var string $country_id
     * @var string $telephone
     * @var string $fax
     * @var int    $is_default_billing
     * @var int    $is_default_shipping
     *
     * @param mixed $mode
     * @param mixed $address_id
     * @param mixed $firstname
     * @param mixed $lastname
     * @param mixed $company
     * @param mixed $street
     * @param mixed $city
     * @param mixed $region
     * @param mixed $region_id
     * @param mixed $postcode
     * @param mixed $country_id
     * @param mixed $telephone
     * @param mixed $fax
     * @param mixed $is_default_billing
     * @param mixed $is_default_shipping
     */
    public function __construct($mode, $address_id, $firstname, $lastname, $company, $street, $city, $region, $region_id, $postcode, $country_id, $telephone, $fax, $is_default_billing, $is_default_shipping)
    {
        $this->mode = $mode;
        $this->address_id = $address_id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->company = $company;
        $this->street = $street;
        $this->city = $city;
        $this->region = $region;
        $this->region_id = $region_id;
        $this->postcode = $postcode;
        $this->country_id = $country_id;
        $this->telephone = $telephone;
        $this->fax = $fax;
        $this->is_default_billing = $is_default_billing;
        $this->is_default_shipping = $is_default_shipping;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
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
    public function getIs_default_billing()
    {
        return $this->is_default_billing;
    }

    /**
     * @param int $is_default_billing
     *
     * @return $this
     */
    public function setIs_default_billing($is_default_billing)
    {
        $this->is_default_billing = $is_default_billing;

        return $this;
    }

    /**
     * @return int
     */
    public function getIs_default_shipping()
    {
        return $this->is_default_shipping;
    }

    /**
     * @param int $is_default_shipping
     *
     * @return $this
     */
    public function setIs_default_shipping($is_default_shipping)
    {
        $this->is_default_shipping = $is_default_shipping;

        return $this;
    }
}
