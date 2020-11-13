<?php

namespace ClangSdk;

class customer_getByUserNameAndPassword
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $uuid
     * @param string $userName
     * @param string $password
     */
    public function __construct($uuid, $userName, $password)
    {
      $this->uuid = $uuid;
      $this->userName = $userName;
      $this->password = $password;
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
     * @return \ClangSdk\customer_getByUserNameAndPassword
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \ClangSdk\customer_getByUserNameAndPassword
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \ClangSdk\customer_getByUserNameAndPassword
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
