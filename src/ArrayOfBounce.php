<?php

namespace ClangSdk;

class ArrayOfBounce implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Bounce[] $Bounce
     */
    protected $Bounce = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Bounce[]
     */
    public function getBounce()
    {
      return $this->Bounce;
    }

    /**
     * @param Bounce[] $Bounce
     * @return \ClangSdk\ArrayOfBounce
     */
    public function setBounce(array $Bounce = null)
    {
      $this->Bounce = $Bounce;
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
      return isset($this->Bounce[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Bounce
     */
    public function offsetGet($offset)
    {
      return $this->Bounce[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Bounce $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Bounce[] = $value;
      } else {
        $this->Bounce[$offset] = $value;
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
      unset($this->Bounce[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Bounce Return the current element
     */
    public function current()
    {
      return current($this->Bounce);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Bounce);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Bounce);
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
      reset($this->Bounce);
    }

    /**
     * Countable implementation
     *
     * @return Bounce Return count of elements
     */
    public function count()
    {
      return count($this->Bounce);
    }

}
