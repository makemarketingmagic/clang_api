<?php

namespace ClangSdk;

class email_insert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var Email $email
     */
    protected $email = null;

    /**
     * @param string $uuid
     * @param Email $email
     */
    public function __construct($uuid, $email)
    {
      $this->uuid = $uuid;
      $this->email = $email;
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
     * @return \ClangSdk\email_insert
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param Email $email
     * @return \ClangSdk\email_insert
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
