<?php

namespace ClangSdk;

class GroupMembership
{

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var boolean $isMember
     */
    protected $isMember = null;

    /**
     * @var string $startedAt
     */
    protected $startedAt = null;


    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return \ClangSdk\GroupMembership
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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
     * @return \ClangSdk\GroupMembership
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMember()
    {
        return $this->isMember;
    }

    /**
     * @param boolean $isMember
     * @return \ClangSdk\GroupMembership
     */
    public function setIsMember($isMember)
    {
        $this->isMember = $isMember;
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
     * @return \ClangSdk\GroupMembership
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
        return $this;
    }

}
