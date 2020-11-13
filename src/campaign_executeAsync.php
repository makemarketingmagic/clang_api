<?php

namespace ClangSdk;

class campaign_executeAsync
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
     * @var ArrayOfOption $options
     */
    protected $options = null;

    /**
     * @param string $uuid
     * @param int $campaignId
     * @param ArrayOfOption $options
     */
    public function __construct($uuid, $campaignId, $options)
    {
      $this->uuid = $uuid;
      $this->campaignId = $campaignId;
      $this->options = $options;
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
     * @return \ClangSdk\campaign_executeAsync
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
     * @return \ClangSdk\campaign_executeAsync
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param ArrayOfOption $options
     * @return \ClangSdk\campaign_executeAsync
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
