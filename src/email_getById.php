<?php

namespace ClangSdk;

class email_getById
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $emailId
     */
    protected $emailId = null;

    /**
     * @param string $uuid
     * @param int $emailId
     */
    public function __construct($uuid, $emailId)
    {
        $this->uuid = $uuid;
        $this->emailId = $emailId;
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
     * @return \ClangSdk\email_getById
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * @param int $emailId
     * @return \ClangSdk\email_getById
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
        return $this;
    }

}
