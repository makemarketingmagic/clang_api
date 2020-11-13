<?php

namespace ClangSdk;

class filemanager_makeDir
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $folder
     */
    protected $folder = null;

    /**
     * @param string $uuid
     * @param string $folder
     */
    public function __construct($uuid, $folder)
    {
      $this->uuid = $uuid;
      $this->folder = $folder;
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
     * @return \ClangSdk\filemanager_makeDir
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getFolder()
    {
      return $this->folder;
    }

    /**
     * @param string $folder
     * @return \ClangSdk\filemanager_makeDir
     */
    public function setFolder($folder)
    {
      $this->folder = $folder;
      return $this;
    }

}
