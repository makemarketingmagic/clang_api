<?php

namespace ClangSdk;

class account_addToCustomer
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
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $network
     */
    protected $network = null;

    /**
     * @param string $uuid
     * @param int $customerId
     * @param string $accountId
     * @param string $network
     */
    public function __construct($uuid, $customerId, $accountId, $network)
    {
        $this->uuid = $uuid;
        $this->customerId = $customerId;
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
     * @return \ClangSdk\account_addToCustomer
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
     * @return \ClangSdk\account_addToCustomer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
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
     * @return \ClangSdk\account_addToCustomer
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
     * @return \ClangSdk\account_addToCustomer
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }

}
