<?php

namespace ClangSdk;

class ArrayOfSmsBlockContainer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SmsBlockContainer[] $SmsBlockContainer
     */
    protected $SmsBlockContainer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SmsBlockContainer[]
     */
    public function getSmsBlockContainer()
    {
      return $this->SmsBlockContainer;
    }

    /**
     * @param SmsBlockContainer[] $SmsBlockContainer
     * @return \ClangSdk\ArrayOfSmsBlockContainer
     */
    public function setSmsBlockContainer(array $SmsBlockContainer = null)
    {
      $this->SmsBlockContainer = $SmsBlockContainer;
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
      return isset($this->SmsBlockContainer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SmsBlockContainer
     */
    public function offsetGet($offset)
    {
      return $this->SmsBlockContainer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SmsBlockContainer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SmsBlockContainer[] = $value;
      } else {
        $this->SmsBlockContainer[$offset] = $value;
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
      unset($this->SmsBlockContainer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SmsBlockContainer Return the current element
     */
    public function current()
    {
      return current($this->SmsBlockContainer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SmsBlockContainer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SmsBlockContainer);
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
      reset($this->SmsBlockContainer);
    }

    /**
     * Countable implementation
     *
     * @return SmsBlockContainer Return count of elements
     */
    public function count()
    {
      return count($this->SmsBlockContainer);
    }

}
