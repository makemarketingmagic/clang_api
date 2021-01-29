<?php

namespace ClangSdk;

class group_removeMemberResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var boolean $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param boolean $msg
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
     * @return \ClangSdk\group_removeMemberResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param boolean $msg
     * @return \ClangSdk\group_removeMemberResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
