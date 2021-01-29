<?php

namespace ClangSdk;

class mailingLink_getClickSet
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var MailingLink $mailingLink
     */
    protected $mailingLink = null;

    /**
     * @param string $uuid
     * @param MailingLink $mailingLink
     */
    public function __construct($uuid, $mailingLink)
    {
        $this->uuid = $uuid;
        $this->mailingLink = $mailingLink;
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
     * @return \ClangSdk\mailingLink_getClickSet
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return MailingLink
     */
    public function getMailingLink()
    {
        return $this->mailingLink;
    }

    /**
     * @param MailingLink $mailingLink
     * @return \ClangSdk\mailingLink_getClickSet
     */
    public function setMailingLink($mailingLink)
    {
        $this->mailingLink = $mailingLink;
        return $this;
    }

}
