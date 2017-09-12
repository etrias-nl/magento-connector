<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CustomerAddressEntityItem
{

    /**
     * @var int
     */
    protected $customer_address_id = null;

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
    protected $increment_id = null;

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
     * @var string
     */
    protected $region = null;

    /**
     * @var int
     */
    protected $region_id = null;

    /**
     * @var string
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
     * Constructor
     *
     * @var int $customer_address_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $increment_id
     * @var string $city
     * @var string $company
     * @var string $country_id
     * @var string $fax
     * @var string $firstname
     * @var string $lastname
     * @var string $middlename
     * @var string $postcode
     * @var string $prefix
     * @var string $region
     * @var int $region_id
     * @var string $street
     * @var string $suffix
     * @var string $telephone
     * @var bool $is_default_billing
     * @var bool $is_default_shipping
     */
    public function __construct($customer_address_id, $created_at, $updated_at, $increment_id, $city, $company, $country_id, $fax, $firstname, $lastname, $middlename, $postcode, $prefix, $region, $region_id, $street, $suffix, $telephone, $is_default_billing, $is_default_shipping)
    {
        $this->customer_address_id = $customer_address_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->increment_id = $increment_id;
        $this->city = $city;
        $this->company = $company;
        $this->country_id = $country_id;
        $this->fax = $fax;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->middlename = $middlename;
        $this->postcode = $postcode;
        $this->prefix = $prefix;
        $this->region = $region;
        $this->region_id = $region_id;
        $this->street = $street;
        $this->suffix = $suffix;
        $this->telephone = $telephone;
        $this->is_default_billing = $is_default_billing;
        $this->is_default_shipping = $is_default_shipping;
    }

    /**
     * @return int
     */
    public function getCustomer_address_id()
    {
        return $this->customer_address_id;
    }

    /**
     * @param int $customer_address_id
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
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
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
    public function getIncrement_id()
    {
        return $this->increment_id;
    }

    /**
     * @param string $increment_id
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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
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
    public function getCountry_id()
    {
        return $this->country_id;
    }

    /**
     * @param string $country_id
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
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
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
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegion_id()
    {
        return $this->region_id;
    }

    /**
     * @param int $region_id
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
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
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
    public function getIs_default_billing()
    {
        return $this->is_default_billing;
    }

    /**
     * @param bool $is_default_billing
     * @return $this
     */
    public function setIs_default_billing($is_default_billing)
    {
        $this->is_default_billing = $is_default_billing;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIs_default_shipping()
    {
        return $this->is_default_shipping;
    }

    /**
     * @param bool $is_default_shipping
     * @return $this
     */
    public function setIs_default_shipping($is_default_shipping)
    {
        $this->is_default_shipping = $is_default_shipping;
        return $this;
    }


}

