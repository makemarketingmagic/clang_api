<?php

namespace ClangSdk;

class clickSet_getClicksResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfClick $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfClick $msg
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
     * @return \ClangSdk\clickSet_getClicksResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfClick
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfClick $msg
     * @return \ClangSdk\clickSet_getClicksResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
