<?php

namespace ClangSdk;

class ArrayOfMagentoCreditMemoItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MagentoCreditMemoItem[] $MagentoCreditMemoItem
     */
    protected $MagentoCreditMemoItem = null;


    public function __construct()
    {

    }

    /**
     * @return MagentoCreditMemoItem[]
     */
    public function getMagentoCreditMemoItem()
    {
        return $this->MagentoCreditMemoItem;
    }

    /**
     * @param MagentoCreditMemoItem[] $MagentoCreditMemoItem
     * @return \ClangSdk\ArrayOfMagentoCreditMemoItem
     */
    public function setMagentoCreditMemoItem(array $MagentoCreditMemoItem = null)
    {
        $this->MagentoCreditMemoItem = $MagentoCreditMemoItem;
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
        return isset($this->MagentoCreditMemoItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MagentoCreditMemoItem
     */
    public function offsetGet($offset)
    {
        return $this->MagentoCreditMemoItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MagentoCreditMemoItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->MagentoCreditMemoItem[] = $value;
        } else {
            $this->MagentoCreditMemoItem[$offset] = $value;
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
        unset($this->MagentoCreditMemoItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MagentoCreditMemoItem Return the current element
     */
    public function current()
    {
        return current($this->MagentoCreditMemoItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MagentoCreditMemoItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MagentoCreditMemoItem);
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
        reset($this->MagentoCreditMemoItem);
    }

    /**
     * Countable implementation
     *
     * @return MagentoCreditMemoItem Return count of elements
     */
    public function count()
    {
        return count($this->MagentoCreditMemoItem);
    }

}
