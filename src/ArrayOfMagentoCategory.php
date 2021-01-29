<?php

namespace ClangSdk;

class ArrayOfMagentoCategory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MagentoCategory[] $MagentoCategory
     */
    protected $MagentoCategory = null;


    public function __construct()
    {

    }

    /**
     * @return MagentoCategory[]
     */
    public function getMagentoCategory()
    {
        return $this->MagentoCategory;
    }

    /**
     * @param MagentoCategory[] $MagentoCategory
     * @return \ClangSdk\ArrayOfMagentoCategory
     */
    public function setMagentoCategory(array $MagentoCategory = null)
    {
        $this->MagentoCategory = $MagentoCategory;
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
        return isset($this->MagentoCategory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MagentoCategory
     */
    public function offsetGet($offset)
    {
        return $this->MagentoCategory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MagentoCategory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->MagentoCategory[] = $value;
        } else {
            $this->MagentoCategory[$offset] = $value;
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
        unset($this->MagentoCategory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MagentoCategory Return the current element
     */
    public function current()
    {
        return current($this->MagentoCategory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MagentoCategory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MagentoCategory);
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
        reset($this->MagentoCategory);
    }

    /**
     * Countable implementation
     *
     * @return MagentoCategory Return count of elements
     */
    public function count()
    {
        return count($this->MagentoCategory);
    }

}
