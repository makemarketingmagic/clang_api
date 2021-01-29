<?php

namespace ClangSdk;

class email_listOptionsResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfMethodOptions $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfMethodOptions $msg
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
     * @return \ClangSdk\email_listOptionsResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfMethodOptions
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfMethodOptions $msg
     * @return \ClangSdk\email_listOptionsResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
