<?php

namespace ClangSdk;

class sms_sendToCustomers
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $smsId
     */
    protected $smsId = null;

    /**
     * @var ArrayOfInt $customerIds
     */
    protected $customerIds = null;

    /**
     * @var ArrayOfOption $manualOptions
     */
    protected $manualOptions = null;

    /**
     * @var ArrayOfOption $options
     */
    protected $options = null;

    /**
     * @param string $uuid
     * @param int $smsId
     * @param ArrayOfInt $customerIds
     * @param ArrayOfOption $manualOptions
     * @param ArrayOfOption $options
     */
    public function __construct($uuid, $smsId, $customerIds, $manualOptions, $options)
    {
        $this->uuid = $uuid;
        $this->smsId = $smsId;
        $this->customerIds = $customerIds;
        $this->manualOptions = $manualOptions;
        $this->options = $options;
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
     * @return \ClangSdk\sms_sendToCustomers
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getSmsId()
    {
        return $this->smsId;
    }

    /**
     * @param int $smsId
     * @return \ClangSdk\sms_sendToCustomers
     */
    public function setSmsId($smsId)
    {
        $this->smsId = $smsId;
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
     * @return \ClangSdk\sms_sendToCustomers
     */
    public function setCustomerIds($customerIds)
    {
        $this->customerIds = $customerIds;
        return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getManualOptions()
    {
        return $this->manualOptions;
    }

    /**
     * @param ArrayOfOption $manualOptions
     * @return \ClangSdk\sms_sendToCustomers
     */
    public function setManualOptions($manualOptions)
    {
        $this->manualOptions = $manualOptions;
        return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param ArrayOfOption $options
     * @return \ClangSdk\sms_sendToCustomers
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

}
