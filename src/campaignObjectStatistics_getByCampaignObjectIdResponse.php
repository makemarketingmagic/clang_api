<?php

namespace ClangSdk;

class campaignObjectStatistics_getByCampaignObjectIdResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var CampaignObjectStatistics $msg
     */
    protected $msg = null;

    /**
     * @param int $code
     * @param CampaignObjectStatistics $msg
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
     * @return \ClangSdk\campaignObjectStatistics_getByCampaignObjectIdResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return CampaignObjectStatistics
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param CampaignObjectStatistics $msg
     * @return \ClangSdk\campaignObjectStatistics_getByCampaignObjectIdResponse
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

}
