<?php

namespace ClangSdk;

class group_addMembersInBulk
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
     * @var ArrayOfCustomer $customers
     */
    protected $customers = null;

    /**
     * @param string $uuid
     * @param Group $group
     * @param ArrayOfCustomer $customers
     */
    public function __construct($uuid, $group, $customers)
    {
        $this->uuid = $uuid;
        $this->group = $group;
        $this->customers = $customers;
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
     * @return \ClangSdk\group_addMembersInBulk
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
     * @return \ClangSdk\group_addMembersInBulk
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return ArrayOfCustomer
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * @param ArrayOfCustomer $customers
     * @return \ClangSdk\group_addMembersInBulk
     */
    public function setCustomers($customers)
    {
        $this->customers = $customers;
        return $this;
    }

}
