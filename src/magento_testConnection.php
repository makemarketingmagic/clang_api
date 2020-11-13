<?php

namespace ClangSdk;

class magento_testConnection
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $wsdl
     */
    protected $wsdl = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $uuid
     * @param string $wsdl
     * @param string $username
     * @param string $password
     */
    public function __construct($uuid, $wsdl, $username, $password)
    {
      $this->uuid = $uuid;
      $this->wsdl = $wsdl;
      $this->username = $username;
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
     * @return \ClangSdk\magento_testConnection
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getWsdl()
    {
      return $this->wsdl;
    }

    /**
     * @param string $wsdl
     * @return \ClangSdk\magento_testConnection
     */
    public function setWsdl($wsdl)
    {
      $this->wsdl = $wsdl;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \ClangSdk\magento_testConnection
     */
    public function setUsername($username)
    {
      $this->username = $username;
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
     * @return \ClangSdk\magento_testConnection
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
