<?php

namespace ClangSdk;

class customer_getByExternalId
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $uuid
     * @param string $externalId
     */
    public function __construct($uuid, $externalId)
    {
        $this->uuid = $uuid;
        $this->externalId = $externalId;
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
     * @return \ClangSdk\customer_getByExternalId
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \ClangSdk\customer_getByExternalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

}
