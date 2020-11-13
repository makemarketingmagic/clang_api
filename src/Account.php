<?php

namespace ClangSdk;

class Account
{

    /**
     * @var string $network
     */
    protected $network = null;

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    
    public function __construct()
    {
    
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
     * @return \ClangSdk\Account
     */
    public function setNetwork($network)
    {
      $this->network = $network;
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
     * @return \ClangSdk\Account
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

}
