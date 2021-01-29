<?php

namespace ClangSdk;

class magentoShipment_insertResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var MagentoShipment $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param MagentoShipment $msg
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
     * @return \ClangSdk\magentoShipment_insertResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return MagentoShipment
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param MagentoShipment $msg
     * @return \ClangSdk\magentoShipment_insertResponse
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

}
