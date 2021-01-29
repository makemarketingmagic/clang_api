<?php

namespace ClangSdk;

class bounceSet_getBounce
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
     * @var int $index
     */
    protected $index = null;

    /**
     * @param string $uuid
     * @param int $resourceId
     * @param int $index
     */
    public function __construct($uuid, $resourceId, $index)
    {
        $this->uuid = $uuid;
        $this->resourceId = $resourceId;
        $this->index = $index;
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
     * @return \ClangSdk\bounceSet_getBounce
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
     * @return \ClangSdk\bounceSet_getBounce
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return \ClangSdk\bounceSet_getBounce
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

}
