<?php

namespace ClangSdk;

class sms_getById
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
     * @param string $uuid
     * @param int $smsId
     */
    public function __construct($uuid, $smsId)
    {
        $this->uuid = $uuid;
        $this->smsId = $smsId;
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
     * @return \ClangSdk\sms_getById
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
     * @return \ClangSdk\sms_getById
     */
    public function setSmsId($smsId)
    {
        $this->smsId = $smsId;
        return $this;
    }

}
