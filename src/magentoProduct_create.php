<?php

namespace ClangSdk;

class magentoProduct_create
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @param string $uuid
     */
    public function __construct($uuid)
    {
      $this->uuid = $uuid;
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
     * @return \ClangSdk\magentoProduct_create
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

}
