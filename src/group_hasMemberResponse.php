<?php

namespace ClangSdk;

class group_hasMemberResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var GroupMembership $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param GroupMembership $msg
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
     * @return \ClangSdk\group_hasMemberResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return GroupMembership
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param GroupMembership $msg
     * @return \ClangSdk\group_hasMemberResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
