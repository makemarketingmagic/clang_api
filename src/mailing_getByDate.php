<?php

namespace ClangSdk;

class mailing_getByDate
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var string $fromDate
     */
    protected $fromDate = null;

    /**
     * @var string $toDate
     */
    protected $toDate = null;

    /**
     * @param string $uuid
     * @param string $fromDate
     * @param string $toDate
     */
    public function __construct($uuid, $fromDate, $toDate)
    {
      $this->uuid = $uuid;
      $this->fromDate = $fromDate;
      $this->toDate = $toDate;
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
     * @return \ClangSdk\mailing_getByDate
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
      return $this->fromDate;
    }

    /**
     * @param string $fromDate
     * @return \ClangSdk\mailing_getByDate
     */
    public function setFromDate($fromDate)
    {
      $this->fromDate = $fromDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
      return $this->toDate;
    }

    /**
     * @param string $toDate
     * @return \ClangSdk\mailing_getByDate
     */
    public function setToDate($toDate)
    {
      $this->toDate = $toDate;
      return $this;
    }

}
