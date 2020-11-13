<?php

namespace ClangSdk;

class CampaignObjectStatisticsOption
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var boolean $hasCustomerSet
     */
    protected $hasCustomerSet = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \ClangSdk\CampaignObjectStatisticsOption
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \ClangSdk\CampaignObjectStatisticsOption
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \ClangSdk\CampaignObjectStatisticsOption
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasCustomerSet()
    {
      return $this->hasCustomerSet;
    }

    /**
     * @param boolean $hasCustomerSet
     * @return \ClangSdk\CampaignObjectStatisticsOption
     */
    public function setHasCustomerSet($hasCustomerSet)
    {
      $this->hasCustomerSet = $hasCustomerSet;
      return $this;
    }

}
