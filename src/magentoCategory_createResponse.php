<?php

namespace ClangSdk;

class magentoCategory_createResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var MagentoCategory $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param MagentoCategory $msg
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
     * @return \ClangSdk\magentoCategory_createResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return MagentoCategory
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param MagentoCategory $msg
     * @return \ClangSdk\magentoCategory_createResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
