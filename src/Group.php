<?php

namespace ClangSdk;

class Group
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $parentId
     */
    protected $parentId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $createdBy
     */
    protected $createdBy = null;

    /**
     * @var string $createdAt
     */
    protected $createdAt = null;

    /**
     * @var string $modifiedBy
     */
    protected $modifiedBy = null;

    /**
     * @var string $modifiedAt
     */
    protected $modifiedAt = null;

    /**
     * @var string $countDate
     */
    protected $countDate = null;

    /**
     * @var int $customerCountRecursive
     */
    protected $customerCountRecursive = null;

    /**
     * @var int $customerCount
     */
    protected $customerCount = null;


    public function __construct()
    {

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
     * @return \ClangSdk\Group
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     * @return \ClangSdk\Group
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \ClangSdk\Group
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \ClangSdk\Group
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return \ClangSdk\Group
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return \ClangSdk\Group
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return \ClangSdk\Group
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param string $modifiedAt
     * @return \ClangSdk\Group
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountDate()
    {
        return $this->countDate;
    }

    /**
     * @param string $countDate
     * @return \ClangSdk\Group
     */
    public function setCountDate($countDate)
    {
        $this->countDate = $countDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerCountRecursive()
    {
        return $this->customerCountRecursive;
    }

    /**
     * @param int $customerCountRecursive
     * @return \ClangSdk\Group
     */
    public function setCustomerCountRecursive($customerCountRecursive)
    {
        $this->customerCountRecursive = $customerCountRecursive;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerCount()
    {
        return $this->customerCount;
    }

    /**
     * @param int $customerCount
     * @return \ClangSdk\Group
     */
    public function setCustomerCount($customerCount)
    {
        $this->customerCount = $customerCount;
        return $this;
    }

}
