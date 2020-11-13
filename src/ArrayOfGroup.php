<?php

namespace ClangSdk;

class ArrayOfGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Group[] $Group
     */
    protected $Group = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Group[]
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param Group[] $Group
     * @return \ClangSdk\ArrayOfGroup
     */
    public function setGroup(array $Group = null)
    {
      $this->Group = $Group;
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
      return isset($this->Group[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Group
     */
    public function offsetGet($offset)
    {
      return $this->Group[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Group $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Group[] = $value;
      } else {
        $this->Group[$offset] = $value;
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
      unset($this->Group[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Group Return the current element
     */
    public function current()
    {
      return current($this->Group);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Group);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Group);
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
      reset($this->Group);
    }

    /**
     * Countable implementation
     *
     * @return Group Return count of elements
     */
    public function count()
    {
      return count($this->Group);
    }

}
