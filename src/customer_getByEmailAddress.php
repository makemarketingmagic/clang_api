<?php

namespace ClangSdk;

class customer_getByEmailAddress
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @param string $uuid
     * @param string $emailAddress
     */
    public function __construct($uuid, $emailAddress)
    {
        $this->uuid = $uuid;
        $this->emailAddress = $emailAddress;
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
     * @return \ClangSdk\customer_getByEmailAddress
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return \ClangSdk\customer_getByEmailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

}
