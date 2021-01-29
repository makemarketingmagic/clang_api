<?php

namespace ClangSdk;

class magentoCategory_upsert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var MagentoCategory $category
     */
    protected $category = null;

    /**
     * @param string $uuid
     * @param MagentoCategory $category
     */
    public function __construct($uuid, $category)
    {
        $this->uuid = $uuid;
        $this->category = $category;
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
     * @return \ClangSdk\magentoCategory_upsert
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return MagentoCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param MagentoCategory $category
     * @return \ClangSdk\magentoCategory_upsert
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

}
