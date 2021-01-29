<?php

namespace ClangSdk;

class ArrayOfAccount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Account[] $Account
     */
    protected $Account = null;


    public function __construct()
    {

    }

    /**
     * @return Account[]
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param Account[] $Account
     * @return \ClangSdk\ArrayOfAccount
     */
    public function setAccount(array $Account = null)
    {
        $this->Account = $Account;
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
        return isset($this->Account[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Account
     */
    public function offsetGet($offset)
    {
        return $this->Account[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Account $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Account[] = $value;
        } else {
            $this->Account[$offset] = $value;
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
        unset($this->Account[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Account Return the current element
     */
    public function current()
    {
        return current($this->Account);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Account);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Account);
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
        reset($this->Account);
    }

    /**
     * Countable implementation
     *
     * @return Account Return count of elements
     */
    public function count()
    {
        return count($this->Account);
    }

}
