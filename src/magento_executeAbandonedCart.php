<?php

namespace ClangSdk;

class magento_executeAbandonedCart
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var ArrayOfInt $customerIds
     */
    protected $customerIds = null;

    /**
     * @param string $uuid
     * @param ArrayOfInt $customerIds
     */
    public function __construct($uuid, $customerIds)
    {
        $this->uuid = $uuid;
        $this->customerIds = $customerIds;
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
     * @return \ClangSdk\magento_executeAbandonedCart
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCustomerIds()
    {
        return $this->customerIds;
    }

    /**
     * @param ArrayOfInt $customerIds
     * @return \ClangSdk\magento_executeAbandonedCart
     */
    public function setCustomerIds($customerIds)
    {
        $this->customerIds = $customerIds;
        return $this;
    }

}
