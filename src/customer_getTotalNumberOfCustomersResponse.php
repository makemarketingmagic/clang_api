<?php

namespace ClangSdk;

class customer_getTotalNumberOfCustomersResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var int $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param int $msg
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
     * @return \ClangSdk\customer_getTotalNumberOfCustomersResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param int $msg
     * @return \ClangSdk\customer_getTotalNumberOfCustomersResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
