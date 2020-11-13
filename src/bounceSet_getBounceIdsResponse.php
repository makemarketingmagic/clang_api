<?php

namespace ClangSdk;

class bounceSet_getBounceIdsResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfInt $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfInt $msg
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
     * @return \ClangSdk\bounceSet_getBounceIdsResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param ArrayOfInt $msg
     * @return \ClangSdk\bounceSet_getBounceIdsResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
