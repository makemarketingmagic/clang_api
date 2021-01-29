<?php

namespace ClangSdk;

class MagentoCreditMemo
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $externalOrderId
     */
    protected $externalOrderId = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var string $globalCurrencyCode
     */
    protected $globalCurrencyCode = null;

    /**
     * @var string $storeCurrencyCode
     */
    protected $storeCurrencyCode = null;

    /**
     * @var string $orderCurrencyCode
     */
    protected $orderCurrencyCode = null;

    /**
     * @var float $storeToBaseRate
     */
    protected $storeToBaseRate = null;

    /**
     * @var float $storeToOrderRate
     */
    protected $storeToOrderRate = null;

    /**
     * @var string $discountDescription
     */
    protected $discountDescription = null;

    /**
     * @var float $shippingTaxAmount
     */
    protected $shippingTaxAmount = null;

    /**
     * @var int $totalQuantity
     */
    protected $totalQuantity = null;

    /**
     * @var string $adjustmentPositive
     */
    protected $adjustmentPositive = null;

    /**
     * @var string $adjustmentNegative
     */
    protected $adjustmentNegative = null;

    /**
     * @var float $subtotal
     */
    protected $subtotal = null;

    /**
     * @var float $subtotalInclTax
     */
    protected $subtotalInclTax = null;

    /**
     * @var float $grandTotal
     */
    protected $grandTotal = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var float $discountAmount
     */
    protected $discountAmount = null;

    /**
     * @var float $shippingAmount
     */
    protected $shippingAmount = null;

    /**
     * @var float $shippingInclTax
     */
    protected $shippingInclTax = null;

    /**
     * @var string $adjustment
     */
    protected $adjustment = null;

    /**
     * @var float $hiddenTaxAmount
     */
    protected $hiddenTaxAmount = null;

    /**
     * @var string $offlineRequested
     */
    protected $offlineRequested = null;

    /**
     * @var boolean $doTransaction
     */
    protected $doTransaction = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var int $incrementId
     */
    protected $incrementId = null;

    /**
     * @var string $createdAt
     */
    protected $createdAt = null;

    /**
     * @var string $updatedAt
     */
    protected $updatedAt = null;

    /**
     * @var string $baseCurrencyCode
     */
    protected $baseCurrencyCode = null;

    /**
     * @var float $baseToGlobalRate
     */
    protected $baseToGlobalRate = null;

    /**
     * @var float $baseToOrderRate
     */
    protected $baseToOrderRate = null;

    /**
     * @var float $baseShippingTaxAmount
     */
    protected $baseShippingTaxAmount = null;

    /**
     * @var float $baseShippingAmount
     */
    protected $baseShippingAmount = null;

    /**
     * @var float $baseAdjustmentPositive
     */
    protected $baseAdjustmentPositive = null;

    /**
     * @var float $baseAdjustmentNegative
     */
    protected $baseAdjustmentNegative = null;

    /**
     * @var float $baseSubtotal
     */
    protected $baseSubtotal = null;

    /**
     * @var float $baseSubtotalInclTax
     */
    protected $baseSubtotalInclTax = null;

    /**
     * @var float $baseGrandTotal
     */
    protected $baseGrandTotal = null;

    /**
     * @var float $baseTaxAmount
     */
    protected $baseTaxAmount = null;

    /**
     * @var float $baseDiscountAmount
     */
    protected $baseDiscountAmount = null;

    /**
     * @var float $baseShippingInclTax
     */
    protected $baseShippingInclTax = null;

    /**
     * @var float $baseCost
     */
    protected $baseCost = null;

    /**
     * @var float $baseAdjustment
     */
    protected $baseAdjustment = null;

    /**
     * @var float $baseHiddenTaxAmount
     */
    protected $baseHiddenTaxAmount = null;

    /**
     * @var ArrayOfMagentoCreditMemoItem $items
     */
    protected $items = null;


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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderId()
    {
        return $this->externalOrderId;
    }

    /**
     * @param string $externalOrderId
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setExternalOrderId($externalOrderId)
    {
        $this->externalOrderId = $externalOrderId;
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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGlobalCurrencyCode()
    {
        return $this->globalCurrencyCode;
    }

    /**
     * @param string $globalCurrencyCode
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setGlobalCurrencyCode($globalCurrencyCode)
    {
        $this->globalCurrencyCode = $globalCurrencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreCurrencyCode()
    {
        return $this->storeCurrencyCode;
    }

    /**
     * @param string $storeCurrencyCode
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setStoreCurrencyCode($storeCurrencyCode)
    {
        $this->storeCurrencyCode = $storeCurrencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderCurrencyCode()
    {
        return $this->orderCurrencyCode;
    }

    /**
     * @param string $orderCurrencyCode
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setOrderCurrencyCode($orderCurrencyCode)
    {
        $this->orderCurrencyCode = $orderCurrencyCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getStoreToBaseRate()
    {
        return $this->storeToBaseRate;
    }

    /**
     * @param float $storeToBaseRate
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setStoreToBaseRate($storeToBaseRate)
    {
        $this->storeToBaseRate = $storeToBaseRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getStoreToOrderRate()
    {
        return $this->storeToOrderRate;
    }

    /**
     * @param float $storeToOrderRate
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setStoreToOrderRate($storeToOrderRate)
    {
        $this->storeToOrderRate = $storeToOrderRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountDescription()
    {
        return $this->discountDescription;
    }

    /**
     * @param string $discountDescription
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setDiscountDescription($discountDescription)
    {
        $this->discountDescription = $discountDescription;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingTaxAmount()
    {
        return $this->shippingTaxAmount;
    }

    /**
     * @param float $shippingTaxAmount
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setShippingTaxAmount($shippingTaxAmount)
    {
        $this->shippingTaxAmount = $shippingTaxAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    /**
     * @param int $totalQuantity
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->totalQuantity = $totalQuantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentPositive()
    {
        return $this->adjustmentPositive;
    }

    /**
     * @param string $adjustmentPositive
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setAdjustmentPositive($adjustmentPositive)
    {
        $this->adjustmentPositive = $adjustmentPositive;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentNegative()
    {
        return $this->adjustmentNegative;
    }

    /**
     * @param string $adjustmentNegative
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setAdjustmentNegative($adjustmentNegative)
    {
        $this->adjustmentNegative = $adjustmentNegative;
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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubtotalInclTax()
    {
        return $this->subtotalInclTax;
    }

    /**
     * @param float $subtotalInclTax
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setSubtotalInclTax($subtotalInclTax)
    {
        $this->subtotalInclTax = $subtotalInclTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    /**
     * @param float $grandTotal
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setGrandTotal($grandTotal)
    {
        $this->grandTotal = $grandTotal;
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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @param float $discountAmount
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * @param float $shippingAmount
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingInclTax()
    {
        return $this->shippingInclTax;
    }

    /**
     * @param float $shippingInclTax
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setShippingInclTax($shippingInclTax)
    {
        $this->shippingInclTax = $shippingInclTax;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    /**
     * @param string $adjustment
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setAdjustment($adjustment)
    {
        $this->adjustment = $adjustment;
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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setHiddenTaxAmount($hiddenTaxAmount)
    {
        $this->hiddenTaxAmount = $hiddenTaxAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfflineRequested()
    {
        return $this->offlineRequested;
    }

    /**
     * @param string $offlineRequested
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setOfflineRequested($offlineRequested)
    {
        $this->offlineRequested = $offlineRequested;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDoTransaction()
    {
        return $this->doTransaction;
    }

    /**
     * @param boolean $doTransaction
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setDoTransaction($doTransaction)
    {
        $this->doTransaction = $doTransaction;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return int
     */
    public function getIncrementId()
    {
        return $this->incrementId;
    }

    /**
     * @param int $incrementId
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setIncrementId($incrementId)
    {
        $this->incrementId = $incrementId;
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
     * @return \ClangSdk\MagentoCreditMemo
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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->baseCurrencyCode;
    }

    /**
     * @param string $baseCurrencyCode
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseCurrencyCode($baseCurrencyCode)
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseToGlobalRate()
    {
        return $this->baseToGlobalRate;
    }

    /**
     * @param float $baseToGlobalRate
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseToGlobalRate($baseToGlobalRate)
    {
        $this->baseToGlobalRate = $baseToGlobalRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseToOrderRate()
    {
        return $this->baseToOrderRate;
    }

    /**
     * @param float $baseToOrderRate
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseToOrderRate($baseToOrderRate)
    {
        $this->baseToOrderRate = $baseToOrderRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseShippingTaxAmount()
    {
        return $this->baseShippingTaxAmount;
    }

    /**
     * @param float $baseShippingTaxAmount
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseShippingTaxAmount($baseShippingTaxAmount)
    {
        $this->baseShippingTaxAmount = $baseShippingTaxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseShippingAmount()
    {
        return $this->baseShippingAmount;
    }

    /**
     * @param float $baseShippingAmount
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseShippingAmount($baseShippingAmount)
    {
        $this->baseShippingAmount = $baseShippingAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAdjustmentPositive()
    {
        return $this->baseAdjustmentPositive;
    }

    /**
     * @param float $baseAdjustmentPositive
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseAdjustmentPositive($baseAdjustmentPositive)
    {
        $this->baseAdjustmentPositive = $baseAdjustmentPositive;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAdjustmentNegative()
    {
        return $this->baseAdjustmentNegative;
    }

    /**
     * @param float $baseAdjustmentNegative
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseAdjustmentNegative($baseAdjustmentNegative)
    {
        $this->baseAdjustmentNegative = $baseAdjustmentNegative;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseSubtotal()
    {
        return $this->baseSubtotal;
    }

    /**
     * @param float $baseSubtotal
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseSubtotal($baseSubtotal)
    {
        $this->baseSubtotal = $baseSubtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseSubtotalInclTax()
    {
        return $this->baseSubtotalInclTax;
    }

    /**
     * @param float $baseSubtotalInclTax
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseSubtotalInclTax($baseSubtotalInclTax)
    {
        $this->baseSubtotalInclTax = $baseSubtotalInclTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseGrandTotal()
    {
        return $this->baseGrandTotal;
    }

    /**
     * @param float $baseGrandTotal
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseGrandTotal($baseGrandTotal)
    {
        $this->baseGrandTotal = $baseGrandTotal;
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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseTaxAmount($baseTaxAmount)
    {
        $this->baseTaxAmount = $baseTaxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseDiscountAmount()
    {
        return $this->baseDiscountAmount;
    }

    /**
     * @param float $baseDiscountAmount
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseDiscountAmount($baseDiscountAmount)
    {
        $this->baseDiscountAmount = $baseDiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseShippingInclTax()
    {
        return $this->baseShippingInclTax;
    }

    /**
     * @param float $baseShippingInclTax
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseShippingInclTax($baseShippingInclTax)
    {
        $this->baseShippingInclTax = $baseShippingInclTax;
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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseCost($baseCost)
    {
        $this->baseCost = $baseCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAdjustment()
    {
        return $this->baseAdjustment;
    }

    /**
     * @param float $baseAdjustment
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseAdjustment($baseAdjustment)
    {
        $this->baseAdjustment = $baseAdjustment;
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
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setBaseHiddenTaxAmount($baseHiddenTaxAmount)
    {
        $this->baseHiddenTaxAmount = $baseHiddenTaxAmount;
        return $this;
    }

    /**
     * @return ArrayOfMagentoCreditMemoItem
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ArrayOfMagentoCreditMemoItem $items
     * @return \ClangSdk\MagentoCreditMemo
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

}
