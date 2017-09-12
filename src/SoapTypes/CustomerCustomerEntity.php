<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CustomerCustomerEntity
{

    /**
     * @var int
     */
    protected $customer_id = null;

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
     * @var int
     */
    protected $store_id = null;

    /**
     * @var int
     */
    protected $website_id = null;

    /**
     * @var string
     */
    protected $created_in = null;

    /**
     * @var string
     */
    protected $email = null;

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
     * @var int
     */
    protected $group_id = null;

    /**
     * @var string
     */
    protected $prefix = null;

    /**
     * @var string
     */
    protected $suffix = null;

    /**
     * @var string
     */
    protected $dob = null;

    /**
     * @var string
     */
    protected $taxvat = null;

    /**
     * @var bool
     */
    protected $confirmation = null;

    /**
     * @var string
     */
    protected $password_hash = null;

    /**
     * Constructor
     *
     * @var int $customer_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $increment_id
     * @var int $store_id
     * @var int $website_id
     * @var string $created_in
     * @var string $email
     * @var string $firstname
     * @var string $middlename
     * @var string $lastname
     * @var int $group_id
     * @var string $prefix
     * @var string $suffix
     * @var string $dob
     * @var string $taxvat
     * @var bool $confirmation
     * @var string $password_hash
     */
    public function __construct($customer_id, $created_at, $updated_at, $increment_id, $store_id, $website_id, $created_in, $email, $firstname, $middlename, $lastname, $group_id, $prefix, $suffix, $dob, $taxvat, $confirmation, $password_hash)
    {
        $this->customer_id = $customer_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->increment_id = $increment_id;
        $this->store_id = $store_id;
        $this->website_id = $website_id;
        $this->created_in = $created_in;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
        $this->group_id = $group_id;
        $this->prefix = $prefix;
        $this->suffix = $suffix;
        $this->dob = $dob;
        $this->taxvat = $taxvat;
        $this->confirmation = $confirmation;
        $this->password_hash = $password_hash;
    }

    /**
     * @return int
     */
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    /**
     * @param int $customer_id
     * @return $this
     */
    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;
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
     * @return int
     */
    public function getStore_id()
    {
        return $this->store_id;
    }

    /**
     * @param int $store_id
     * @return $this
     */
    public function setStore_id($store_id)
    {
        $this->store_id = $store_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getWebsite_id()
    {
        return $this->website_id;
    }

    /**
     * @param int $website_id
     * @return $this
     */
    public function setWebsite_id($website_id)
    {
        $this->website_id = $website_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreated_in()
    {
        return $this->created_in;
    }

    /**
     * @param string $created_in
     * @return $this
     */
    public function setCreated_in($created_in)
    {
        $this->created_in = $created_in;
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
     * @return int
     */
    public function getGroup_id()
    {
        return $this->group_id;
    }

    /**
     * @param int $group_id
     * @return $this
     */
    public function setGroup_id($group_id)
    {
        $this->group_id = $group_id;
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
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param string $dob
     * @return $this
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxvat()
    {
        return $this->taxvat;
    }

    /**
     * @param string $taxvat
     * @return $this
     */
    public function setTaxvat($taxvat)
    {
        $this->taxvat = $taxvat;
        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * @param bool $confirmation
     * @return $this
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword_hash()
    {
        return $this->password_hash;
    }

    /**
     * @param string $password_hash
     * @return $this
     */
    public function setPassword_hash($password_hash)
    {
        $this->password_hash = $password_hash;
        return $this;
    }


}

