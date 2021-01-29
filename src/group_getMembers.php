<?php

namespace ClangSdk;

class group_getMembers
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
     * @var boolean $recursive
     */
    protected $recursive = null;

    /**
     * @param string $uuid
     * @param int $groupId
     * @param boolean $recursive
     */
    public function __construct($uuid, $groupId, $recursive)
    {
        $this->uuid = $uuid;
        $this->groupId = $groupId;
        $this->recursive = $recursive;
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
     * @return \ClangSdk\group_getMembers
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
     * @return \ClangSdk\group_getMembers
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRecursive()
    {
        return $this->recursive;
    }

    /**
     * @param boolean $recursive
     * @return \ClangSdk\group_getMembers
     */
    public function setRecursive($recursive)
    {
        $this->recursive = $recursive;
        return $this;
    }

}
