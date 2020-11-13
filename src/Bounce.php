<?php

namespace ClangSdk;

class Bounce
{

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
     * @var string $bouncedAt
     */
    protected $bouncedAt = null;

    /**
     * @var string $rule
     */
    protected $rule = null;

    /**
     * @var string $category
     */
    protected $category = null;

    
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
     * @return \ClangSdk\Bounce
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
     * @return \ClangSdk\Bounce
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
     * @return \ClangSdk\Bounce
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBouncedAt()
    {
      return $this->bouncedAt;
    }

    /**
     * @param string $bouncedAt
     * @return \ClangSdk\Bounce
     */
    public function setBouncedAt($bouncedAt)
    {
      $this->bouncedAt = $bouncedAt;
      return $this;
    }

    /**
     * @return string
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param string $rule
     * @return \ClangSdk\Bounce
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \ClangSdk\Bounce
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

}
