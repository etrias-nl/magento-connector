<?php

namespace Etrias\MagentoConnector\SoapTypes;

class ShoppingCartCustomerEntity
{

    /**
     * @var string
     */
    protected $mode = null;

    /**
     * @var int
     */
    protected $customer_id = null;

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
    protected $lastname = null;

    /**
     * @var string
     */
    protected $password = null;

    /**
     * @var string
     */
    protected $confirmation = null;

    /**
     * @var int
     */
    protected $website_id = null;

    /**
     * @var int
     */
    protected $store_id = null;

    /**
     * @var int
     */
    protected $group_id = null;

    /**
     * Constructor
     *
     * @var string $mode
     * @var int $customer_id
     * @var string $email
     * @var string $firstname
     * @var string $lastname
     * @var string $password
     * @var string $confirmation
     * @var int $website_id
     * @var int $store_id
     * @var int $group_id
     */
    public function __construct($mode, $customer_id, $email, $firstname, $lastname, $password, $confirmation, $website_id, $store_id, $group_id)
    {
        $this->mode = $mode;
        $this->customer_id = $customer_id;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->confirmation = $confirmation;
        $this->website_id = $website_id;
        $this->store_id = $store_id;
        $this->group_id = $group_id;
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
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * @param string $confirmation
     * @return $this
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;
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


}

