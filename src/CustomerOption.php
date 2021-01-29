<?php

namespace ClangSdk;

class CustomerOption
{

    /**
     * @var string $identifier
     */
    protected $identifier = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $value
     */
    protected $value = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return \ClangSdk\CustomerOption
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return \ClangSdk\CustomerOption
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \ClangSdk\CustomerOption
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return \ClangSdk\CustomerOption
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}
