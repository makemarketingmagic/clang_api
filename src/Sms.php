<?php

namespace ClangSdk;

class Sms
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $fromName
     */
    protected $fromName = null;

    /**
     * @var string $plainText
     */
    protected $plainText = null;

    /**
     * @var boolean $enableUnicodeSupport
     */
    protected $enableUnicodeSupport = null;

    /**
     * @var int $maxSmsMessages
     */
    protected $maxSmsMessages = null;

    /**
     * @var string $createdBy
     */
    protected $createdBy = null;

    /**
     * @var string $createdAt
     */
    protected $createdAt = null;

    /**
     * @var string $modifiedBy
     */
    protected $modifiedBy = null;

    /**
     * @var string $modifiedAt
     */
    protected $modifiedAt = null;

    /**
     * @var ArrayOfSmsBlockContainer $textBlocks
     */
    protected $textBlocks = null;


    public function __construct()
    {

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
     * @return \ClangSdk\Sms
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \ClangSdk\Sms
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \ClangSdk\Sms
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * @param string $fromName
     * @return \ClangSdk\Sms
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlainText()
    {
        return $this->plainText;
    }

    /**
     * @param string $plainText
     * @return \ClangSdk\Sms
     */
    public function setPlainText($plainText)
    {
        $this->plainText = $plainText;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableUnicodeSupport()
    {
        return $this->enableUnicodeSupport;
    }

    /**
     * @param boolean $enableUnicodeSupport
     * @return \ClangSdk\Sms
     */
    public function setEnableUnicodeSupport($enableUnicodeSupport)
    {
        $this->enableUnicodeSupport = $enableUnicodeSupport;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSmsMessages()
    {
        return $this->maxSmsMessages;
    }

    /**
     * @param int $maxSmsMessages
     * @return \ClangSdk\Sms
     */
    public function setMaxSmsMessages($maxSmsMessages)
    {
        $this->maxSmsMessages = $maxSmsMessages;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return \ClangSdk\Sms
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return \ClangSdk\Sms
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return \ClangSdk\Sms
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param string $modifiedAt
     * @return \ClangSdk\Sms
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * @return ArrayOfSmsBlockContainer
     */
    public function getTextBlocks()
    {
        return $this->textBlocks;
    }

    /**
     * @param ArrayOfSmsBlockContainer $textBlocks
     * @return \ClangSdk\Sms
     */
    public function setTextBlocks($textBlocks)
    {
        $this->textBlocks = $textBlocks;
        return $this;
    }

}
