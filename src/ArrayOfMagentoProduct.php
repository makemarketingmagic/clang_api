<?php

namespace ClangSdk;

class ArrayOfMagentoProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MagentoProduct[] $MagentoProduct
     */
    protected $MagentoProduct = null;


    public function __construct()
    {

    }

    /**
     * @return MagentoProduct[]
     */
    public function getMagentoProduct()
    {
        return $this->MagentoProduct;
    }

    /**
     * @param MagentoProduct[] $MagentoProduct
     * @return \ClangSdk\ArrayOfMagentoProduct
     */
    public function setMagentoProduct(array $MagentoProduct = null)
    {
        $this->MagentoProduct = $MagentoProduct;
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
        return isset($this->MagentoProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MagentoProduct
     */
    public function offsetGet($offset)
    {
        return $this->MagentoProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MagentoProduct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->MagentoProduct[] = $value;
        } else {
            $this->MagentoProduct[$offset] = $value;
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
        unset($this->MagentoProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MagentoProduct Return the current element
     */
    public function current()
    {
        return current($this->MagentoProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MagentoProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MagentoProduct);
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
        reset($this->MagentoProduct);
    }

    /**
     * Countable implementation
     *
     * @return MagentoProduct Return count of elements
     */
    public function count()
    {
        return count($this->MagentoProduct);
    }

}
