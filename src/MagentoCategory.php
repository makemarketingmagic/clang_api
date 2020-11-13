<?php

namespace ClangSdk;

class MagentoCategory
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $externalCategoryId
     */
    protected $externalCategoryId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    
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
     * @return \ClangSdk\MagentoCategory
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalCategoryId()
    {
      return $this->externalCategoryId;
    }

    /**
     * @param int $externalCategoryId
     * @return \ClangSdk\MagentoCategory
     */
    public function setExternalCategoryId($externalCategoryId)
    {
      $this->externalCategoryId = $externalCategoryId;
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
     * @return \ClangSdk\MagentoCategory
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
