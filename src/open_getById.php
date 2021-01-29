<?php

namespace ClangSdk;

class open_getById
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $openId
     */
    protected $openId = null;

    /**
     * @param string $uuid
     * @param int $openId
     */
    public function __construct($uuid, $openId)
    {
        $this->uuid = $uuid;
        $this->openId = $openId;
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
     * @return \ClangSdk\open_getById
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * @param int $openId
     * @return \ClangSdk\open_getById
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
        return $this;
    }

}
