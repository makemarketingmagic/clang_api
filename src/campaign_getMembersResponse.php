<?php

namespace ClangSdk;

class campaign_getMembersResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var int $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param int $msg
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
     * @return \ClangSdk\campaign_getMembersResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param int $msg
     * @return \ClangSdk\campaign_getMembersResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
