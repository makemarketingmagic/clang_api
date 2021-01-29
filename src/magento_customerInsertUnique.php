<?php

namespace ClangSdk;

class magento_customerInsertUnique
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
     * @var int $websiteId
     */
    protected $websiteId = null;

    /**
     * @param string $uuid
     * @param Customer $customer
     * @param int $websiteId
     */
    public function __construct($uuid, $customer, $websiteId)
    {
        $this->uuid = $uuid;
        $this->customer = $customer;
        $this->websiteId = $websiteId;
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
     * @return \ClangSdk\magento_customerInsertUnique
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
     * @return \ClangSdk\magento_customerInsertUnique
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->websiteId;
    }

    /**
     * @param int $websiteId
     * @return \ClangSdk\magento_customerInsertUnique
     */
    public function setWebsiteId($websiteId)
    {
        $this->websiteId = $websiteId;
        return $this;
    }

}
