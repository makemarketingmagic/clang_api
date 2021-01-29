<?php

namespace ClangSdk;

class email_hasChanged
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $broadcastId
     */
    protected $broadcastId = null;

    /**
     * @param string $uuid
     * @param int $broadcastId
     */
    public function __construct($uuid, $broadcastId)
    {
        $this->uuid = $uuid;
        $this->broadcastId = $broadcastId;
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
     * @return \ClangSdk\email_hasChanged
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getBroadcastId()
    {
        return $this->broadcastId;
    }

    /**
     * @param int $broadcastId
     * @return \ClangSdk\email_hasChanged
     */
    public function setBroadcastId($broadcastId)
    {
        $this->broadcastId = $broadcastId;
        return $this;
    }

}
