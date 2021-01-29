<?php

namespace ClangSdk;

class ArrayOfMethodOptions implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MethodOptions[] $MethodOptions
     */
    protected $MethodOptions = null;


    public function __construct()
    {

    }

    /**
     * @return MethodOptions[]
     */
    public function getMethodOptions()
    {
        return $this->MethodOptions;
    }

    /**
     * @param MethodOptions[] $MethodOptions
     * @return \ClangSdk\ArrayOfMethodOptions
     */
    public function setMethodOptions(array $MethodOptions = null)
    {
        $this->MethodOptions = $MethodOptions;
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
        return isset($this->MethodOptions[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MethodOptions
     */
    public function offsetGet($offset)
    {
        return $this->MethodOptions[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MethodOptions $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->MethodOptions[] = $value;
        } else {
            $this->MethodOptions[$offset] = $value;
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
        unset($this->MethodOptions[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MethodOptions Return the current element
     */
    public function current()
    {
        return current($this->MethodOptions);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MethodOptions);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MethodOptions);
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
        reset($this->MethodOptions);
    }

    /**
     * Countable implementation
     *
     * @return MethodOptions Return count of elements
     */
    public function count()
    {
        return count($this->MethodOptions);
    }

}
