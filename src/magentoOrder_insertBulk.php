<?php

namespace ClangSdk;

class magentoOrder_insertBulk
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var ArrayOfMagentoOrder $orders
     */
    protected $orders = null;

    /**
     * @param string $uuid
     * @param ArrayOfMagentoOrder $orders
     */
    public function __construct($uuid, $orders)
    {
        $this->uuid = $uuid;
        $this->orders = $orders;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return \ClangSdk\magentoOrder_insertBulk
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return ArrayOfMagentoOrder
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param ArrayOfMagentoOrder $orders
     * @return \ClangSdk\magentoOrder_insertBulk
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
        return $this;
    }

}
