<?php

namespace ClangSdk;

class ArrayOfDelivery implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Delivery[] $Delivery
     */
    protected $Delivery = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Delivery[]
     */
    public function getDelivery()
    {
      return $this->Delivery;
    }

    /**
     * @param Delivery[] $Delivery
     * @return \ClangSdk\ArrayOfDelivery
     */
    public function setDelivery(array $Delivery = null)
    {
      $this->Delivery = $Delivery;
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
      return isset($this->Delivery[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Delivery
     */
    public function offsetGet($offset)
    {
      return $this->Delivery[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Delivery $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Delivery[] = $value;
      } else {
        $this->Delivery[$offset] = $value;
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
      unset($this->Delivery[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Delivery Return the current element
     */
    public function current()
    {
      return current($this->Delivery);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Delivery);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Delivery);
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
      reset($this->Delivery);
    }

    /**
     * Countable implementation
     *
     * @return Delivery Return count of elements
     */
    public function count()
    {
      return count($this->Delivery);
    }

}
