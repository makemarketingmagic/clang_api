<?php

namespace ClangSdk;

class mailing_getAll
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
     * @return \ClangSdk\mailing_getAll
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

}
