<?php

namespace ClangSdk;

class sms_getByIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Sms $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Sms $msg
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
     * @return \ClangSdk\sms_getByIdResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Sms
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param Sms $msg
     * @return \ClangSdk\sms_getByIdResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
