<?php

namespace ClangSdk;

class clickSet_getClicks
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
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $size
     */
    protected $size = null;

    /**
     * @param string $uuid
     * @param int $resourceId
     * @param int $offset
     * @param int $size
     */
    public function __construct($uuid, $resourceId, $offset, $size)
    {
        $this->uuid = $uuid;
        $this->resourceId = $resourceId;
        $this->offset = $offset;
        $this->size = $size;
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
     * @return \ClangSdk\clickSet_getClicks
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
     * @return \ClangSdk\clickSet_getClicks
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return \ClangSdk\clickSet_getClicks
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return \ClangSdk\clickSet_getClicks
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

}
