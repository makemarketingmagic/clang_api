<?php

namespace ClangSdk;

class MethodOptions
{

    /**
     * @var string $method
     */
    protected $method = null;

    /**
     * @var ArrayOfOption $options
     */
    protected $options = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return \ClangSdk\MethodOptions
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param ArrayOfOption $options
     * @return \ClangSdk\MethodOptions
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

}
