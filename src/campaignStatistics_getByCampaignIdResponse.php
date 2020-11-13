<?php

namespace ClangSdk;

class campaignStatistics_getByCampaignIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var CampaignStatistics $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param CampaignStatistics $msg
     */
    public function __construct($code, $msg)
    {
      $this->code = $code;
      $this->msg = $msg;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \ClangSdk\campaignStatistics_getByCampaignIdResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return CampaignStatistics
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param CampaignStatistics $msg
     * @return \ClangSdk\campaignStatistics_getByCampaignIdResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
