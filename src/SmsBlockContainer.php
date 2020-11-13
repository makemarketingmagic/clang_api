<?php

namespace ClangSdk;

class SmsBlockContainer
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $defaultBlockId
     */
    protected $defaultBlockId = null;

    /**
     * @var ArrayOfSmsBlock $blocks
     */
    protected $blocks = null;

    
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
     * @return \ClangSdk\SmsBlockContainer
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
     * @return \ClangSdk\SmsBlockContainer
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \ClangSdk\SmsBlockContainer
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultBlockId()
    {
      return $this->defaultBlockId;
    }

    /**
     * @param int $defaultBlockId
     * @return \ClangSdk\SmsBlockContainer
     */
    public function setDefaultBlockId($defaultBlockId)
    {
      $this->defaultBlockId = $defaultBlockId;
      return $this;
    }

    /**
     * @return ArrayOfSmsBlock
     */
    public function getBlocks()
    {
      return $this->blocks;
    }

    /**
     * @param ArrayOfSmsBlock $blocks
     * @return \ClangSdk\SmsBlockContainer
     */
    public function setBlocks($blocks)
    {
      $this->blocks = $blocks;
      return $this;
    }

}
