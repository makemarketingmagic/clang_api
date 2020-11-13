<?php

namespace ClangSdk;

class magentoCreditMemo_insertResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var MagentoCreditMemo $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param MagentoCreditMemo $msg
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
     * @return \ClangSdk\magentoCreditMemo_insertResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return MagentoCreditMemo
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param MagentoCreditMemo $msg
     * @return \ClangSdk\magentoCreditMemo_insertResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
