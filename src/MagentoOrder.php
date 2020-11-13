<?php

namespace ClangSdk;

class MagentoOrder
{

    /**
     * @var string $quoteId
     */
    protected $quoteId = null;

    /**
     * @var float $subtotalInclTax
     */
    protected $subtotalInclTax = null;

    /**
     * @var string $couponCode
     */
    protected $couponCode = null;

    /**
     * @var int $totalQtyOrdered
     */
    protected $totalQtyOrdered = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var string $taxString
     */
    protected $taxString = null;

    /**
     * @var float $shippingInclTax
     */
    protected $shippingInclTax = null;

    /**
     * @var string $discountDescription
     */
    protected $discountDescription = null;

    /**
     * @var float $shippingDiscountAmount
     */
    protected $shippingDiscountAmount = null;

    /**
     * @var int $totalItemCount
     */
    protected $totalItemCount = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $externalOrderId
     */
    protected $externalOrderId = null;

    /**
     * @var string $note
     */
    protected $note = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $storeview
     */
    protected $storeview = null;

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
     * @var float $shippingCost
     */
    protected $shippingCost = null;

    /**
     * @var float $discount
     */
    protected $discount = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var int $rewardPoints
     */
    protected $rewardPoints = null;

    /**
     * @var string $billingFirstname
     */
    protected $billingFirstname = null;

    /**
     * @var string $billingMiddlename
     */
    protected $billingMiddlename = null;

    /**
     * @var string $billingTitle
     */
    protected $billingTitle = null;

    /**
     * @var string $billingLastname
     */
    protected $billingLastname = null;

    /**
     * @var string $billingAddress
     */
    protected $billingAddress = null;

    /**
     * @var string $billingZipCode
     */
    protected $billingZipCode = null;

    /**
     * @var int $billingPoBox
     */
    protected $billingPoBox = null;

    /**
     * @var string $billingCity
     */
    protected $billingCity = null;

    /**
     * @var string $billingState
     */
    protected $billingState = null;

    /**
     * @var string $billingCountry
     */
    protected $billingCountry = null;

    /**
     * @var string $billingCompanyName
     */
    protected $billingCompanyName = null;

    /**
     * @var string $billingPhone
     */
    protected $billingPhone = null;

    /**
     * @var string $billingEmailAddress
     */
    protected $billingEmailAddress = null;

    /**
     * @var string $shippingFirstname
     */
    protected $shippingFirstname = null;

    /**
     * @var string $shippingMiddlename
     */
    protected $shippingMiddlename = null;

    /**
     * @var string $shippingTitle
     */
    protected $shippingTitle = null;

    /**
     * @var string $shippingLastname
     */
    protected $shippingLastname = null;

    /**
     * @var string $shippingAddress
     */
    protected $shippingAddress = null;

    /**
     * @var string $shippingZipCode
     */
    protected $shippingZipCode = null;

    /**
     * @var int $shippingPoBox
     */
    protected $shippingPoBox = null;

    /**
     * @var string $shippingCity
     */
    protected $shippingCity = null;

    /**
     * @var string $shippingState
     */
    protected $shippingState = null;

    /**
     * @var string $shippingCountry
     */
    protected $shippingCountry = null;

    /**
     * @var string $shippingCompanyName
     */
    protected $shippingCompanyName = null;

    /**
     * @var string $shippingPhone
     */
    protected $shippingPhone = null;

    /**
     * @var string $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var string $shippingMethod
     */
    protected $shippingMethod = null;

    /**
     * @var int $orderDate
     */
    protected $orderDate = null;

    /**
     * @var ArrayOfMagentoProduct $products
     */
    protected $products = null;

    /**
     * @var string $billingPrefix
     */
    protected $billingPrefix = null;

    /**
     * @var string $billingSuffix
     */
    protected $billingSuffix = null;

    /**
     * @var string $shippingPrefix
     */
    protected $shippingPrefix = null;

    /**
     * @var string $shippingSuffix
     */
    protected $shippingSuffix = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getQuoteId()
    {
      return $this->quoteId;
    }

