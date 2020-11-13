<?php

namespace ClangSdk;

class MagentoShipment
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $externalShipmentId
     */
    protected $externalShipmentId = null;

    /**
     * @var string $externalOrderId
     */
    protected $externalOrderId = null;

    /**
     * @var string $storeview
     */
    protected $storeview = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var string $billingFirstname
     */
    protected $billingFirstname = null;

    /**
     * @var string $billingMiddlename
     */
    protected $billingMiddlename = null;

    /**
     * @var string $billingPrefix
     */
    protected $billingPrefix = null;

    /**
     * @var string $billingSuffix
     */
    protected $billingSuffix = null;

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
     * @var string $shippingPrefix
     */
    protected $shippingPrefix = null;

    /**
     * @var string $shippingSuffix
     */
    protected $shippingSuffix = null;

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
     * @var int $shippingDate
     */
    protected $shippingDate = null;

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
     * @return \ClangSdk\MagentoShipment
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalShipmentId()
    {
      return $this->externalShipmentId;
    }

    /**
     * @param string $externalShipmentId
     * @return \ClangSdk\MagentoShipment
     */
    public function setExternalShipmentId($externalShipmentId)
    {
      $this->externalShipmentId = $externalShipmentId;
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
     * @return \ClangSdk\MagentoShipment
     */
    public function setExternalOrderId($externalOrderId)
    {
      $this->externalOrderId = $externalOrderId;
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = $customerId;
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
     */
    public function setBillingMiddlename($billingMiddlename)
    {
      $this->billingMiddlename = $billingMiddlename;
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
     */
    public function setBillingSuffix($billingSuffix)
    {
      $this->billingSuffix = $billingSuffix;
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
     */
    public function setShippingMiddlename($shippingMiddlename)
    {
      $this->shippingMiddlename = $shippingMiddlename;
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
     */
    public function setShippingSuffix($shippingSuffix)
    {
      $this->shippingSuffix = $shippingSuffix;
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
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
     * @return \ClangSdk\MagentoShipment
     */
    public function setShippingPhone($shippingPhone)
    {
      $this->shippingPhone = $shippingPhone;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingDate()
    {
      return $this->shippingDate;
    }

    /**
     * @param int $shippingDate
     * @return \ClangSdk\MagentoShipment
     */
    public function setShippingDate($shippingDate)
    {
      $this->shippingDate = $shippingDate;
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
     * @return \ClangSdk\MagentoShipment
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
