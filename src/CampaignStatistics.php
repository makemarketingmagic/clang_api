<?php

namespace ClangSdk;

class CampaignStatistics
{

    /**
     * @var int $smsableCustomers
     */
    protected $smsableCustomers = null;

    /**
     * @var int $uniqueCustomers
     */
    protected $uniqueCustomers = null;

    /**
     * @var int $mailableCustomers
     */
    protected $mailableCustomers = null;

    /**
     * @var int $uniqueEmailAddresses
     */
    protected $uniqueEmailAddresses = null;

    /**
     * @var int $uniqueMobilePhoneNumbers
     */
    protected $uniqueMobilePhoneNumbers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSmsableCustomers()
    {
      return $this->smsableCustomers;
    }

    /**
     * @param int $smsableCustomers
     * @return \ClangSdk\CampaignStatistics
     */
    public function setSmsableCustomers($smsableCustomers)
    {
      $this->smsableCustomers = $smsableCustomers;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueCustomers()
    {
      return $this->uniqueCustomers;
    }

    /**
     * @param int $uniqueCustomers
     * @return \ClangSdk\CampaignStatistics
     */
    public function setUniqueCustomers($uniqueCustomers)
    {
      $this->uniqueCustomers = $uniqueCustomers;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailableCustomers()
    {
      return $this->mailableCustomers;
    }

    /**
     * @param int $mailableCustomers
     * @return \ClangSdk\CampaignStatistics
     */
    public function setMailableCustomers($mailableCustomers)
    {
      $this->mailableCustomers = $mailableCustomers;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueEmailAddresses()
    {
      return $this->uniqueEmailAddresses;
    }

    /**
     * @param int $uniqueEmailAddresses
     * @return \ClangSdk\CampaignStatistics
     */
    public function setUniqueEmailAddresses($uniqueEmailAddresses)
    {
      $this->uniqueEmailAddresses = $uniqueEmailAddresses;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueMobilePhoneNumbers()
    {
      return $this->uniqueMobilePhoneNumbers;
    }

    /**
     * @param int $uniqueMobilePhoneNumbers
     * @return \ClangSdk\CampaignStatistics
     */
    public function setUniqueMobilePhoneNumbers($uniqueMobilePhoneNumbers)
    {
      $this->uniqueMobilePhoneNumbers = $uniqueMobilePhoneNumbers;
      return $this;
    }

}
