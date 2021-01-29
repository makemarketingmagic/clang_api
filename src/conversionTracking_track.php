<?php

namespace ClangSdk;

class conversionTracking_track
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var ArrayOfOption $keywords
     */
    protected $keywords = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @param string $uuid
     * @param ArrayOfOption $keywords
     * @param string $id
     */
    public function __construct($uuid, $keywords, $id)
    {
        $this->uuid = $uuid;
        $this->keywords = $keywords;
        $this->id = $id;
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
     * @return \ClangSdk\conversionTracking_track
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param ArrayOfOption $keywords
     * @return \ClangSdk\conversionTracking_track
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
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
     * @return \ClangSdk\conversionTracking_track
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}
