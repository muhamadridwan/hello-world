<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyProfile
 *
 * @ORM\Table(name="company_profile")
 * @ORM\Entity
 */
class CompanyProfile
{
    /**
     * @var string
     *
     * @ORM\Column(name="store_name", type="string", length=32, nullable=false)
     */
    private $storeName;

    /**
     * @var string
     *
     * @ORM\Column(name="store_desc", type="string", length=128, nullable=true)
     */
    private $storeDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="store_email", type="string", length=32, nullable=true)
     */
    private $storeEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="store_address", type="string", length=255, nullable=true)
     */
    private $storeAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="store_id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="company_profile_store_id_seq", allocationSize=1, initialValue=1)
     */
    private $storeId;



    /**
     * Set storeName
     *
     * @param string $storeName
     *
     * @return CompanyProfile
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * Get storeName
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Set storeDesc
     *
     * @param string $storeDesc
     *
     * @return CompanyProfile
     */
    public function setStoreDesc($storeDesc)
    {
        $this->storeDesc = $storeDesc;

        return $this;
    }

    /**
     * Get storeDesc
     *
     * @return string
     */
    public function getStoreDesc()
    {
        return $this->storeDesc;
    }

    /**
     * Set storeEmail
     *
     * @param string $storeEmail
     *
     * @return CompanyProfile
     */
    public function setStoreEmail($storeEmail)
    {
        $this->storeEmail = $storeEmail;

        return $this;
    }

    /**
     * Get storeEmail
     *
     * @return string
     */
    public function getStoreEmail()
    {
        return $this->storeEmail;
    }

    /**
     * Set storeAddress
     *
     * @param string $storeAddress
     *
     * @return CompanyProfile
     */
    public function setStoreAddress($storeAddress)
    {
        $this->storeAddress = $storeAddress;

        return $this;
    }

    /**
     * Get storeAddress
     *
     * @return string
     */
    public function getStoreAddress()
    {
        return $this->storeAddress;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return CompanyProfile
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Get storeId
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->storeId;
    }
}
