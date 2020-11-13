<?php

namespace ClangSdk;

class resource_free
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $resourceId
     */
    protected $resourceId = null;

    /**
     * @param string $uuid
     * @param int $resourceId
     */
    public function __construct($uuid, $resourceId)
    {
      $this->uuid = $uuid;
      $this->resourceId = $resourceId;
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
     * @return \ClangSdk\resource_free
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return int
     */
    public function getResourceId()
    {
      return $this->resourceId;
    }

    /**
     * @param int $resourceId
     * @return \ClangSdk\resource_free
     */
    public function setResourceId($resourceId)
    {
      $this->resourceId = $resourceId;
      return $this;
    }

}
