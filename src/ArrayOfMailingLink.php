<?php

namespace ClangSdk;

class ArrayOfMailingLink implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MailingLink[] $MailingLink
     */
    protected $MailingLink = null;


    public function __construct()
    {

    }

    /**
     * @return MailingLink[]
     */
    public function getMailingLink()
    {
        return $this->MailingLink;
    }

    /**
     * @param MailingLink[] $MailingLink
     * @return \ClangSdk\ArrayOfMailingLink
     */
    public function setMailingLink(array $MailingLink = null)
    {
        $this->MailingLink = $MailingLink;
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
        return isset($this->MailingLink[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MailingLink
     */
    public function offsetGet($offset)
    {
        return $this->MailingLink[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MailingLink $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->MailingLink[] = $value;
        } else {
            $this->MailingLink[$offset] = $value;
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
        unset($this->MailingLink[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MailingLink Return the current element
     */
    public function current()
    {
        return current($this->MailingLink);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MailingLink);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MailingLink);
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
        reset($this->MailingLink);
    }

    /**
     * Countable implementation
     *
     * @return MailingLink Return count of elements
     */
    public function count()
    {
        return count($this->MailingLink);
    }

}
