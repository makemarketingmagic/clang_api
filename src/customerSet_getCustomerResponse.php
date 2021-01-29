<?php

namespace ClangSdk;

class customerSet_getCustomerResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Customer $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Customer $msg
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
     * @return \ClangSdk\customerSet_getCustomerResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param Customer $msg
     * @return \ClangSdk\customerSet_getCustomerResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
