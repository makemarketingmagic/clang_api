<?php

namespace ClangSdk;

class deliverySet_getDeliveriesResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var ArrayOfDelivery $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param ArrayOfDelivery $msg
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
     * @return \ClangSdk\deliverySet_getDeliveriesResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayOfDelivery
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param ArrayOfDelivery $msg
     * @return \ClangSdk\deliverySet_getDeliveriesResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
