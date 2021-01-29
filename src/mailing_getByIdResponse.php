<?php

namespace ClangSdk;

class mailing_getByIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Mailing $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Mailing $msg
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
     * @return \ClangSdk\mailing_getByIdResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Mailing
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param Mailing $msg
     * @return \ClangSdk\mailing_getByIdResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
