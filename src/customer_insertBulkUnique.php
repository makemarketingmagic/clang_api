<?php

namespace ClangSdk;

class customer_insertBulkUnique
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var ArrayOfCustomer $customers
     */
    protected $customers = null;

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
     * @param ArrayOfCustomer $customers
     * @param ArrayOfString $uniqueCustomerFields
     * @param ArrayOfString $uniqueOptionFields
     */
    public function __construct($uuid, $customers, $uniqueCustomerFields, $uniqueOptionFields)
    {
      $this->uuid = $uuid;
      $this->customers = $customers;
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
     * @return \ClangSdk\customer_insertBulkUnique
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return ArrayOfCustomer
     */
    public function getCustomers()
    {
      return $this->customers;
    }

    /**
     * @param ArrayOfCustomer $customers
     * @return \ClangSdk\customer_insertBulkUnique
     */
    public function setCustomers($customers)
    {
      $this->customers = $customers;
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
     * @return \ClangSdk\customer_insertBulkUnique
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
     * @return \ClangSdk\customer_insertBulkUnique
     */
    public function setUniqueOptionFields($uniqueOptionFields)
    {
      $this->uniqueOptionFields = $uniqueOptionFields;
      return $this;
    }

}
