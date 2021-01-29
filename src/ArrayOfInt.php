<?php

namespace ClangSdk;

class ArrayOfInt implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var integer[] $integer
     */
    protected $integer = null;


    public function __construct()
    {

    }

    /**
     * @return integer[]
     */
    public function getInteger()
    {
        return $this->integer;
    }

    /**
     * @param integer[] $integer
     * @return \ClangSdk\ArrayOfInt
     */
    public function setInteger(array $integer = null)
    {
        $this->integer = $integer;
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
        return isset($this->integer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return integer
     */
    public function offsetGet($offset)
    {
        return $this->integer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param integer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->integer[] = $value;
        } else {
            $this->integer[$offset] = $value;
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
        unset($this->integer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return integer Return the current element
     */
    public function current()
    {
        return current($this->integer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->integer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->integer);
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
        reset($this->integer);
    }

    /**
     * Countable implementation
     *
     * @return integer Return count of elements
     */
    public function count()
    {
        return count($this->integer);
    }

}
