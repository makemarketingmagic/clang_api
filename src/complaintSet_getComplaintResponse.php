<?php

namespace ClangSdk;

class complaintSet_getComplaintResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Complaint $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Complaint $msg
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
     * @return \ClangSdk\complaintSet_getComplaintResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Complaint
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param Complaint $msg
     * @return \ClangSdk\complaintSet_getComplaintResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
