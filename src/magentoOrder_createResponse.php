<?php

namespace ClangSdk;

class magentoOrder_createResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var MagentoOrder $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param MagentoOrder $msg
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
     * @return \ClangSdk\magentoOrder_createResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return MagentoOrder
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param MagentoOrder $msg
     * @return \ClangSdk\magentoOrder_createResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
