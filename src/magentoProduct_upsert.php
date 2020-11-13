<?php

namespace ClangSdk;

class magentoProduct_upsert
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var MagentoProduct $product
     */
    protected $product = null;

    /**
     * @var boolean $abandoned
     */
    protected $abandoned = null;

    /**
     * @param string $uuid
     * @param MagentoProduct $product
     * @param boolean $abandoned
     */
    public function __construct($uuid, $product, $abandoned)
    {
      $this->uuid = $uuid;
      $this->product = $product;
      $this->abandoned = $abandoned;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
      return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return \ClangSdk\magentoProduct_upsert
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return MagentoProduct
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param MagentoProduct $product
     * @return \ClangSdk\magentoProduct_upsert
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAbandoned()
    {
      return $this->abandoned;
    }

    /**
     * @param boolean $abandoned
     * @return \ClangSdk\magentoProduct_upsert
     */
    public function setAbandoned($abandoned)
    {
      $this->abandoned = $abandoned;
      return $this;
    }

}
