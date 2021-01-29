<?php

namespace ClangSdk;

class magento_getAvailableCustomerFields
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $lang
     */
    protected $lang = null;

    /**
     * @param string $uuid
     * @param string $lang
     */
    public function __construct($uuid, $lang)
    {
        $this->uuid = $uuid;
        $this->lang = $lang;
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
     * @return \ClangSdk\magento_getAvailableCustomerFields
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return \ClangSdk\magento_getAvailableCustomerFields
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

}
