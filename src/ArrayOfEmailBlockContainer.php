<?php

namespace ClangSdk;

class ArrayOfEmailBlockContainer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmailBlockContainer[] $EmailBlockContainer
     */
    protected $EmailBlockContainer = null;


    public function __construct()
    {

    }

    /**
     * @return EmailBlockContainer[]
     */
    public function getEmailBlockContainer()
    {
        return $this->EmailBlockContainer;
    }

    /**
     * @param EmailBlockContainer[] $EmailBlockContainer
     * @return \ClangSdk\ArrayOfEmailBlockContainer
     */
    public function setEmailBlockContainer(array $EmailBlockContainer = null)
    {
        $this->EmailBlockContainer = $EmailBlockContainer;
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
        return isset($this->EmailBlockContainer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmailBlockContainer
     */
    public function offsetGet($offset)
    {
        return $this->EmailBlockContainer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmailBlockContainer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->EmailBlockContainer[] = $value;
        } else {
            $this->EmailBlockContainer[$offset] = $value;
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
        unset($this->EmailBlockContainer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmailBlockContainer Return the current element
     */
    public function current()
    {
        return current($this->EmailBlockContainer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->EmailBlockContainer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->EmailBlockContainer);
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
        reset($this->EmailBlockContainer);
    }

    /**
     * Countable implementation
     *
     * @return EmailBlockContainer Return count of elements
     */
    public function count()
    {
        return count($this->EmailBlockContainer);
    }

}
