<?php

namespace ClangSdk;

class campaignStatistics_getCustomerSet
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @param string $uuid
     * @param int $campaignId
     */
    public function __construct($uuid, $campaignId)
    {
      $this->uuid = $uuid;
      $this->campaignId = $campaignId;
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
     * @return \ClangSdk\campaignStatistics_getCustomerSet
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \ClangSdk\campaignStatistics_getCustomerSet
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

}
