<?php

namespace ClangSdk;

class language
{

    /**
     * @var language $_
     */
    protected $_ = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var anyURI $href
     */
    protected $href = null;

    /**
     * @param language $_
     * @param ID $id
     * @param anyURI $href
     */
    public function __construct($_, $id, $href)
    {
        $this->_ = $_;
        $this->id = $id;
        $this->href = $href;
    }

    /**
     * @return language
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param language $_
     * @return \ClangSdk\language
     */
    public function set_($_)
    {
        $this->_ = $_;
        return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ID $id
     * @return \ClangSdk\language
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return anyURI
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param anyURI $href
     * @return \ClangSdk\language
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

}
