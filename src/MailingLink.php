<?php

namespace ClangSdk;

class MailingLink
{

    /**
     * @var int $mailingId
     */
    protected $mailingId = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $track
     */
    protected $track = null;

    /**
     * @var boolean $source
     */
    protected $source = null;

    /**
     * @var ArrayOfTag $tags
     */
    protected $tags = null;

    /**
     * @var string $google_source
     */
    protected $google_source = null;

    /**
     * @var string $google_medium
     */
    protected $google_medium = null;

    /**
     * @var string $google_term
     */
    protected $google_term = null;

    /**
     * @var string $google_content
     */
    protected $google_content = null;

    /**
     * @var string $google_campaign
     */
    protected $google_campaign = null;

    /**
     * @var string $sitestat_campaign
     */
    protected $sitestat_campaign = null;

    /**
     * @var string $sitestat_source
     */
    protected $sitestat_source = null;

    /**
     * @var string $sitestat_mchannel
     */
    protected $sitestat_mchannel = null;

    /**
     * @var string $sitestat_linkname
     */
    protected $sitestat_linkname = null;

    /**
     * @var string $sitestat_fee
     */
    protected $sitestat_fee = null;

    
    public function __construct()
    {
    
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
     * @return \ClangSdk\MailingLink
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \ClangSdk\MailingLink
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \ClangSdk\MailingLink
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \ClangSdk\MailingLink
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTrack()
    {
      return $this->track;
    }

    /**
     * @param boolean $track
     * @return \ClangSdk\MailingLink
     */
    public function setTrack($track)
    {
      $this->track = $track;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param boolean $source
     * @return \ClangSdk\MailingLink
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return ArrayOfTag
     */
    public function getTags()
    {
      return $this->tags;
    }

    /**
     * @param ArrayOfTag $tags
     * @return \ClangSdk\MailingLink
     */
    public function setTags($tags)
    {
      $this->tags = $tags;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogle_source()
    {
      return $this->google_source;
    }

    /**
     * @param string $google_source
     * @return \ClangSdk\MailingLink
     */
    public function setGoogle_source($google_source)
    {
      $this->google_source = $google_source;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogle_medium()
    {
      return $this->google_medium;
    }

    /**
     * @param string $google_medium
     * @return \ClangSdk\MailingLink
     */
    public function setGoogle_medium($google_medium)
    {
      $this->google_medium = $google_medium;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogle_term()
    {
      return $this->google_term;
    }

    /**
     * @param string $google_term
     * @return \ClangSdk\MailingLink
     */
    public function setGoogle_term($google_term)
    {
      $this->google_term = $google_term;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogle_content()
    {
      return $this->google_content;
    }

    /**
     * @param string $google_content
     * @return \ClangSdk\MailingLink
     */
    public function setGoogle_content($google_content)
    {
      $this->google_content = $google_content;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogle_campaign()
    {
      return $this->google_campaign;
    }

    /**
     * @param string $google_campaign
     * @return \ClangSdk\MailingLink
     */
    public function setGoogle_campaign($google_campaign)
    {
      $this->google_campaign = $google_campaign;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitestat_campaign()
    {
      return $this->sitestat_campaign;
    }

    /**
     * @param string $sitestat_campaign
     * @return \ClangSdk\MailingLink
     */
    public function setSitestat_campaign($sitestat_campaign)
    {
      $this->sitestat_campaign = $sitestat_campaign;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitestat_source()
    {
      return $this->sitestat_source;
    }

    /**
     * @param string $sitestat_source
     * @return \ClangSdk\MailingLink
     */
    public function setSitestat_source($sitestat_source)
    {
      $this->sitestat_source = $sitestat_source;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitestat_mchannel()
    {
      return $this->sitestat_mchannel;
    }

    /**
     * @param string $sitestat_mchannel
     * @return \ClangSdk\MailingLink
     */
    public function setSitestat_mchannel($sitestat_mchannel)
    {
      $this->sitestat_mchannel = $sitestat_mchannel;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitestat_linkname()
    {
      return $this->sitestat_linkname;
    }

    /**
     * @param string $sitestat_linkname
     * @return \ClangSdk\MailingLink
     */
    public function setSitestat_linkname($sitestat_linkname)
    {
      $this->sitestat_linkname = $sitestat_linkname;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitestat_fee()
    {
      return $this->sitestat_fee;
    }

    /**
     * @param string $sitestat_fee
     * @return \ClangSdk\MailingLink
     */
    public function setSitestat_fee($sitestat_fee)
    {
      $this->sitestat_fee = $sitestat_fee;
      return $this;
    }

}
