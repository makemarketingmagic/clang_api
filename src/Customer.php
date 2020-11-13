<?php

namespace ClangSdk;

class Customer
{

    /**
     * @var int $complaintCount
     */
    protected $complaintCount = null;

    /**
     * @var ArrayOfAccount $accounts
     */
    protected $accounts = null;

    /**
     * @var string $smsOptIn
     */
    protected $smsOptIn = null;

    /**
     * @var string $optIn
     */
    protected $optIn = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $lastname
     */
    protected $lastname = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $middlename
     */
    protected $middlename = null;

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string $suffix
     */
    protected $suffix = null;

    /**
     * @var string $initials
     */
    protected $initials = null;

    /**
     * @var string $gender
     */
    protected $gender = null;

    /**
     * @var string $maritalStatus
     */
    protected $maritalStatus = null;

    /**
     * @var string $birthday
     */
    protected $birthday = null;

    /**
     * @var string $birthplace
     */
    protected $birthplace = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $address2
     */
    protected $address2 = null;

    /**
     * @var string $address3
     */
    protected $address3 = null;

    /**
     * @var string $addressNumber
     */
    protected $addressNumber = null;

    /**
     * @var string $addressNumberSuffix
     */
    protected $addressNumberSuffix = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * @var string $poBox
     */
    protected $poBox = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @var string $department
     */
    protected $department = null;

    /**
     * @var string $alternateAddress
     */
    protected $alternateAddress = null;

    /**
     * @var string $alternateAddress2
     */
    protected $alternateAddress2 = null;

    /**
     * @var string $alternateAddress3
     */
    protected $alternateAddress3 = null;

    /**
     * @var string $alternateAddressNumber
     */
    protected $alternateAddressNumber = null;

    /**
     * @var string $alternateAddressNumberSuffix
     */
    protected $alternateAddressNumberSuffix = null;

    /**
     * @var string $alternateZipCode
     */
    protected $alternateZipCode = null;

    /**
     * @var string $alternateCity
     */
    protected $alternateCity = null;

    /**
     * @var string $alternateState
     */
    protected $alternateState = null;

    /**
     * @var string $alternateCountry
     */
    protected $alternateCountry = null;

    /**
     * @var string $contactMan
     */
    protected $contactMan = null;

    /**
     * @var string $jobTitle
     */
    protected $jobTitle = null;

    /**
     * @var string $workPhone
     */
    protected $workPhone = null;

    /**
     * @var string $workExtension
     */
    protected $workExtension = null;

    /**
     * @var string $workMobile
     */
    protected $workMobile = null;

    /**
     * @var string $homePhone
     */
    protected $homePhone = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var string $faxNumber
     */
    protected $faxNumber = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var string $alternateEmailAddress
     */
    protected $alternateEmailAddress = null;

    /**
     * @var string $emailType
     */
    protected $emailType = null;

    /**
     * @var string $mailStatus
     */
    protected $mailStatus = null;

    /**
     * @var int $softBounceCount
     */
    protected $softBounceCount = null;

    /**
     * @var int $hardBounceCount
     */
    protected $hardBounceCount = null;

    /**
     * @var string $website
     */
    protected $website = null;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $createdBy
     */
    protected $createdBy = null;

    /**
     * @var string $createdAt
     */
    protected $createdAt = null;

    /**
     * @var string $modifiedBy
     */
    protected $modifiedBy = null;

    /**
     * @var string $modifiedAt
     */
    protected $modifiedAt = null;

    /**
     * @var ArrayOfCustomerOption $options
     */
    protected $options = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getComplaintCount()
    {
      return $this->complaintCount;
    }

    /**
     * @param int $complaintCount
     * @return \ClangSdk\Customer
     */
    public function setComplaintCount($complaintCount)
    {
      $this->complaintCount = $complaintCount;
      return $this;
    }

    /**
     * @return ArrayOfAccount
     */
    public function getAccounts()
    {
      return $this->accounts;
    }

