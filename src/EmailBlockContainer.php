<?php

namespace ClangSdk;

class EmailBlockContainer
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
     * @var ArrayOfEmailBlock $blocks
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
     * @return \ClangSdk\EmailBlockContainer
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
     * @return \ClangSdk\EmailBlockContainer
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
     * @return \ClangSdk\EmailBlockContainer
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
     * @return \ClangSdk\EmailBlockContainer
     */
    public function setDefaultBlockId($defaultBlockId)
    {
      $this->defaultBlockId = $defaultBlockId;
      return $this;
    }

    /**
     * @return ArrayOfEmailBlock
     */
    public function getBlocks()
    {
      return $this->blocks;
    }

    /**
     * @param ArrayOfEmailBlock $blocks
     * @return \ClangSdk\EmailBlockContainer
     */
    public function setBlocks($blocks)
    {
      $this->blocks = $blocks;
      return $this;
    }

}
