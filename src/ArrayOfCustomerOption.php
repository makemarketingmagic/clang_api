<?php

namespace ClangSdk;

class ArrayOfCustomerOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomerOption[] $CustomerOption
     */
    protected $CustomerOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerOption[]
     */
    public function getCustomerOption()
    {
      return $this->CustomerOption;
    }

    /**
     * @param CustomerOption[] $CustomerOption
     * @return \ClangSdk\ArrayOfCustomerOption
     */
    public function setCustomerOption(array $CustomerOption = null)
    {
      $this->CustomerOption = $CustomerOption;
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
      return isset($this->CustomerOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomerOption
     */
    public function offsetGet($offset)
    {
      return $this->CustomerOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomerOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomerOption[] = $value;
      } else {
        $this->CustomerOption[$offset] = $value;
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
      unset($this->CustomerOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomerOption Return the current element
     */
    public function current()
    {
      return current($this->CustomerOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomerOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomerOption);
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
      reset($this->CustomerOption);
    }

    /**
     * Countable implementation
     *
     * @return CustomerOption Return count of elements
     */
    public function count()
    {
      return count($this->CustomerOption);
    }

}
