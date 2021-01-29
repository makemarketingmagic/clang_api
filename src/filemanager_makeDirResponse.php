<?php

namespace ClangSdk;

class filemanager_makeDirResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var complexType $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param complexType $msg
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
     * @return \ClangSdk\filemanager_makeDirResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return complexType
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param complexType $msg
     * @return \ClangSdk\filemanager_makeDirResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
