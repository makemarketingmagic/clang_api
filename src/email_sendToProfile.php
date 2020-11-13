<?php

namespace ClangSdk;

class email_sendToProfile
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
     * @var int $profileId
     */
    protected $profileId = null;

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
     * @param int $profileId
     * @param ArrayOfOption $manualOptions
     * @param ArrayOfOption $options
     */
    public function __construct($uuid, $emailId, $profileId, $manualOptions, $options)
    {
      $this->uuid = $uuid;
      $this->emailId = $emailId;
      $this->profileId = $profileId;
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
     * @return \ClangSdk\email_sendToProfile
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
     * @return \ClangSdk\email_sendToProfile
     */
    public function setEmailId($emailId)
    {
      $this->emailId = $emailId;
      return $this;
    }

    /**
     * @return int
     */
    public function getProfileId()
    {
      return $this->profileId;
    }

    /**
     * @param int $profileId
     * @return \ClangSdk\email_sendToProfile
     */
    public function setProfileId($profileId)
    {
      $this->profileId = $profileId;
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
     * @return \ClangSdk\email_sendToProfile
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
     * @return \ClangSdk\email_sendToProfile
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
