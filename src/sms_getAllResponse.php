<?php

namespace ClangSdk;

class sms_getAllResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfSms $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfSms $msg
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
     * @return \ClangSdk\sms_getAllResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return ArrayOfSms
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param ArrayOfSms $msg
     * @return \ClangSdk\sms_getAllResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
