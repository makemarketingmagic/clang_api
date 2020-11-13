<?php

namespace ClangSdk;

class customer_getByAccountId
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $network
     */
    protected $network = null;

    /**
     * @param string $uuid
     * @param string $accountId
     * @param string $network
     */
    public function __construct($uuid, $accountId, $network)
    {
      $this->uuid = $uuid;
      $this->accountId = $accountId;
      $this->network = $network;
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
     * @return \ClangSdk\customer_getByAccountId
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return \ClangSdk\customer_getByAccountId
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
      return $this->network;
    }

    /**
     * @param string $network
     * @return \ClangSdk\customer_getByAccountId
     */
    public function setNetwork($network)
    {
      $this->network = $network;
      return $this;
    }

}
