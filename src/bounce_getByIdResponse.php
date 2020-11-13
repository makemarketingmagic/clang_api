<?php

namespace ClangSdk;

class bounce_getByIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Bounce $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Bounce $msg
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
     * @return \ClangSdk\bounce_getByIdResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return Bounce
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param Bounce $msg
     * @return \ClangSdk\bounce_getByIdResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
