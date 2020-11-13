<?php

namespace ClangSdk;

class customer_getById
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @param string $uuid
     * @param int $customerId
     */
    public function __construct($uuid, $customerId)
    {
      $this->uuid = $uuid;
      $this->customerId = $customerId;
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
     * @return \ClangSdk\customer_getById
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return \ClangSdk\customer_getById
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = $customerId;
      return $this;
    }

}
