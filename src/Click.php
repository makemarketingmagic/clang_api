<?php

namespace ClangSdk;

class Click
{

    /**
     * @var MailingLink $link
     */
    protected $link = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var int $mailingId
     */
    protected $mailingId = null;

    /**
     * @var string $clickedAt
     */
    protected $clickedAt = null;

    /**
     * @var BrowserInformation $browserInformation
     */
    protected $browserInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MailingLink
     */
    public function getLink()
    {
      return $this->link;
    }

    /**
     * @param MailingLink $link
     * @return \ClangSdk\Click
     */
    public function setLink($link)
    {
      $this->link = $link;
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
     * @return \ClangSdk\Click
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \ClangSdk\Click
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = $customerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailingId()
    {
      return $this->mailingId;
    }

    /**
     * @param int $mailingId
     * @return \ClangSdk\Click
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getClickedAt()
    {
      return $this->clickedAt;
    }

    /**
     * @param string $clickedAt
     * @return \ClangSdk\Click
     */
    public function setClickedAt($clickedAt)
    {
      $this->clickedAt = $clickedAt;
      return $this;
    }

    /**
     * @return BrowserInformation
     */
    public function getBrowserInformation()
    {
      return $this->browserInformation;
    }

    /**
     * @param BrowserInformation $browserInformation
     * @return \ClangSdk\Click
     */
    public function setBrowserInformation($browserInformation)
    {
      $this->browserInformation = $browserInformation;
      return $this;
    }

}
