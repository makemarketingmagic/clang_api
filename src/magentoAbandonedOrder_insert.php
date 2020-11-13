<?php

namespace ClangSdk;

class magentoAbandonedOrder_insert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var MagentoAbandonedOrder $order
     */
    protected $order = null;

    /**
     * @param string $uuid
     * @param MagentoAbandonedOrder $order
     */
    public function __construct($uuid, $order)
    {
      $this->uuid = $uuid;
      $this->order = $order;
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
     * @return \ClangSdk\magentoAbandonedOrder_insert
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return MagentoAbandonedOrder
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param MagentoAbandonedOrder $order
     * @return \ClangSdk\magentoAbandonedOrder_insert
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

}
