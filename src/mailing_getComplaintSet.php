<?php

namespace ClangSdk;

class mailing_getComplaintSet
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var Mailing $mailing
     */
    protected $mailing = null;

    /**
     * @param string $uuid
     * @param Mailing $mailing
     */
    public function __construct($uuid, $mailing)
    {
        $this->uuid = $uuid;
        $this->mailing = $mailing;
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
     * @return \ClangSdk\mailing_getComplaintSet
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return Mailing
     */
    public function getMailing()
    {
        return $this->mailing;
    }

    /**
     * @param Mailing $mailing
     * @return \ClangSdk\mailing_getComplaintSet
     */
    public function setMailing($mailing)
    {
        $this->mailing = $mailing;
        return $this;
    }

}
