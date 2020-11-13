<?php

namespace ClangSdk;

class magentoCreditMemo_insert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var MagentoCreditMemo $creditmemo
     */
    protected $creditmemo = null;

    /**
     * @param string $uuid
     * @param MagentoCreditMemo $creditmemo
     */
    public function __construct($uuid, $creditmemo)
    {
      $this->uuid = $uuid;
      $this->creditmemo = $creditmemo;
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
     * @return \ClangSdk\magentoCreditMemo_insert
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return MagentoCreditMemo
     */
    public function getCreditmemo()
    {
      return $this->creditmemo;
    }

    /**
     * @param MagentoCreditMemo $creditmemo
     * @return \ClangSdk\magentoCreditMemo_insert
     */
    public function setCreditmemo($creditmemo)
    {
      $this->creditmemo = $creditmemo;
      return $this;
    }

}
