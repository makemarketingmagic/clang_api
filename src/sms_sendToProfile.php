<?php

namespace ClangSdk;

class sms_sendToProfile
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
     * @var int $profileId
     */
    protected $profileId = null;

    /**
     * @param string $uuid
     * @param int $smsId
     * @param int $profileId
     */
    public function __construct($uuid, $smsId, $profileId)
    {
      $this->uuid = $uuid;
      $this->smsId = $smsId;
      $this->profileId = $profileId;
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
     * @return \ClangSdk\sms_sendToProfile
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
     * @return \ClangSdk\sms_sendToProfile
     */
    public function setSmsId($smsId)
    {
      $this->smsId = $smsId;
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
     * @return \ClangSdk\sms_sendToProfile
     */
    public function setProfileId($profileId)
    {
      $this->profileId = $profileId;
      return $this;
    }

}
