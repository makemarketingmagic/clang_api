<?php

namespace ClangSdk;

class complaintSet_getComplaintsResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfComplaint $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfComplaint $msg
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
     * @return \ClangSdk\complaintSet_getComplaintsResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return ArrayOfComplaint
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param ArrayOfComplaint $msg
     * @return \ClangSdk\complaintSet_getComplaintsResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
