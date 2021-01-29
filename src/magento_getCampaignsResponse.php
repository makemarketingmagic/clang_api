<?php

namespace ClangSdk;

class magento_getCampaignsResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfOption $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfOption $msg
     */
    public function __construct($code, $msg)
    {
        $this->code = $code;
        $this->msg = $msg;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return \ClangSdk\magento_getCampaignsResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfOption $msg
     * @return \ClangSdk\magento_getCampaignsResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
