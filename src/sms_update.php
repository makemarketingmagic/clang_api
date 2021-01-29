<?php

namespace ClangSdk;

class sms_update
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var Sms $sms
     */
    protected $sms = null;

    /**
     * @param string $uuid
     * @param Sms $sms
     */
    public function __construct($uuid, $sms)
    {
        $this->uuid = $uuid;
        $this->sms = $sms;
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
     * @return \ClangSdk\sms_update
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return Sms
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * @param Sms $sms
     * @return \ClangSdk\sms_update
     */
    public function setSms($sms)
    {
        $this->sms = $sms;
        return $this;
    }

}
