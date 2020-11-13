<?php

namespace ClangSdk;

class CampaignObjectStatistics
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var int $campaignObjectId
     */
    protected $campaignObjectId = null;

    /**
     * @var ArrayOfCampaignObjectStatisticsOption $options
     */
    protected $options = null;

    
    public function __construct()
    {
    
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
     * @return \ClangSdk\CampaignObjectStatistics
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignObjectId()
    {
      return $this->campaignObjectId;
    }

    /**
     * @param int $campaignObjectId
     * @return \ClangSdk\CampaignObjectStatistics
     */
    public function setCampaignObjectId($campaignObjectId)
    {
      $this->campaignObjectId = $campaignObjectId;
      return $this;
    }

    /**
     * @return ArrayOfCampaignObjectStatisticsOption
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param ArrayOfCampaignObjectStatisticsOption $options
     * @return \ClangSdk\CampaignObjectStatistics
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
