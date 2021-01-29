<?php

namespace ClangSdk;

class ArrayOfEmailBlock implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmailBlock[] $EmailBlock
     */
    protected $EmailBlock = null;


    public function __construct()
    {

    }

    /**
     * @return EmailBlock[]
     */
    public function getEmailBlock()
    {
        return $this->EmailBlock;
    }

    /**
     * @param EmailBlock[] $EmailBlock
     * @return \ClangSdk\ArrayOfEmailBlock
     */
    public function setEmailBlock(array $EmailBlock = null)
    {
        $this->EmailBlock = $EmailBlock;
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
        return isset($this->EmailBlock[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmailBlock
     */
    public function offsetGet($offset)
    {
        return $this->EmailBlock[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmailBlock $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->EmailBlock[] = $value;
        } else {
            $this->EmailBlock[$offset] = $value;
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
        unset($this->EmailBlock[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmailBlock Return the current element
     */
    public function current()
    {
        return current($this->EmailBlock);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->EmailBlock);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->EmailBlock);
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
        reset($this->EmailBlock);
    }

    /**
     * Countable implementation
     *
     * @return EmailBlock Return count of elements
     */
    public function count()
    {
        return count($this->EmailBlock);
    }

}
