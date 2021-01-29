<?php

namespace ClangSdk;

class ArrayOfCampaignObjectStatisticsOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CampaignObjectStatisticsOption[] $CampaignObjectStatisticsOption
     */
    protected $CampaignObjectStatisticsOption = null;


    public function __construct()
    {

    }

    /**
     * @return CampaignObjectStatisticsOption[]
     */
    public function getCampaignObjectStatisticsOption()
    {
        return $this->CampaignObjectStatisticsOption;
    }

    /**
     * @param CampaignObjectStatisticsOption[] $CampaignObjectStatisticsOption
     * @return \ClangSdk\ArrayOfCampaignObjectStatisticsOption
     */
    public function setCampaignObjectStatisticsOption(array $CampaignObjectStatisticsOption = null)
    {
        $this->CampaignObjectStatisticsOption = $CampaignObjectStatisticsOption;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->CampaignObjectStatisticsOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignObjectStatisticsOption
     */
    public function offsetGet($offset)
    {
        return $this->CampaignObjectStatisticsOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignObjectStatisticsOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->CampaignObjectStatisticsOption[] = $value;
        } else {
            $this->CampaignObjectStatisticsOption[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->CampaignObjectStatisticsOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CampaignObjectStatisticsOption Return the current element
     */
    public function current()
    {
        return current($this->CampaignObjectStatisticsOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->CampaignObjectStatisticsOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->CampaignObjectStatisticsOption);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->CampaignObjectStatisticsOption);
    }

    /**
     * Countable implementation
     *
     * @return CampaignObjectStatisticsOption Return count of elements
     */
    public function count()
    {
        return count($this->CampaignObjectStatisticsOption);
    }

}
