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

namespace Etrias\MagentoConnector\SoapTypes;

class SalesOrderAddressEntity
{
    /**
     * @var string
     */
    protected $increment_id = null;

    /**
     * @var string
     */
    protected $parent_id = null;

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
    protected $is_active = null;

    /**
     * @var string
     */
    protected $address_type = null;

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
     * @var string
     */
    protected $region_id = null;

    /**
     * @var string
     */
    protected $address_id = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $parent_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $is_active
     * @var string $address_type
     * @var string $firstname
     * @var string $lastname
     * @var string $company
     * @var string $street
     * @var string $city
     * @var string $region
     * @var string $postcode
     * @var string $country_id
     * @var string $telephone
     * @var string $fax
     * @var string $region_id
     * @var string $address_id
     *
     * @param mixed $increment_id
     * @param mixed $parent_id
     * @param mixed $created_at
     * @param mixed $updated_at
     * @param mixed $is_active
     * @param mixed $address_type
     * @param mixed $firstname
     * @param mixed $lastname
     * @param mixed $company
     * @param mixed $street
     * @param mixed $city
     * @param mixed $region
     * @param mixed $postcode
     * @param mixed $country_id
     * @param mixed $telephone
     * @param mixed $fax
     * @param mixed $region_id
     * @param mixed $address_id
     */
    public function __construct($increment_id, $parent_id, $created_at, $updated_at, $is_active, $address_type, $firstname, $lastname, $company, $street, $city, $region, $postcode, $country_id, $telephone, $fax, $region_id, $address_id)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->address_type = $address_type;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->company = $company;
        $this->street = $street;
        $this->city = $city;
        $this->region = $region;
        $this->postcode = $postcode;
        $this->country_id = $country_id;
        $this->telephone = $telephone;
        $this->fax = $fax;
        $this->region_id = $region_id;
        $this->address_id = $address_id;
    }

    /**
     * @return string
     */
    public function getIncrement_id()
    {
        return $this->increment_id;
    }

    /**
     * @param string $increment_id
     *
     * @return $this
     */
    public function setIncrement_id($increment_id)
    {
        $this->increment_id = $increment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     *
     * @return $this
     */
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;

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
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     *
     * @return $this
     */
    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;

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
}
