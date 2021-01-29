<?php

namespace ClangSdk;

class sms_sendToCustomer
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
     * @var int $customerId
     */
    protected $customerId = null;

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
     * @param int $customerId
     * @param ArrayOfOption $manualOptions
     * @param ArrayOfOption $options
     */
    public function __construct($uuid, $smsId, $customerId, $manualOptions, $options)
    {
        $this->uuid = $uuid;
        $this->smsId = $smsId;
        $this->customerId = $customerId;
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
     * @return \ClangSdk\sms_sendToCustomer
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
     * @return \ClangSdk\sms_sendToCustomer
     */
    public function setSmsId($smsId)
    {
        $this->smsId = $smsId;
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
     * @return \ClangSdk\sms_sendToCustomer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
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
     * @return \ClangSdk\sms_sendToCustomer
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
     * @return \ClangSdk\sms_sendToCustomer
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

}
