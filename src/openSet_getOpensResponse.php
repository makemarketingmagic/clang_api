<?php

namespace ClangSdk;

class openSet_getOpensResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfOpen $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfOpen $msg
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
     * @return \ClangSdk\openSet_getOpensResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfOpen
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfOpen $msg
     * @return \ClangSdk\openSet_getOpensResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
