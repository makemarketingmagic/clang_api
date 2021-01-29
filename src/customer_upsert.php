<?php

namespace ClangSdk;

class customer_upsert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var Customer $customer
     */
    protected $customer = null;

    /**
     * @param string $uuid
     * @param Customer $customer
     */
    public function __construct($uuid, $customer)
    {
        $this->uuid = $uuid;
        $this->customer = $customer;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return \ClangSdk\customer_upsert
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return \ClangSdk\customer_upsert
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

}
