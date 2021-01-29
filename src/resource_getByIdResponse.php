<?php

namespace ClangSdk;

class resource_getByIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Resource $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Resource $msg
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
     * @return \ClangSdk\resource_getByIdResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Resource
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param Resource $msg
     * @return \ClangSdk\resource_getByIdResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
