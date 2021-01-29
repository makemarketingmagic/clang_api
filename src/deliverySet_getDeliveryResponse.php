<?php

namespace ClangSdk;

class deliverySet_getDeliveryResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var Delivery $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param Delivery $msg
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
     * @return \ClangSdk\deliverySet_getDeliveryResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Delivery
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param Delivery $msg
     * @return \ClangSdk\deliverySet_getDeliveryResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
