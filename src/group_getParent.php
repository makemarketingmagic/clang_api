<?php

namespace ClangSdk;

class group_getParent
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
     * @param string $uuid
     * @param Group $group
     */
    public function __construct($uuid, $group)
    {
        $this->uuid = $uuid;
        $this->group = $group;
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
     * @return \ClangSdk\group_getParent
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
     * @return \ClangSdk\group_getParent
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

}
