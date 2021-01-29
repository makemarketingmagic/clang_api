<?php

namespace ClangSdk;

class Complaint
{

    /**
     * @var string $feedbackloop
     */
    protected $feedbackloop = null;

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
     * @var string $complaintAt
     */
    protected $complaintAt = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getFeedbackloop()
    {
        return $this->feedbackloop;
    }

    /**
     * @param string $feedbackloop
     * @return \ClangSdk\Complaint
     */
    public function setFeedbackloop($feedbackloop)
    {
        $this->feedbackloop = $feedbackloop;
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
     * @return \ClangSdk\Complaint
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
     * @return \ClangSdk\Complaint
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
     * @return \ClangSdk\Complaint
     */
    public function setMailingId($mailingId)
    {
        $this->mailingId = $mailingId;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplaintAt()
    {
        return $this->complaintAt;
    }

    /**
     * @param string $complaintAt
     * @return \ClangSdk\Complaint
     */
    public function setComplaintAt($complaintAt)
    {
        $this->complaintAt = $complaintAt;
        return $this;
    }

}
