<?php

namespace ClangSdk;

class customer_getGroupsResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfGroup $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfGroup $msg
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
     * @return \ClangSdk\customer_getGroupsResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfGroup
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfGroup $msg
     * @return \ClangSdk\customer_getGroupsResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
