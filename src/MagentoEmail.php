<?php

namespace ClangSdk;

class MagentoEmail
{

    /**
     * @var string $folder
     */
    protected $folder = null;

    /**
     * @var string $class
     */
    protected $class = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $templateId
     */
    protected $templateId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $fromAddress
     */
    protected $fromAddress = null;

    /**
     * @var string $fromName
     */
    protected $fromName = null;

    /**
     * @var string $replyToAddress
     */
    protected $replyToAddress = null;

    /**
     * @var string $replyToName
     */
    protected $replyToName = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

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
     * @var string $htmlContent
     */
    protected $htmlContent = null;

    /**
     * @var ArrayOfEmailBlockContainer $htmlBlocks
     */
    protected $htmlBlocks = null;

    /**
     * @var string $textContent
     */
    protected $textContent = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @param string $folder
     * @return \ClangSdk\MagentoEmail
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $class
     * @return \ClangSdk\MagentoEmail
     */
    public function setClass($class)
    {
        $this->class = $class;
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
     * @return \ClangSdk\MagentoEmail
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \ClangSdk\MagentoEmail
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param int $templateId
     * @return \ClangSdk\MagentoEmail
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
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
     * @return \ClangSdk\MagentoEmail
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \ClangSdk\MagentoEmail
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromAddress()
    {
        return $this->fromAddress;
    }

    /**
     * @param string $fromAddress
     * @return \ClangSdk\MagentoEmail
     */
    public function setFromAddress($fromAddress)
    {
        $this->fromAddress = $fromAddress;
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
     * @return \ClangSdk\MagentoEmail
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
        return $this;
    }

    /**
     * @return string
     */
    public function getReplyToAddress()
    {
        return $this->replyToAddress;
    }

    /**
     * @param string $replyToAddress
     * @return \ClangSdk\MagentoEmail
     */
    public function setReplyToAddress($replyToAddress)
    {
        $this->replyToAddress = $replyToAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getReplyToName()
    {
        return $this->replyToName;
    }

    /**
     * @param string $replyToName
     * @return \ClangSdk\MagentoEmail
     */
    public function setReplyToName($replyToName)
    {
        $this->replyToName = $replyToName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return \ClangSdk\MagentoEmail
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
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
     * @return \ClangSdk\MagentoEmail
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
     * @return \ClangSdk\MagentoEmail
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
     * @return \ClangSdk\MagentoEmail
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
     * @return \ClangSdk\MagentoEmail
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    /**
     * @param string $htmlContent
     * @return \ClangSdk\MagentoEmail
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
        return $this;
    }

    /**
     * @return ArrayOfEmailBlockContainer
     */
    public function getHtmlBlocks()
    {
        return $this->htmlBlocks;
    }

    /**
     * @param ArrayOfEmailBlockContainer $htmlBlocks
     * @return \ClangSdk\MagentoEmail
     */
    public function setHtmlBlocks($htmlBlocks)
    {
        $this->htmlBlocks = $htmlBlocks;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextContent()
    {
        return $this->textContent;
    }

    /**
     * @param string $textContent
     * @return \ClangSdk\MagentoEmail
     */
    public function setTextContent($textContent)
    {
        $this->textContent = $textContent;
        return $this;
    }

}
