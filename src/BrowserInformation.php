<?php

namespace ClangSdk;

class BrowserInformation
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $version
     */
    protected $version = null;

    /**
     * @var string $platform
     */
    protected $platform = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $httpAcceptCharset
     */
    protected $httpAcceptCharset = null;

    /**
     * @var string $httpAcceptLanguage
     */
    protected $httpAcceptLanguage = null;

    /**
     * @var string $httpAcceptEncoding
     */
    protected $httpAcceptEncoding = null;

    /**
     * @var string $httpAccept
     */
    protected $httpAccept = null;

    /**
     * @var string $httpUserAgent
     */
    protected $httpUserAgent = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \ClangSdk\BrowserInformation
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return \ClangSdk\BrowserInformation
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     * @return \ClangSdk\BrowserInformation
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return \ClangSdk\BrowserInformation
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpAcceptCharset()
    {
        return $this->httpAcceptCharset;
    }

    /**
     * @param string $httpAcceptCharset
     * @return \ClangSdk\BrowserInformation
     */
    public function setHttpAcceptCharset($httpAcceptCharset)
    {
        $this->httpAcceptCharset = $httpAcceptCharset;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpAcceptLanguage()
    {
        return $this->httpAcceptLanguage;
    }

    /**
     * @param string $httpAcceptLanguage
     * @return \ClangSdk\BrowserInformation
     */
    public function setHttpAcceptLanguage($httpAcceptLanguage)
    {
        $this->httpAcceptLanguage = $httpAcceptLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpAcceptEncoding()
    {
        return $this->httpAcceptEncoding;
    }

    /**
     * @param string $httpAcceptEncoding
     * @return \ClangSdk\BrowserInformation
     */
    public function setHttpAcceptEncoding($httpAcceptEncoding)
    {
        $this->httpAcceptEncoding = $httpAcceptEncoding;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpAccept()
    {
        return $this->httpAccept;
    }

    /**
     * @param string $httpAccept
     * @return \ClangSdk\BrowserInformation
     */
    public function setHttpAccept($httpAccept)
    {
        $this->httpAccept = $httpAccept;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpUserAgent()
    {
        return $this->httpUserAgent;
    }

    /**
     * @param string $httpUserAgent
     * @return \ClangSdk\BrowserInformation
     */
    public function setHttpUserAgent($httpUserAgent)
    {
        $this->httpUserAgent = $httpUserAgent;
        return $this;
    }

}
