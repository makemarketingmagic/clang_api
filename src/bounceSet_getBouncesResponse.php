<?php

namespace ClangSdk;

class bounceSet_getBouncesResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfBounce $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfBounce $msg
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
     * @return \ClangSdk\bounceSet_getBouncesResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfBounce
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfBounce $msg
     * @return \ClangSdk\bounceSet_getBouncesResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
