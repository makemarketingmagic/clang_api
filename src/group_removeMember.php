<?php

namespace ClangSdk;

class group_removeMember
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
     * @var Customer $customer
     */
    protected $customer = null;

    /**
     * @param string $uuid
     * @param Group $group
     * @param Customer $customer
     */
    public function __construct($uuid, $group, $customer)
    {
        $this->uuid = $uuid;
        $this->group = $group;
        $this->customer = $customer;
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
     * @return \ClangSdk\group_removeMember
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
     * @return \ClangSdk\group_removeMember
     */
    public function setGroup($group)
    {
        $this->group = $group;
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
     * @return \ClangSdk\group_removeMember
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

}
