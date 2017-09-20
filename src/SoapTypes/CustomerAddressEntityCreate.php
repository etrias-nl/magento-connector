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

class CustomerAddressEntityCreate
{
    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $company = null;

    /**
     * @var string
     */
    protected $country_id = null;

    /**
     * @var string
     */
    protected $fax = null;

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
    protected $middlename = null;

    /**
     * @var string
     */
    protected $postcode = null;

    /**
     * @var string
     */
    protected $prefix = null;

    /**
     * @var int
     */
    protected $region_id = null;

    /**
     * @var string
     */
    protected $region = null;

    /**
     * @var string[]
     */
    protected $street = null;

    /**
     * @var string
     */
    protected $suffix = null;

    /**
     * @var string
     */
    protected $telephone = null;

    /**
     * @var bool
     */
    protected $is_default_billing = null;

    /**
     * @var bool
     */
    protected $is_default_shipping = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string   $company
     * @var string   $country_id
     * @var string   $fax
     * @var string   $firstname
     * @var string   $lastname
     * @var string   $middlename
     * @var string   $postcode
     * @var string   $prefix
     * @var int      $region_id
     * @var string   $region
     * @var string[] $street
     * @var string   $suffix
     * @var string   $telephone
     * @var bool     $is_default_billing
     * @var bool     $is_default_shipping
     *
     * @param mixed $city
     * @param mixed $company
     * @param mixed $country_id
     * @param mixed $fax
     * @param mixed $firstname
     * @param mixed $lastname
     * @param mixed $middlename
     * @param mixed $postcode
     * @param mixed $prefix
     * @param mixed $region_id
     * @param mixed $region
     * @param mixed $street
     * @param mixed $suffix
     * @param mixed $telephone
     * @param mixed $is_default_billing
     * @param mixed $is_default_shipping
     */
    public function __construct($city, $company, $country_id, $fax, $firstname, $lastname, $middlename, $postcode, $prefix, $region_id, $region, $street, $suffix, $telephone, $is_default_billing, $is_default_shipping)
    {
        $this->city = $city;
        $this->company = $company;
        $this->country_id = $country_id;
        $this->fax = $fax;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->middlename = $middlename;
        $this->postcode = $postcode;
        $this->prefix = $prefix;
        $this->region_id = $region_id;
        $this->region = $region;
        $this->street = $street;
        $this->suffix = $suffix;
        $this->telephone = $telephone;
        $this->is_default_billing = $is_default_billing;
        $this->is_default_shipping = $is_default_shipping;
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
     * @return int
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * @param int $region_id
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
     * @return string[]
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string[] $street
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
     * @return bool
     */
    public function getIsDefaultBilling()
    {
        return $this->is_default_billing;
    }

    /**
     * @param bool $is_default_billing
     *
     * @return $this
     */
    public function setIsDefaultBilling($is_default_billing)
    {
        $this->is_default_billing = $is_default_billing;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefaultShipping()
    {
        return $this->is_default_shipping;
    }

    /**
     * @param bool $is_default_shipping
     *
     * @return $this
     */
    public function setIsDefaultShipping($is_default_shipping)
    {
        $this->is_default_shipping = $is_default_shipping;

        return $this;
    }
}
