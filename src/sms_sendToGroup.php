<?php

namespace ClangSdk;

class sms_sendToGroup
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $smsId
     */
    protected $smsId = null;

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var ArrayOfOption $options
     */
    protected $options = null;

    /**
     * @param string $uuid
     * @param int $smsId
     * @param int $groupId
     * @param ArrayOfOption $options
     */
    public function __construct($uuid, $smsId, $groupId, $options)
    {
        $this->uuid = $uuid;
        $this->smsId = $smsId;
        $this->groupId = $groupId;
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
     * @return \ClangSdk\sms_sendToGroup
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getSmsId()
    {
        return $this->smsId;
    }

    /**
     * @param int $smsId
     * @return \ClangSdk\sms_sendToGroup
     */
    public function setSmsId($smsId)
    {
        $this->smsId = $smsId;
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
     * @return \ClangSdk\sms_sendToGroup
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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
     * @return \ClangSdk\sms_sendToGroup
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

}
