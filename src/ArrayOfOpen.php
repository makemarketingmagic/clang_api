<?php

namespace ClangSdk;

class ArrayOfOpen implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Open[] $Open
     */
    protected $Open = null;


    public function __construct()
    {

    }

    /**
     * @return Open[]
     */
    public function getOpen()
    {
        return $this->Open;
    }

    /**
     * @param Open[] $Open
     * @return \ClangSdk\ArrayOfOpen
     */
    public function setOpen(array $Open = null)
    {
        $this->Open = $Open;
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
        return isset($this->Open[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Open
     */
    public function offsetGet($offset)
    {
        return $this->Open[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Open $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Open[] = $value;
        } else {
            $this->Open[$offset] = $value;
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
        unset($this->Open[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Open Return the current element
     */
    public function current()
    {
        return current($this->Open);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Open);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Open);
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
        reset($this->Open);
    }

    /**
     * Countable implementation
     *
     * @return Open Return count of elements
     */
    public function count()
    {
        return count($this->Open);
    }

}
