<?php

namespace ClangSdk;

class mailing_getById
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $mailingId
     */
    protected $mailingId = null;

    /**
     * @param string $uuid
     * @param int $mailingId
     */
    public function __construct($uuid, $mailingId)
    {
      $this->uuid = $uuid;
      $this->mailingId = $mailingId;
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
     * @return \ClangSdk\mailing_getById
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailingId()
    {
      return $this->mailingId;
    }

    /**
     * @param int $mailingId
     * @return \ClangSdk\mailing_getById
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
