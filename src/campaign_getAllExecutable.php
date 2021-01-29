<?php

namespace ClangSdk;

class campaign_getAllExecutable
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
     * @return \ClangSdk\campaign_getAllExecutable
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

}
