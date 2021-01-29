<?php

namespace ClangSdk;

class campaign_addMember
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
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @param string $uuid
     * @param int $campaignId
     * @param int $customerId
     */
    public function __construct($uuid, $campaignId, $customerId)
    {
        $this->uuid = $uuid;
        $this->campaignId = $campaignId;
        $this->customerId = $customerId;
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
     * @return \ClangSdk\campaign_addMember
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
     * @return \ClangSdk\campaign_addMember
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return \ClangSdk\campaign_addMember
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

}
