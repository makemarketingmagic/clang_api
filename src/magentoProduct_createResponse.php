<?php

namespace ClangSdk;

class magentoProduct_createResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var MagentoProduct $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param MagentoProduct $msg
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
     * @return \ClangSdk\magentoProduct_createResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return MagentoProduct
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param MagentoProduct $msg
     * @return \ClangSdk\magentoProduct_createResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
