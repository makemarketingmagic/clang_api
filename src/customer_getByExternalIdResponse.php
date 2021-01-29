<?php

namespace ClangSdk;

class customer_getByExternalIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfCustomer $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfCustomer $msg
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
     * @return \ClangSdk\customer_getByExternalIdResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfCustomer
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfCustomer $msg
     * @return \ClangSdk\customer_getByExternalIdResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
