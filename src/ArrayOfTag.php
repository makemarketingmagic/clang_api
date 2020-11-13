<?php

namespace ClangSdk;

class ArrayOfTag implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Tag[] $Tag
     */
    protected $Tag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Tag[]
     */
    public function getTag()
    {
      return $this->Tag;
    }

    /**
     * @param Tag[] $Tag
     * @return \ClangSdk\ArrayOfTag
     */
    public function setTag(array $Tag = null)
    {
      $this->Tag = $Tag;
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
      return isset($this->Tag[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Tag
     */
    public function offsetGet($offset)
    {
      return $this->Tag[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Tag $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Tag[] = $value;
      } else {
        $this->Tag[$offset] = $value;
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
      unset($this->Tag[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Tag Return the current element
     */
    public function current()
    {
      return current($this->Tag);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Tag);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Tag);
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
      reset($this->Tag);
    }

    /**
     * Countable implementation
     *
     * @return Tag Return count of elements
     */
    public function count()
    {
      return count($this->Tag);
    }

}
