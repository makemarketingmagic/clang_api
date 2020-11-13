<?php

namespace ClangSdk;

class MagentoProduct
{

    /**
     * @var int $storeId
     */
    protected $storeId = null;

    /**
     * @var int $orderItemId
     */
    protected $orderItemId = null;

    /**
     * @var ArrayOfOption $attributes
     */
    protected $attributes = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $externalProductId
     */
    protected $externalProductId = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $image
     */
    protected $image = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var float $priceEx
     */
    protected $priceEx = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var float $discount
     */
    protected $discount = null;

    /**
     * @var ArrayOfMagentoCategory $categories
     */
    protected $categories = null;

    /**
     * @var ArrayOfInt $related
     */
    protected $related = null;

    /**
     * @var ArrayOfInt $upSell
     */
    protected $upSell = null;

    /**
     * @var ArrayOfInt $crossSell
     */
    protected $crossSell = null;

    /**
     * @var float $taxPercent
     */
    protected $taxPercent = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
      return $this->storeId;
    }

    /**
     * @param int $storeId
     * @return \ClangSdk\MagentoProduct
     */
    public function setStoreId($storeId)
    {
      $this->storeId = $storeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderItemId()
    {
      return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     * @return \ClangSdk\MagentoProduct
     */
    public function setOrderItemId($orderItemId)
    {
      $this->orderItemId = $orderItemId;
      return $this;
    }

    /**
     * @return ArrayOfOption
     */
    public function getAttributes()
    {
      return $this->attributes;
    }

    /**
     * @param ArrayOfOption $attributes
     * @return \ClangSdk\MagentoProduct
     */
    public function setAttributes($attributes)
    {
      $this->attributes = $attributes;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \ClangSdk\MagentoProduct
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalProductId()
    {
      return $this->externalProductId;
    }

    /**
     * @param int $externalProductId
     * @return \ClangSdk\MagentoProduct
     */
    public function setExternalProductId($externalProductId)
    {
      $this->externalProductId = $externalProductId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
      return $this->sku;
    }

    /**
     * @param string $sku
     * @return \ClangSdk\MagentoProduct
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
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
     * @return \ClangSdk\MagentoProduct
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \ClangSdk\MagentoProduct
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \ClangSdk\MagentoProduct
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
      return $this->image;
    }

    /**
     * @param string $image
     * @return \ClangSdk\MagentoProduct
     */
    public function setImage($image)
    {
      $this->image = $image;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \ClangSdk\MagentoProduct
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \ClangSdk\MagentoProduct
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceEx()
    {
      return $this->priceEx;
    }

    /**
     * @param float $priceEx
     * @return \ClangSdk\MagentoProduct
     */
    public function setPriceEx($priceEx)
    {
      $this->priceEx = $priceEx;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \ClangSdk\MagentoProduct
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param float $discount
     * @return \ClangSdk\MagentoProduct
     */
    public function setDiscount($discount)
    {
      $this->discount = $discount;
      return $this;
    }

    /**
     * @return ArrayOfMagentoCategory
     */
    public function getCategories()
    {
      return $this->categories;
    }

    /**
     * @param ArrayOfMagentoCategory $categories
     * @return \ClangSdk\MagentoProduct
     */
    public function setCategories($categories)
    {
      $this->categories = $categories;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRelated()
    {
      return $this->related;
    }

    /**
     * @param ArrayOfInt $related
     * @return \ClangSdk\MagentoProduct
     */
    public function setRelated($related)
    {
      $this->related = $related;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getUpSell()
    {
      return $this->upSell;
    }

    /**
     * @param ArrayOfInt $upSell
     * @return \ClangSdk\MagentoProduct
     */
    public function setUpSell($upSell)
    {
      $this->upSell = $upSell;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCrossSell()
    {
      return $this->crossSell;
    }

    /**
     * @param ArrayOfInt $crossSell
     * @return \ClangSdk\MagentoProduct
     */
    public function setCrossSell($crossSell)
    {
      $this->crossSell = $crossSell;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxPercent()
    {
      return $this->taxPercent;
    }

    /**
     * @param float $taxPercent
     * @return \ClangSdk\MagentoProduct
     */
    public function setTaxPercent($taxPercent)
    {
      $this->taxPercent = $taxPercent;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param float $taxAmount
     * @return \ClangSdk\MagentoProduct
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

}
