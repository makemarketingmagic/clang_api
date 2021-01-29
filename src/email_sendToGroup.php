<?php

namespace ClangSdk;

class email_sendToGroup
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $emailId
     */
    protected $emailId = null;

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var ArrayOfOption $manualOptions
     */
    protected $manualOptions = null;

    /**
     * @var ArrayOfOption $options
     */
    protected $options = null;

    /**
     * @param string $uuid
     * @param int $emailId
     * @param int $groupId
     * @param ArrayOfOption $manualOptions
     * @param ArrayOfOption $options
     */
    public function __construct($uuid, $emailId, $groupId, $manualOptions, $options)
    {
        $this->uuid = $uuid;
        $this->emailId = $emailId;
        $this->groupId = $groupId;
        $this->manualOptions = $manualOptions;
        $this->options = $options;
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
     * @return \ClangSdk\email_sendToGroup
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * @param int $emailId
     * @return \ClangSdk\email_sendToGroup
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return \ClangSdk\email_sendToGroup
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getManualOptions()
    {
        return $this->manualOptions;
    }

    /**
     * @param ArrayOfOption $manualOptions
     * @return \ClangSdk\email_sendToGroup
     */
    public function setManualOptions($manualOptions)
    {
        $this->manualOptions = $manualOptions;
        return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param ArrayOfOption $options
     * @return \ClangSdk\email_sendToGroup
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

}
