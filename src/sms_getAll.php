<?php

namespace ClangSdk;

class sms_getAll
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @param string $uuid
     */
    public function __construct($uuid)
    {
        $this->uuid = $uuid;
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
     * @return \ClangSdk\sms_getAll
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

}
