<?php

namespace ClangSdk;

class magentoEmail_insert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var MagentoEmail $email
     */
    protected $email = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @param string $uuid
     * @param MagentoEmail $email
     * @param string $campaignName
     */
    public function __construct($uuid, $email, $campaignName)
    {
        $this->uuid = $uuid;
        $this->email = $email;
        $this->campaignName = $campaignName;
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
     * @return \ClangSdk\magentoEmail_insert
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return MagentoEmail
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param MagentoEmail $email
     * @return \ClangSdk\magentoEmail_insert
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \ClangSdk\magentoEmail_insert
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;
        return $this;
    }

}
