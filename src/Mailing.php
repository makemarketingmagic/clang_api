<?php

namespace ClangSdk;

class Mailing
{

    /**
     * @var string $plannedFor
     */
    protected $plannedFor = null;

    /**
     * @var int $uniqueClicks
     */
    protected $uniqueClicks = null;

    /**
     * @var int $uniqueOpens
     */
    protected $uniqueOpens = null;

    /**
     * @var int $received
     */
    protected $received = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $contentName
     */
    protected $contentName = null;

    /**
     * @var string $sourceType
     */
    protected $sourceType = null;

    /**
     * @var string $sourceName
     */
    protected $sourceName = null;

    /**
     * @var int $customers
     */
    protected $customers = null;

    /**
     * @var int $throttle
     */
    protected $throttle = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var ArrayOfMailingLink $links
     */
    protected $links = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $startedAt
     */
    protected $startedAt = null;

    /**
     * @var string $endedAt
     */
    protected $endedAt = null;

    /**
     * @var int $bounces
     */
    protected $bounces = null;

    /**
     * @var int $opens
     */
    protected $opens = null;

    /**
     * @var int $clicks
     */
    protected $clicks = null;

    /**
     * @var int $complaints
     */
    protected $complaints = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getPlannedFor()
    {
        return $this->plannedFor;
    }

    /**
     * @param string $plannedFor
     * @return \ClangSdk\Mailing
     */
    public function setPlannedFor($plannedFor)
    {
        $this->plannedFor = $plannedFor;
        return $this;
    }

    /**
     * @return int
     */
    public function getUniqueClicks()
    {
        return $this->uniqueClicks;
    }

    /**
     * @param int $uniqueClicks
     * @return \ClangSdk\Mailing
     */
    public function setUniqueClicks($uniqueClicks)
    {
        $this->uniqueClicks = $uniqueClicks;
        return $this;
    }

    /**
     * @return int
     */
    public function getUniqueOpens()
    {
        return $this->uniqueOpens;
    }

    /**
     * @param int $uniqueOpens
     * @return \ClangSdk\Mailing
     */
    public function setUniqueOpens($uniqueOpens)
    {
        $this->uniqueOpens = $uniqueOpens;
        return $this;
    }

    /**
     * @return int
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * @param int $received
     * @return \ClangSdk\Mailing
     */
    public function setReceived($received)
    {
        $this->received = $received;
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
     * @return \ClangSdk\Mailing
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \ClangSdk\Mailing
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \ClangSdk\Mailing
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentName()
    {
        return $this->contentName;
    }

    /**
     * @param string $contentName
     * @return \ClangSdk\Mailing
     */
    public function setContentName($contentName)
    {
        $this->contentName = $contentName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @param string $sourceType
     * @return \ClangSdk\Mailing
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * @param string $sourceName
     * @return \ClangSdk\Mailing
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * @param int $customers
     * @return \ClangSdk\Mailing
     */
    public function setCustomers($customers)
    {
        $this->customers = $customers;
        return $this;
    }

    /**
     * @return int
     */
    public function getThrottle()
    {
        return $this->throttle;
    }

    /**
     * @param int $throttle
     * @return \ClangSdk\Mailing
     */
    public function setThrottle($throttle)
    {
        $this->throttle = $throttle;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return \ClangSdk\Mailing
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return ArrayOfMailingLink
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param ArrayOfMailingLink $links
     * @return \ClangSdk\Mailing
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return \ClangSdk\Mailing
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \ClangSdk\Mailing
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param string $startedAt
     * @return \ClangSdk\Mailing
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * @param string $endedAt
     * @return \ClangSdk\Mailing
     */
    public function setEndedAt($endedAt)
    {
        $this->endedAt = $endedAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getBounces()
    {
        return $this->bounces;
    }

    /**
     * @param int $bounces
     * @return \ClangSdk\Mailing
     */
    public function setBounces($bounces)
    {
        $this->bounces = $bounces;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param int $opens
     * @return \ClangSdk\Mailing
     */
    public function setOpens($opens)
    {
        $this->opens = $opens;
        return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * @param int $clicks
     * @return \ClangSdk\Mailing
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
        return $this;
    }

    /**
     * @return int
     */
    public function getComplaints()
    {
        return $this->complaints;
    }

    /**
     * @param int $complaints
     * @return \ClangSdk\Mailing
     */
    public function setComplaints($complaints)
    {
        $this->complaints = $complaints;
        return $this;
    }

}
