<?php

namespace ClangSdk;

class magento_customerInsertBulkUnique
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
     * @var int $websiteId
     */
    protected $websiteId = null;

    /**
     * @var string $websiteName
     */
    protected $websiteName = null;

    /**
     * @param string $uuid
     * @param ArrayOfCustomer $customers
     * @param int $websiteId
     * @param string $websiteName
     */
    public function __construct($uuid, $customers, $websiteId, $websiteName)
    {
      $this->uuid = $uuid;
      $this->customers = $customers;
      $this->websiteId = $websiteId;
      $this->websiteName = $websiteName;
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
     * @return \ClangSdk\magento_customerInsertBulkUnique
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
     * @return \ClangSdk\magento_customerInsertBulkUnique
     */
    public function setCustomers($customers)
    {
      $this->customers = $customers;
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
     * @return \ClangSdk\magento_customerInsertBulkUnique
     */
    public function setWebsiteId($websiteId)
    {
      $this->websiteId = $websiteId;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebsiteName()
    {
      return $this->websiteName;
    }

    /**
     * @param string $websiteName
     * @return \ClangSdk\magento_customerInsertBulkUnique
     */
    public function setWebsiteName($websiteName)
    {
      $this->websiteName = $websiteName;
      return $this;
    }

}
