<?php

namespace ClangSdk;

class click_getByIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Click $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Click $msg
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
     * @return \ClangSdk\click_getByIdResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return Click
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param Click $msg
     * @return \ClangSdk\click_getByIdResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
