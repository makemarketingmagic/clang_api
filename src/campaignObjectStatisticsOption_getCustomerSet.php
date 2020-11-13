<?php

namespace ClangSdk;

class campaignObjectStatisticsOption_getCustomerSet
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $campaignObjectStatisiticsOptionId
     */
    protected $campaignObjectStatisiticsOptionId = null;

    /**
     * @param string $uuid
     * @param string $campaignObjectStatisiticsOptionId
     */
    public function __construct($uuid, $campaignObjectStatisiticsOptionId)
    {
      $this->uuid = $uuid;
      $this->campaignObjectStatisiticsOptionId = $campaignObjectStatisiticsOptionId;
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
     * @return \ClangSdk\campaignObjectStatisticsOption_getCustomerSet
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignObjectStatisiticsOptionId()
    {
      return $this->campaignObjectStatisiticsOptionId;
    }

    /**
     * @param string $campaignObjectStatisiticsOptionId
     * @return \ClangSdk\campaignObjectStatisticsOption_getCustomerSet
     */
    public function setCampaignObjectStatisiticsOptionId($campaignObjectStatisiticsOptionId)
    {
      $this->campaignObjectStatisiticsOptionId = $campaignObjectStatisiticsOptionId;
      return $this;
    }

}
