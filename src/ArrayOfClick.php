<?php

namespace ClangSdk;

class ArrayOfClick implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Click[] $Click
     */
    protected $Click = null;


    public function __construct()
    {

    }

    /**
     * @return Click[]
     */
    public function getClick()
    {
        return $this->Click;
    }

    /**
     * @param Click[] $Click
     * @return \ClangSdk\ArrayOfClick
     */
    public function setClick(array $Click = null)
    {
        $this->Click = $Click;
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
        return isset($this->Click[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Click
     */
    public function offsetGet($offset)
    {
        return $this->Click[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Click $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Click[] = $value;
        } else {
            $this->Click[$offset] = $value;
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
        unset($this->Click[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Click Return the current element
     */
    public function current()
    {
        return current($this->Click);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Click);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Click);
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
        reset($this->Click);
    }

    /**
     * Countable implementation
     *
     * @return Click Return count of elements
     */
    public function count()
    {
        return count($this->Click);
    }

}
