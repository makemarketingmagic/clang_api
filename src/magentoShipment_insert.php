<?php

namespace ClangSdk;

class magentoShipment_insert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var MagentoShipment $shipment
     */
    protected $shipment = null;

    /**
     * @param string $uuid
     * @param MagentoShipment $shipment
     */
    public function __construct($uuid, $shipment)
    {
        $this->uuid = $uuid;
        $this->shipment = $shipment;
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
     * @return \ClangSdk\magentoShipment_insert
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return MagentoShipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param MagentoShipment $shipment
     * @return \ClangSdk\magentoShipment_insert
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

}
