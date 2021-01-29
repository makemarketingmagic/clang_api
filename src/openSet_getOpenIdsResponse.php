<?php

namespace ClangSdk;

class openSet_getOpenIdsResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfInt $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfInt $msg
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
     * @return \ClangSdk\openSet_getOpenIdsResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfInt $msg
     * @return \ClangSdk\openSet_getOpenIdsResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
