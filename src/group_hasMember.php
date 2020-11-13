<?php

namespace ClangSdk;

class group_hasMember
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var boolean $includeSubGroups
     */
    protected $includeSubGroups = null;

    /**
     * @param string $uuid
     * @param int $groupId
     * @param int $customerId
     * @param boolean $includeSubGroups
     */
    public function __construct($uuid, $groupId, $customerId, $includeSubGroups)
    {
      $this->uuid = $uuid;
      $this->groupId = $groupId;
      $this->customerId = $customerId;
      $this->includeSubGroups = $includeSubGroups;
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
     * @return \ClangSdk\group_hasMember
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
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
     * @return \ClangSdk\group_hasMember
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
     * @return \ClangSdk\group_hasMember
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = $customerId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeSubGroups()
    {
      return $this->includeSubGroups;
    }

    /**
     * @param boolean $includeSubGroups
     * @return \ClangSdk\group_hasMember
     */
    public function setIncludeSubGroups($includeSubGroups)
    {
      $this->includeSubGroups = $includeSubGroups;
      return $this;
    }

}
