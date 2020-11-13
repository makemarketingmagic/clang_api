<?php

namespace ClangSdk;

class magentoOrder_insert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var MagentoOrder $order
     */
    protected $order = null;

    /**
     * @param string $uuid
     * @param MagentoOrder $order
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
     * @return \ClangSdk\magentoOrder_insert
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return MagentoOrder
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param MagentoOrder $order
     * @return \ClangSdk\magentoOrder_insert
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

}
