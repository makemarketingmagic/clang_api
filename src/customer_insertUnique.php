<?php

namespace ClangSdk;

class customer_insertUnique
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
     * @var ArrayOfString $uniqueCustomerFields
     */
    protected $uniqueCustomerFields = null;

    /**
     * @var ArrayOfString $uniqueOptionFields
     */
    protected $uniqueOptionFields = null;

    /**
     * @param string $uuid
     * @param Customer $customer
     * @param ArrayOfString $uniqueCustomerFields
     * @param ArrayOfString $uniqueOptionFields
     */
    public function __construct($uuid, $customer, $uniqueCustomerFields, $uniqueOptionFields)
    {
        $this->uuid = $uuid;
        $this->customer = $customer;
        $this->uniqueCustomerFields = $uniqueCustomerFields;
        $this->uniqueOptionFields = $uniqueOptionFields;
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
     * @return \ClangSdk\customer_insertUnique
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
     * @return \ClangSdk\customer_insertUnique
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getUniqueCustomerFields()
    {
        return $this->uniqueCustomerFields;
    }

    /**
     * @param ArrayOfString $uniqueCustomerFields
     * @return \ClangSdk\customer_insertUnique
     */
    public function setUniqueCustomerFields($uniqueCustomerFields)
    {
        $this->uniqueCustomerFields = $uniqueCustomerFields;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getUniqueOptionFields()
    {
        return $this->uniqueOptionFields;
    }

    /**
     * @param ArrayOfString $uniqueOptionFields
     * @return \ClangSdk\customer_insertUnique
     */
    public function setUniqueOptionFields($uniqueOptionFields)
    {
        $this->uniqueOptionFields = $uniqueOptionFields;
        return $this;
    }

}
