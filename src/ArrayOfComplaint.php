<?php

namespace ClangSdk;

class ArrayOfComplaint implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Complaint[] $Complaint
     */
    protected $Complaint = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Complaint[]
     */
    public function getComplaint()
    {
      return $this->Complaint;
    }

    /**
     * @param Complaint[] $Complaint
     * @return \ClangSdk\ArrayOfComplaint
     */
    public function setComplaint(array $Complaint = null)
    {
      $this->Complaint = $Complaint;
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
      return isset($this->Complaint[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Complaint
     */
    public function offsetGet($offset)
    {
      return $this->Complaint[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Complaint $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Complaint[] = $value;
      } else {
        $this->Complaint[$offset] = $value;
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
      unset($this->Complaint[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Complaint Return the current element
     */
    public function current()
    {
      return current($this->Complaint);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Complaint);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Complaint);
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
      reset($this->Complaint);
    }

    /**
     * Countable implementation
     *
     * @return Complaint Return count of elements
     */
    public function count()
    {
      return count($this->Complaint);
    }

}
