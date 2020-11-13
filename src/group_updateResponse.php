<?php

namespace ClangSdk;

class group_updateResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Group $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Group $msg
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
     * @return \ClangSdk\group_updateResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return Group
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param Group $msg
     * @return \ClangSdk\group_updateResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
