<?php

namespace ClangSdk;

class mailing_getByCampaignObjectId
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $campaignObjectId
     */
    protected $campaignObjectId = null;

    /**
     * @param string $uuid
     * @param string $campaignObjectId
     */
    public function __construct($uuid, $campaignObjectId)
    {
      $this->uuid = $uuid;
      $this->campaignObjectId = $campaignObjectId;
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
     * @return \ClangSdk\mailing_getByCampaignObjectId
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignObjectId()
    {
      return $this->campaignObjectId;
    }

    /**
     * @param string $campaignObjectId
     * @return \ClangSdk\mailing_getByCampaignObjectId
     */
    public function setCampaignObjectId($campaignObjectId)
    {
      $this->campaignObjectId = $campaignObjectId;
      return $this;
    }

}
