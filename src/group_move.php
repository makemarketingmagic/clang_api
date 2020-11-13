<?php

namespace ClangSdk;

class group_move
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var Group $group
     */
    protected $group = null;

    /**
     * @var int $newParentId
     */
    protected $newParentId = null;

    /**
     * @param string $uuid
     * @param Group $group
     * @param int $newParentId
     */
    public function __construct($uuid, $group, $newParentId)
    {
      $this->uuid = $uuid;
      $this->group = $group;
      $this->newParentId = $newParentId;
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
     * @return \ClangSdk\group_move
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return Group
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param Group $group
     * @return \ClangSdk\group_move
     */
    public function setGroup($group)
    {
      $this->group = $group;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewParentId()
    {
      return $this->newParentId;
    }

    /**
     * @param int $newParentId
     * @return \ClangSdk\group_move
     */
    public function setNewParentId($newParentId)
    {
      $this->newParentId = $newParentId;
      return $this;
    }

}
