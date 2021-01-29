<?php

namespace ClangSdk;

class ArrayOfMailing implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Mailing[] $Mailing
     */
    protected $Mailing = null;


    public function __construct()
    {

    }

    /**
     * @return Mailing[]
     */
    public function getMailing()
    {
        return $this->Mailing;
    }

    /**
     * @param Mailing[] $Mailing
     * @return \ClangSdk\ArrayOfMailing
     */
    public function setMailing(array $Mailing = null)
    {
        $this->Mailing = $Mailing;
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
        return isset($this->Mailing[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Mailing
     */
    public function offsetGet($offset)
    {
        return $this->Mailing[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Mailing $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Mailing[] = $value;
        } else {
            $this->Mailing[$offset] = $value;
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
        unset($this->Mailing[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Mailing Return the current element
     */
    public function current()
    {
        return current($this->Mailing);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Mailing);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Mailing);
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
        reset($this->Mailing);
    }

    /**
     * Countable implementation
     *
     * @return Mailing Return count of elements
     */
    public function count()
    {
        return count($this->Mailing);
    }

}
