<?php

namespace ClangSdk;

class customer_getByMobilePhone
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @param string $uuid
     * @param string $mobilePhone
     */
    public function __construct($uuid, $mobilePhone)
    {
        $this->uuid = $uuid;
        $this->mobilePhone = $mobilePhone;
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
     * @return \ClangSdk\customer_getByMobilePhone
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return \ClangSdk\customer_getByMobilePhone
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

}
