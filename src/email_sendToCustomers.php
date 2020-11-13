<?php

namespace ClangSdk;

class email_sendToCustomers
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $emailId
     */
    protected $emailId = null;

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
     * @param int $emailId
     * @param ArrayOfInt $customerIds
     * @param ArrayOfOption $manualOptions
     * @param ArrayOfOption $options
     */
    public function __construct($uuid, $emailId, $customerIds, $manualOptions, $options)
    {
      $this->uuid = $uuid;
      $this->emailId = $emailId;
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
     * @return \ClangSdk\email_sendToCustomers
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return int
     */
    public function getEmailId()
    {
      return $this->emailId;
    }

    /**
     * @param int $emailId
     * @return \ClangSdk\email_sendToCustomers
     */
    public function setEmailId($emailId)
    {
      $this->emailId = $emailId;
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
     * @return \ClangSdk\email_sendToCustomers
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
     * @return \ClangSdk\email_sendToCustomers
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
     * @return \ClangSdk\email_sendToCustomers
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
