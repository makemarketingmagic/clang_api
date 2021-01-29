<?php

namespace ClangSdk;

class ArrayOfSmsBlock implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SmsBlock[] $SmsBlock
     */
    protected $SmsBlock = null;


    public function __construct()
    {

    }

    /**
     * @return SmsBlock[]
     */
    public function getSmsBlock()
    {
        return $this->SmsBlock;
    }

    /**
     * @param SmsBlock[] $SmsBlock
     * @return \ClangSdk\ArrayOfSmsBlock
     */
    public function setSmsBlock(array $SmsBlock = null)
    {
        $this->SmsBlock = $SmsBlock;
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
        return isset($this->SmsBlock[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SmsBlock
     */
    public function offsetGet($offset)
    {
        return $this->SmsBlock[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SmsBlock $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->SmsBlock[] = $value;
        } else {
            $this->SmsBlock[$offset] = $value;
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
        unset($this->SmsBlock[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SmsBlock Return the current element
     */
    public function current()
    {
        return current($this->SmsBlock);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SmsBlock);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SmsBlock);
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
        reset($this->SmsBlock);
    }

    /**
     * Countable implementation
     *
     * @return SmsBlock Return count of elements
     */
    public function count()
    {
        return count($this->SmsBlock);
    }

}
