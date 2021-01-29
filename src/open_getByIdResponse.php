<?php

namespace ClangSdk;

class open_getByIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Open $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Open $msg
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
     * @return \ClangSdk\open_getByIdResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Open
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param Open $msg
     * @return \ClangSdk\open_getByIdResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
