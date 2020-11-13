<?php

namespace ClangSdk;

class email_updateResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Email $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Email $msg
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
     * @return \ClangSdk\email_updateResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return Email
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param Email $msg
     * @return \ClangSdk\email_updateResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
