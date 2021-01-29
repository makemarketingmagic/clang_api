<?php

namespace ClangSdk;

class MagentoAbandonedOrder
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $quoteId
     */
    protected $quoteId = null;

    /**
     * @var string $storeview
     */
    protected $storeview = null;

    /**
     * @var int $storeviewId
     */
    protected $storeviewId = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var float $subtotal
     */
    protected $subtotal = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var float $discount
     */
    protected $discount = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var int $createDate
     */
    protected $createDate = null;

    /**
     * @var ArrayOfMagentoProduct $products
     */
    protected $products = null;


    public function __construct()
    {

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
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuoteId()
    {
        return $this->quoteId;
    }

    /**
     * @param int $quoteId
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setQuoteId($quoteId)
    {
        $this->quoteId = $quoteId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreview()
    {
        return $this->storeview;
    }

    /**
     * @param string $storeview
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setStoreview($storeview)
    {
        $this->storeview = $storeview;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreviewId()
    {
        return $this->storeviewId;
    }

    /**
     * @param int $storeviewId
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setStoreviewId($storeviewId)
    {
        $this->storeviewId = $storeviewId;
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
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param float $subtotal
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setTotal($total)
    {
        $this->total = $total;
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
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
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
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param int $createDate
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * @return ArrayOfMagentoProduct
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ArrayOfMagentoProduct $products
     * @return \ClangSdk\MagentoAbandonedOrder
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }

}
