<?php

namespace ClangSdk;

class magentoOrder_insertBulkResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfMagentoOrder $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfMagentoOrder $msg
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
     * @return \ClangSdk\magentoOrder_insertBulkResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfMagentoOrder
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfMagentoOrder $msg
     * @return \ClangSdk\magentoOrder_insertBulkResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
