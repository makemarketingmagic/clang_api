<?php

namespace ClangSdk;

class mailingSet_getMailingsResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfMailing $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfMailing $msg
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
     * @return \ClangSdk\mailingSet_getMailingsResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return ArrayOfMailing
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param ArrayOfMailing $msg
     * @return \ClangSdk\mailingSet_getMailingsResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
