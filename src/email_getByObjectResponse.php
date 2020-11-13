<?php

namespace ClangSdk;

class email_getByObjectResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfEmail $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfEmail $msg
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
     * @return \ClangSdk\email_getByObjectResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return ArrayOfEmail
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param ArrayOfEmail $msg
     * @return \ClangSdk\email_getByObjectResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
