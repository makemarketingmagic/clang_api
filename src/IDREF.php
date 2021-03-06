<?php

namespace ClangSdk;

class IDREF
{

    /**
     * @var IDREF $_
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
     * @param IDREF $_
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
     * @return IDREF
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param IDREF $_
     * @return \ClangSdk\IDREF
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
     * @return \ClangSdk\IDREF
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
     * @return \ClangSdk\IDREF
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

}