    /**
     * @param ArrayOfAccount $accounts
     * @return \ClangSdk\Customer
     */
    public function setAccounts($accounts)
    {
      $this->accounts = $accounts;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmsOptIn()
    {
      return $this->smsOptIn;
    }

    /**
     * @param string $smsOptIn
     * @return \ClangSdk\Customer
     */
    public function setSmsOptIn($smsOptIn)
    {
      $this->smsOptIn = $smsOptIn;
      return $this;
    }

    /**
     * @return string
     */
    public function getOptIn()
    {
      return $this->optIn;
    }

    /**
     * @param string $optIn
     * @return \ClangSdk\Customer
     */
    public function setOptIn($optIn)
    {
      $this->optIn = $optIn;
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
     * @return \ClangSdk\Customer
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \ClangSdk\Customer
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
      return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return \ClangSdk\Customer
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
      return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return \ClangSdk\Customer
     */
    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddlename()
    {
      return $this->middlename;
    }

    /**
     * @param string $middlename
     * @return \ClangSdk\Customer
     */
    public function setMiddlename($middlename)
    {
      $this->middlename = $middlename;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
      return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return \ClangSdk\Customer
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
      return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return \ClangSdk\Customer
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
      return $this->initials;
    }

    /**
     * @param string $initials
     * @return \ClangSdk\Customer
     */
    public function setInitials($initials)
    {
      $this->initials = $initials;
      return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param string $gender
     * @return \ClangSdk\Customer
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaritalStatus()
    {
      return $this->maritalStatus;
    }

    /**
     * @param string $maritalStatus
     * @return \ClangSdk\Customer
     */
    public function setMaritalStatus($maritalStatus)
    {
      $this->maritalStatus = $maritalStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
      return $this->birthday;
    }

    /**
     * @param string $birthday
     * @return \ClangSdk\Customer
     */
    public function setBirthday($birthday)
    {
      $this->birthday = $birthday;
      return $this;
    }

    /**
     * @return string
     */
    public function getBirthplace()
    {
      return $this->birthplace;
    }

    /**
     * @param string $birthplace
     * @return \ClangSdk\Customer
     */
    public function setBirthplace($birthplace)
    {
      $this->birthplace = $birthplace;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \ClangSdk\Customer
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->address2;
    }

    /**
     * @param string $address2
     * @return \ClangSdk\Customer
     */
    public function setAddress2($address2)
    {
      $this->address2 = $address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
      return $this->address3;
    }

    /**
     * @param string $address3
     * @return \ClangSdk\Customer
     */
    public function setAddress3($address3)
    {
      $this->address3 = $address3;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressNumber()
    {
      return $this->addressNumber;
    }

    /**
     * @param string $addressNumber
     * @return \ClangSdk\Customer
     */
    public function setAddressNumber($addressNumber)
    {
      $this->addressNumber = $addressNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressNumberSuffix()
    {
      return $this->addressNumberSuffix;
    }

    /**
     * @param string $addressNumberSuffix
     * @return \ClangSdk\Customer
     */
    public function setAddressNumberSuffix($addressNumberSuffix)
    {
      $this->addressNumberSuffix = $addressNumberSuffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return \ClangSdk\Customer
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoBox()
    {
      return $this->poBox;
    }

    /**
     * @param string $poBox
     * @return \ClangSdk\Customer
     */
    public function setPoBox($poBox)
    {
      $this->poBox = $poBox;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \ClangSdk\Customer
     */
    public function setCity($city)
    {
      $this->city = $city;
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
     * @return \ClangSdk\Customer
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \ClangSdk\Customer
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return \ClangSdk\Customer
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param string $department
     * @return \ClangSdk\Customer
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateAddress()
    {
      return $this->alternateAddress;
    }

    /**
     * @param string $alternateAddress
     * @return \ClangSdk\Customer
     */
    public function setAlternateAddress($alternateAddress)
    {
      $this->alternateAddress = $alternateAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateAddress2()
    {
      return $this->alternateAddress2;
    }

    /**
     * @param string $alternateAddress2
     * @return \ClangSdk\Customer
     */
    public function setAlternateAddress2($alternateAddress2)
    {
      $this->alternateAddress2 = $alternateAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateAddress3()
    {
      return $this->alternateAddress3;
    }

    /**
     * @param string $alternateAddress3
     * @return \ClangSdk\Customer
     */
    public function setAlternateAddress3($alternateAddress3)
    {
      $this->alternateAddress3 = $alternateAddress3;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateAddressNumber()
    {
      return $this->alternateAddressNumber;
    }

    /**
     * @param string $alternateAddressNumber
     * @return \ClangSdk\Customer
     */
    public function setAlternateAddressNumber($alternateAddressNumber)
    {
      $this->alternateAddressNumber = $alternateAddressNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateAddressNumberSuffix()
    {
      return $this->alternateAddressNumberSuffix;
    }

    /**
     * @param string $alternateAddressNumberSuffix
     * @return \ClangSdk\Customer
     */
    public function setAlternateAddressNumberSuffix($alternateAddressNumberSuffix)
    {
      $this->alternateAddressNumberSuffix = $alternateAddressNumberSuffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateZipCode()
    {
      return $this->alternateZipCode;
    }

    /**
     * @param string $alternateZipCode
     * @return \ClangSdk\Customer
     */
    public function setAlternateZipCode($alternateZipCode)
    {
      $this->alternateZipCode = $alternateZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateCity()
    {
      return $this->alternateCity;
    }

    /**
     * @param string $alternateCity
     * @return \ClangSdk\Customer
     */
    public function setAlternateCity($alternateCity)
    {
      $this->alternateCity = $alternateCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateState()
    {
      return $this->alternateState;
    }

    /**
     * @param string $alternateState
     * @return \ClangSdk\Customer
     */
    public function setAlternateState($alternateState)
    {
      $this->alternateState = $alternateState;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateCountry()
    {
      return $this->alternateCountry;
    }

    /**
     * @param string $alternateCountry
     * @return \ClangSdk\Customer
     */
    public function setAlternateCountry($alternateCountry)
    {
      $this->alternateCountry = $alternateCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactMan()
    {
      return $this->contactMan;
    }

    /**
     * @param string $contactMan
     * @return \ClangSdk\Customer
     */
    public function setContactMan($contactMan)
    {
      $this->contactMan = $contactMan;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
      return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     * @return \ClangSdk\Customer
     */
    public function setJobTitle($jobTitle)
    {
      $this->jobTitle = $jobTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
      return $this->workPhone;
    }

    /**
     * @param string $workPhone
     * @return \ClangSdk\Customer
     */
    public function setWorkPhone($workPhone)
    {
      $this->workPhone = $workPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkExtension()
    {
      return $this->workExtension;
    }

    /**
     * @param string $workExtension
     * @return \ClangSdk\Customer
     */
    public function setWorkExtension($workExtension)
    {
      $this->workExtension = $workExtension;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkMobile()
    {
      return $this->workMobile;
    }

    /**
     * @param string $workMobile
     * @return \ClangSdk\Customer
     */
    public function setWorkMobile($workMobile)
    {
      $this->workMobile = $workMobile;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
      return $this->homePhone;
    }

    /**
     * @param string $homePhone
     * @return \ClangSdk\Customer
     */
    public function setHomePhone($homePhone)
    {
      $this->homePhone = $homePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
      return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return \ClangSdk\Customer
     */
    public function setMobilePhone($mobilePhone)
    {
      $this->mobilePhone = $mobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return \ClangSdk\Customer
     */
    public function setFaxNumber($faxNumber)
    {
      $this->faxNumber = $faxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return \ClangSdk\Customer
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateEmailAddress()
    {
      return $this->alternateEmailAddress;
    }

    /**
     * @param string $alternateEmailAddress
     * @return \ClangSdk\Customer
     */
    public function setAlternateEmailAddress($alternateEmailAddress)
    {
      $this->alternateEmailAddress = $alternateEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailType()
    {
      return $this->emailType;
    }

    /**
     * @param string $emailType
     * @return \ClangSdk\Customer
     */
    public function setEmailType($emailType)
    {
      $this->emailType = $emailType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailStatus()
    {
      return $this->mailStatus;
    }

    /**
     * @param string $mailStatus
     * @return \ClangSdk\Customer
     */
    public function setMailStatus($mailStatus)
    {
      $this->mailStatus = $mailStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getSoftBounceCount()
    {
      return $this->softBounceCount;
    }

    /**
     * @param int $softBounceCount
     * @return \ClangSdk\Customer
     */
    public function setSoftBounceCount($softBounceCount)
    {
      $this->softBounceCount = $softBounceCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getHardBounceCount()
    {
      return $this->hardBounceCount;
    }

    /**
     * @param int $hardBounceCount
     * @return \ClangSdk\Customer
     */
    public function setHardBounceCount($hardBounceCount)
    {
      $this->hardBounceCount = $hardBounceCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
      return $this->website;
    }

    /**
     * @param string $website
     * @return \ClangSdk\Customer
     */
    public function setWebsite($website)
    {
      $this->website = $website;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
      return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return \ClangSdk\Customer
     */
    public function setImageUrl($imageUrl)
    {
      $this->imageUrl = $imageUrl;
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
     * @return \ClangSdk\Customer
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \ClangSdk\Customer
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \ClangSdk\Customer
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \ClangSdk\Customer
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return \ClangSdk\Customer
     */
    public function setCreatedBy($createdBy)
    {
      $this->createdBy = $createdBy;
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
     * @return \ClangSdk\Customer
     */
    public function setCreatedAt($createdAt)
    {
      $this->createdAt = $createdAt;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return \ClangSdk\Customer
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedAt()
    {
      return $this->modifiedAt;
    }

    /**
     * @param string $modifiedAt
     * @return \ClangSdk\Customer
     */
    public function setModifiedAt($modifiedAt)
    {
      $this->modifiedAt = $modifiedAt;
      return $this;
    }

    /**
     * @return ArrayOfCustomerOption
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param ArrayOfCustomerOption $options
     * @return \ClangSdk\Customer
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
