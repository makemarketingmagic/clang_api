<?php

namespace ClangSdk;

class Open
{

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
     * @var string $openedAt
     */
    protected $openedAt = null;

    /**
     * @var BrowserInformation $browserInformation
     */
    protected $browserInformation = null;

    
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
     * @return \ClangSdk\Open
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
     * @return \ClangSdk\Open
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
     * @return \ClangSdk\Open
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpenedAt()
    {
      return $this->openedAt;
    }

    /**
     * @param string $openedAt
     * @return \ClangSdk\Open
     */
    public function setOpenedAt($openedAt)
    {
      $this->openedAt = $openedAt;
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
     * @return \ClangSdk\Open
     */
    public function setBrowserInformation($browserInformation)
    {
      $this->browserInformation = $browserInformation;
      return $this;
    }

}
