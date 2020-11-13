<?php

namespace ClangSdk;

class Delivery
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var Customer $customer
     */
    protected $customer = null;

    /**
     * @var int $mailingId
     */
    protected $mailingId = null;

    /**
     * @var string $deliveryDate
     */
    protected $deliveryDate = null;

    /**
     * @var string $firstOpenDate
     */
    protected $firstOpenDate = null;

    /**
     * @var string $lastOpenDate
     */
    protected $lastOpenDate = null;

    /**
     * @var string $firstClickDate
     */
    protected $firstClickDate = null;

    /**
     * @var string $lastClickDate
     */
    protected $lastClickDate = null;

    /**
     * @var ArrayOfOpen $opens
     */
    protected $opens = null;

    /**
     * @var ArrayOfClick $clicks
     */
    protected $clicks = null;

    /**
     * @var Bounce $bounce
     */
    protected $bounce = null;

    /**
     * @var Complaint $complaint
     */
    protected $complaint = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \ClangSdk\Delivery
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \ClangSdk\Delivery
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return \ClangSdk\Delivery
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \ClangSdk\Delivery
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
      return $this->deliveryDate;
    }

    /**
     * @param string $deliveryDate
     * @return \ClangSdk\Delivery
     */
    public function setDeliveryDate($deliveryDate)
    {
      $this->deliveryDate = $deliveryDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstOpenDate()
    {
      return $this->firstOpenDate;
    }

    /**
     * @param string $firstOpenDate
     * @return \ClangSdk\Delivery
     */
    public function setFirstOpenDate($firstOpenDate)
    {
      $this->firstOpenDate = $firstOpenDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastOpenDate()
    {
      return $this->lastOpenDate;
    }

    /**
     * @param string $lastOpenDate
     * @return \ClangSdk\Delivery
     */
    public function setLastOpenDate($lastOpenDate)
    {
      $this->lastOpenDate = $lastOpenDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstClickDate()
    {
      return $this->firstClickDate;
    }

    /**
     * @param string $firstClickDate
     * @return \ClangSdk\Delivery
     */
    public function setFirstClickDate($firstClickDate)
    {
      $this->firstClickDate = $firstClickDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastClickDate()
    {
      return $this->lastClickDate;
    }

    /**
     * @param string $lastClickDate
     * @return \ClangSdk\Delivery
     */
    public function setLastClickDate($lastClickDate)
    {
      $this->lastClickDate = $lastClickDate;
      return $this;
    }

    /**
     * @return ArrayOfOpen
     */
    public function getOpens()
    {
      return $this->opens;
    }

    /**
     * @param ArrayOfOpen $opens
     * @return \ClangSdk\Delivery
     */
    public function setOpens($opens)
    {
      $this->opens = $opens;
      return $this;
    }

    /**
     * @return ArrayOfClick
     */
    public function getClicks()
    {
      return $this->clicks;
    }

    /**
     * @param ArrayOfClick $clicks
     * @return \ClangSdk\Delivery
     */
    public function setClicks($clicks)
    {
      $this->clicks = $clicks;
      return $this;
    }

    /**
     * @return Bounce
     */
    public function getBounce()
    {
      return $this->bounce;
    }

    /**
     * @param Bounce $bounce
     * @return \ClangSdk\Delivery
     */
    public function setBounce($bounce)
    {
      $this->bounce = $bounce;
      return $this;
    }

    /**
     * @return Complaint
     */
    public function getComplaint()
    {
      return $this->complaint;
    }

    /**
     * @param Complaint $complaint
     * @return \ClangSdk\Delivery
     */
    public function setComplaint($complaint)
    {
      $this->complaint = $complaint;
      return $this;
    }

}
