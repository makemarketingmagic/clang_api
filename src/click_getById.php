<?php

namespace ClangSdk;

class click_getById
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $clickId
     */
    protected $clickId = null;

    /**
     * @param string $uuid
     * @param int $clickId
     */
    public function __construct($uuid, $clickId)
    {
      $this->uuid = $uuid;
      $this->clickId = $clickId;
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
     * @return \ClangSdk\click_getById
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return int
     */
    public function getClickId()
    {
      return $this->clickId;
    }

    /**
     * @param int $clickId
     * @return \ClangSdk\click_getById
     */
    public function setClickId($clickId)
    {
      $this->clickId = $clickId;
      return $this;
    }

}