    /**
     * @param string $quoteId
     * @return \ClangSdk\MagentoOrder
     */
    public function setQuoteId($quoteId)
    {
      $this->quoteId = $quoteId;
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setSubtotalInclTax($subtotalInclTax)
    {
      $this->subtotalInclTax = $subtotalInclTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getCouponCode()
    {
      return $this->couponCode;
    }

    /**
     * @param string $couponCode
     * @return \ClangSdk\MagentoOrder
     */
    public function setCouponCode($couponCode)
    {
      $this->couponCode = $couponCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalQtyOrdered()
    {
      return $this->totalQtyOrdered;
    }

    /**
     * @param int $totalQtyOrdered
     * @return \ClangSdk\MagentoOrder
     */
    public function setTotalQtyOrdered($totalQtyOrdered)
    {
      $this->totalQtyOrdered = $totalQtyOrdered;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return \ClangSdk\MagentoOrder
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxString()
    {
      return $this->taxString;
    }

    /**
     * @param string $taxString
     * @return \ClangSdk\MagentoOrder
     */
    public function setTaxString($taxString)
    {
      $this->taxString = $taxString;
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingInclTax($shippingInclTax)
    {
      $this->shippingInclTax = $shippingInclTax;
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setDiscountDescription($discountDescription)
    {
      $this->discountDescription = $discountDescription;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingDiscountAmount()
    {
      return $this->shippingDiscountAmount;
    }

    /**
     * @param float $shippingDiscountAmount
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingDiscountAmount($shippingDiscountAmount)
    {
      $this->shippingDiscountAmount = $shippingDiscountAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalItemCount()
    {
      return $this->totalItemCount;
    }

    /**
     * @param int $totalItemCount
     * @return \ClangSdk\MagentoOrder
     */
    public function setTotalItemCount($totalItemCount)
    {
      $this->totalItemCount = $totalItemCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \ClangSdk\MagentoOrder
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setExternalOrderId($externalOrderId)
    {
      $this->externalOrderId = $externalOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param string $note
     * @return \ClangSdk\MagentoOrder
     */
    public function setNote($note)
    {
      $this->note = $note;
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setStoreview($storeview)
    {
      $this->storeview = $storeview;
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
     * @return \ClangSdk\MagentoOrder
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
     * @return \ClangSdk\MagentoOrder
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
     * @return \ClangSdk\MagentoOrder
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost()
    {
      return $this->shippingCost;
    }

    /**
     * @param float $shippingCost
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingCost($shippingCost)
    {
      $this->shippingCost = $shippingCost;
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
     * @return \ClangSdk\MagentoOrder
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return int
     */
    public function getRewardPoints()
    {
      return $this->rewardPoints;
    }

    /**
     * @param int $rewardPoints
     * @return \ClangSdk\MagentoOrder
     */
    public function setRewardPoints($rewardPoints)
    {
      $this->rewardPoints = $rewardPoints;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingFirstname()
    {
      return $this->billingFirstname;
    }

    /**
     * @param string $billingFirstname
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingFirstname($billingFirstname)
    {
      $this->billingFirstname = $billingFirstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingMiddlename()
    {
      return $this->billingMiddlename;
    }

    /**
     * @param string $billingMiddlename
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingMiddlename($billingMiddlename)
    {
      $this->billingMiddlename = $billingMiddlename;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingTitle()
    {
      return $this->billingTitle;
    }

    /**
     * @param string $billingTitle
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingTitle($billingTitle)
    {
      $this->billingTitle = $billingTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingLastname()
    {
      return $this->billingLastname;
    }

    /**
     * @param string $billingLastname
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingLastname($billingLastname)
    {
      $this->billingLastname = $billingLastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddress()
    {
      return $this->billingAddress;
    }

    /**
     * @param string $billingAddress
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingAddress($billingAddress)
    {
      $this->billingAddress = $billingAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingZipCode()
    {
      return $this->billingZipCode;
    }

    /**
     * @param string $billingZipCode
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingZipCode($billingZipCode)
    {
      $this->billingZipCode = $billingZipCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingPoBox()
    {
      return $this->billingPoBox;
    }

    /**
     * @param int $billingPoBox
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingPoBox($billingPoBox)
    {
      $this->billingPoBox = $billingPoBox;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCity()
    {
      return $this->billingCity;
    }

    /**
     * @param string $billingCity
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingCity($billingCity)
    {
      $this->billingCity = $billingCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingState()
    {
      return $this->billingState;
    }

    /**
     * @param string $billingState
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingState($billingState)
    {
      $this->billingState = $billingState;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCountry()
    {
      return $this->billingCountry;
    }

    /**
     * @param string $billingCountry
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingCountry($billingCountry)
    {
      $this->billingCountry = $billingCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCompanyName()
    {
      return $this->billingCompanyName;
    }

    /**
     * @param string $billingCompanyName
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingCompanyName($billingCompanyName)
    {
      $this->billingCompanyName = $billingCompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingPhone()
    {
      return $this->billingPhone;
    }

    /**
     * @param string $billingPhone
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingPhone($billingPhone)
    {
      $this->billingPhone = $billingPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingEmailAddress()
    {
      return $this->billingEmailAddress;
    }

    /**
     * @param string $billingEmailAddress
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingEmailAddress($billingEmailAddress)
    {
      $this->billingEmailAddress = $billingEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingFirstname()
    {
      return $this->shippingFirstname;
    }

    /**
     * @param string $shippingFirstname
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingFirstname($shippingFirstname)
    {
      $this->shippingFirstname = $shippingFirstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingMiddlename()
    {
      return $this->shippingMiddlename;
    }

    /**
     * @param string $shippingMiddlename
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingMiddlename($shippingMiddlename)
    {
      $this->shippingMiddlename = $shippingMiddlename;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingTitle()
    {
      return $this->shippingTitle;
    }

    /**
     * @param string $shippingTitle
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingTitle($shippingTitle)
    {
      $this->shippingTitle = $shippingTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingLastname()
    {
      return $this->shippingLastname;
    }

    /**
     * @param string $shippingLastname
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingLastname($shippingLastname)
    {
      $this->shippingLastname = $shippingLastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingAddress()
    {
      return $this->shippingAddress;
    }

    /**
     * @param string $shippingAddress
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingAddress($shippingAddress)
    {
      $this->shippingAddress = $shippingAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingZipCode()
    {
      return $this->shippingZipCode;
    }

    /**
     * @param string $shippingZipCode
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingZipCode($shippingZipCode)
    {
      $this->shippingZipCode = $shippingZipCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingPoBox()
    {
      return $this->shippingPoBox;
    }

    /**
     * @param int $shippingPoBox
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingPoBox($shippingPoBox)
    {
      $this->shippingPoBox = $shippingPoBox;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCity()
    {
      return $this->shippingCity;
    }

    /**
     * @param string $shippingCity
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingCity($shippingCity)
    {
      $this->shippingCity = $shippingCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingState()
    {
      return $this->shippingState;
    }

    /**
     * @param string $shippingState
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingState($shippingState)
    {
      $this->shippingState = $shippingState;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCountry()
    {
      return $this->shippingCountry;
    }

    /**
     * @param string $shippingCountry
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingCountry($shippingCountry)
    {
      $this->shippingCountry = $shippingCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCompanyName()
    {
      return $this->shippingCompanyName;
    }

    /**
     * @param string $shippingCompanyName
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingCompanyName($shippingCompanyName)
    {
      $this->shippingCompanyName = $shippingCompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingPhone()
    {
      return $this->shippingPhone;
    }

    /**
     * @param string $shippingPhone
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingPhone($shippingPhone)
    {
      $this->shippingPhone = $shippingPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return \ClangSdk\MagentoOrder
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
      return $this->shippingMethod;
    }

    /**
     * @param string $shippingMethod
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingMethod($shippingMethod)
    {
      $this->shippingMethod = $shippingMethod;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderDate()
    {
      return $this->orderDate;
    }

    /**
     * @param int $orderDate
     * @return \ClangSdk\MagentoOrder
     */
    public function setOrderDate($orderDate)
    {
      $this->orderDate = $orderDate;
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
     * @return \ClangSdk\MagentoOrder
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingPrefix()
    {
      return $this->billingPrefix;
    }

    /**
     * @param string $billingPrefix
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingPrefix($billingPrefix)
    {
      $this->billingPrefix = $billingPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingSuffix()
    {
      return $this->billingSuffix;
    }

    /**
     * @param string $billingSuffix
     * @return \ClangSdk\MagentoOrder
     */
    public function setBillingSuffix($billingSuffix)
    {
      $this->billingSuffix = $billingSuffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingPrefix()
    {
      return $this->shippingPrefix;
    }

    /**
     * @param string $shippingPrefix
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingPrefix($shippingPrefix)
    {
      $this->shippingPrefix = $shippingPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingSuffix()
    {
      return $this->shippingSuffix;
    }

    /**
     * @param string $shippingSuffix
     * @return \ClangSdk\MagentoOrder
     */
    public function setShippingSuffix($shippingSuffix)
    {
      $this->shippingSuffix = $shippingSuffix;
      return $this;
    }

}
