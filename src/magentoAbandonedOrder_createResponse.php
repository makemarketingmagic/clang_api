<?php

namespace ClangSdk;

class magentoAbandonedOrder_createResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var MagentoAbandonedOrder $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param MagentoAbandonedOrder $msg
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
     * @return \ClangSdk\magentoAbandonedOrder_createResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return MagentoAbandonedOrder
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param MagentoAbandonedOrder $msg
     * @return \ClangSdk\magentoAbandonedOrder_createResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
