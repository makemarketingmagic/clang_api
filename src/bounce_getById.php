<?php

namespace ClangSdk;

class bounce_getById
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $bounceId
     */
    protected $bounceId = null;

    /**
     * @param string $uuid
     * @param int $bounceId
     */
    public function __construct($uuid, $bounceId)
    {
        $this->uuid = $uuid;
        $this->bounceId = $bounceId;
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
     * @return \ClangSdk\bounce_getById
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getBounceId()
    {
        return $this->bounceId;
    }

    /**
     * @param int $bounceId
     * @return \ClangSdk\bounce_getById
     */
    public function setBounceId($bounceId)
    {
        $this->bounceId = $bounceId;
        return $this;
    }

}
