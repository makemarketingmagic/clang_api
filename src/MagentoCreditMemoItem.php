<?php

namespace ClangSdk;

class MagentoCreditMemoItem
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
     * @var string $externalProductId
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
     * @var float $price
     */
    protected $price = null;

    /**
     * @var float $priceInclTax
     */
    protected $priceInclTax = null;

    /**
     * @var string $weeeTaxApplied
     */
    protected $weeeTaxApplied = null;

    /**
     * @var float $weeeTaxAppliedAmount
     */
    protected $weeeTaxAppliedAmount = null;

    /**
     * @var float $weeeTaxAppliedRowAmount
     */
    protected $weeeTaxAppliedRowAmount = null;

    /**
     * @var string $weeeTaxDisposition
     */
    protected $weeeTaxDisposition = null;

    /**
     * @var string $weeeTaxRowDisposition
     */
    protected $weeeTaxRowDisposition = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var float $rowTotal
     */
    protected $rowTotal = null;

    /**
     * @var float $rowTotalInclTax
     */
    protected $rowTotalInclTax = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var float $hiddenTaxAmount
     */
    protected $hiddenTaxAmount = null;

    /**
     * @var int $backToStock
     */
    protected $backToStock = null;

    /**
     * @var string $createdAt
     */
    protected $createdAt = null;

    /**
     * @var string $updatedAt
     */
    protected $updatedAt = null;

    /**
     * @var float $basePrice
     */
    protected $basePrice = null;

    /**
     * @var float $baseCost
     */
    protected $baseCost = null;

    /**
     * @var float $basePriceInclTax
     */
    protected $basePriceInclTax = null;

    /**
     * @var float $baseWeeeTaxAppliedAmount
     */
    protected $baseWeeeTaxAppliedAmount = null;

    /**
     * @var float $baseWeeeTaxAppliedRowAmount
     */
    protected $baseWeeeTaxAppliedRowAmount = null;

    /**
     * @var float $baseWeeeTaxAppliedRowAmnt
     */
    protected $baseWeeeTaxAppliedRowAmnt = null;

    /**
     * @var string $baseWeeeTaxDisposition
     */
    protected $baseWeeeTaxDisposition = null;

    /**
     * @var string $baseWeeeTaxRowDisposition
     */
    protected $baseWeeeTaxRowDisposition = null;

    /**
     * @var float $baseRowTotal
     */
    protected $baseRowTotal = null;

    /**
     * @var float $baseRowTotalInclTax
     */
    protected $baseRowTotalInclTax = null;

    /**
     * @var float $baseTaxAmount
     */
    protected $baseTaxAmount = null;

    /**
     * @var float $baseHiddenTaxAmount
     */
    protected $baseHiddenTaxAmount = null;


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
     * @return \ClangSdk\MagentoCreditMemoItem
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
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalProductId()
    {
        return $this->externalProductId;
    }

    /**
     * @param string $externalProductId
     * @return \ClangSdk\MagentoCreditMemoItem
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
     * @return \ClangSdk\MagentoCreditMemoItem
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
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceInclTax()
    {
        return $this->priceInclTax;
    }

    /**
     * @param float $priceInclTax
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setPriceInclTax($priceInclTax)
    {
        $this->priceInclTax = $priceInclTax;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeeeTaxApplied()
    {
        return $this->weeeTaxApplied;
    }

    /**
     * @param string $weeeTaxApplied
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setWeeeTaxApplied($weeeTaxApplied)
    {
        $this->weeeTaxApplied = $weeeTaxApplied;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeeeTaxAppliedAmount()
    {
        return $this->weeeTaxAppliedAmount;
    }

    /**
     * @param float $weeeTaxAppliedAmount
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setWeeeTaxAppliedAmount($weeeTaxAppliedAmount)
    {
        $this->weeeTaxAppliedAmount = $weeeTaxAppliedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeeeTaxAppliedRowAmount()
    {
        return $this->weeeTaxAppliedRowAmount;
    }

    /**
     * @param float $weeeTaxAppliedRowAmount
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setWeeeTaxAppliedRowAmount($weeeTaxAppliedRowAmount)
    {
        $this->weeeTaxAppliedRowAmount = $weeeTaxAppliedRowAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeeeTaxDisposition()
    {
        return $this->weeeTaxDisposition;
    }

    /**
     * @param string $weeeTaxDisposition
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setWeeeTaxDisposition($weeeTaxDisposition)
    {
        $this->weeeTaxDisposition = $weeeTaxDisposition;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeeeTaxRowDisposition()
    {
        return $this->weeeTaxRowDisposition;
    }

    /**
     * @param string $weeeTaxRowDisposition
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setWeeeTaxRowDisposition($weeeTaxRowDisposition)
    {
        $this->weeeTaxRowDisposition = $weeeTaxRowDisposition;
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
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getRowTotal()
    {
        return $this->rowTotal;
    }

    /**
     * @param float $rowTotal
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setRowTotal($rowTotal)
    {
        $this->rowTotal = $rowTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalInclTax()
    {
        return $this->rowTotalInclTax;
    }

    /**
     * @param float $rowTotalInclTax
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setRowTotalInclTax($rowTotalInclTax)
    {
        $this->rowTotalInclTax = $rowTotalInclTax;
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
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getHiddenTaxAmount()
    {
        return $this->hiddenTaxAmount;
    }

    /**
     * @param float $hiddenTaxAmount
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setHiddenTaxAmount($hiddenTaxAmount)
    {
        $this->hiddenTaxAmount = $hiddenTaxAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackToStock()
    {
        return $this->backToStock;
    }

    /**
     * @param int $backToStock
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBackToStock($backToStock)
    {
        $this->backToStock = $backToStock;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * @param float $basePrice
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseCost()
    {
        return $this->baseCost;
    }

    /**
     * @param float $baseCost
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseCost($baseCost)
    {
        $this->baseCost = $baseCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasePriceInclTax()
    {
        return $this->basePriceInclTax;
    }

    /**
     * @param float $basePriceInclTax
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBasePriceInclTax($basePriceInclTax)
    {
        $this->basePriceInclTax = $basePriceInclTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxAppliedAmount()
    {
        return $this->baseWeeeTaxAppliedAmount;
    }

    /**
     * @param float $baseWeeeTaxAppliedAmount
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseWeeeTaxAppliedAmount($baseWeeeTaxAppliedAmount)
    {
        $this->baseWeeeTaxAppliedAmount = $baseWeeeTaxAppliedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxAppliedRowAmount()
    {
        return $this->baseWeeeTaxAppliedRowAmount;
    }

    /**
     * @param float $baseWeeeTaxAppliedRowAmount
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseWeeeTaxAppliedRowAmount($baseWeeeTaxAppliedRowAmount)
    {
        $this->baseWeeeTaxAppliedRowAmount = $baseWeeeTaxAppliedRowAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxAppliedRowAmnt()
    {
        return $this->baseWeeeTaxAppliedRowAmnt;
    }

    /**
     * @param float $baseWeeeTaxAppliedRowAmnt
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseWeeeTaxAppliedRowAmnt($baseWeeeTaxAppliedRowAmnt)
    {
        $this->baseWeeeTaxAppliedRowAmnt = $baseWeeeTaxAppliedRowAmnt;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseWeeeTaxDisposition()
    {
        return $this->baseWeeeTaxDisposition;
    }

    /**
     * @param string $baseWeeeTaxDisposition
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseWeeeTaxDisposition($baseWeeeTaxDisposition)
    {
        $this->baseWeeeTaxDisposition = $baseWeeeTaxDisposition;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseWeeeTaxRowDisposition()
    {
        return $this->baseWeeeTaxRowDisposition;
    }

    /**
     * @param string $baseWeeeTaxRowDisposition
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseWeeeTaxRowDisposition($baseWeeeTaxRowDisposition)
    {
        $this->baseWeeeTaxRowDisposition = $baseWeeeTaxRowDisposition;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseRowTotal()
    {
        return $this->baseRowTotal;
    }

    /**
     * @param float $baseRowTotal
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseRowTotal($baseRowTotal)
    {
        $this->baseRowTotal = $baseRowTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseRowTotalInclTax()
    {
        return $this->baseRowTotalInclTax;
    }

    /**
     * @param float $baseRowTotalInclTax
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseRowTotalInclTax($baseRowTotalInclTax)
    {
        $this->baseRowTotalInclTax = $baseRowTotalInclTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseTaxAmount()
    {
        return $this->baseTaxAmount;
    }

    /**
     * @param float $baseTaxAmount
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseTaxAmount($baseTaxAmount)
    {
        $this->baseTaxAmount = $baseTaxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseHiddenTaxAmount()
    {
        return $this->baseHiddenTaxAmount;
    }

    /**
     * @param float $baseHiddenTaxAmount
     * @return \ClangSdk\MagentoCreditMemoItem
     */
    public function setBaseHiddenTaxAmount($baseHiddenTaxAmount)
    {
        $this->baseHiddenTaxAmount = $baseHiddenTaxAmount;
        return $this;
    }

}
