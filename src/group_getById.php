<?php

namespace ClangSdk;

class group_getById
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
     * @param string $uuid
     * @param int $groupId
     */
    public function __construct($uuid, $groupId)
    {
      $this->uuid = $uuid;
      $this->groupId = $groupId;
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
     * @return \ClangSdk\group_getById
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
     * @return \ClangSdk\group_getById
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

}
