<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", uniqueConstraints={@ORM\UniqueConstraint(name="uq_customer_customer_id", columns={"customer_id"})}, indexes={@ORM\Index(name="ixfk_customer_t_user", columns={"user_id"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="personal_id", type="string", length=32, nullable=true)
     */
    private $personalId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=32, nullable=false)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_fullname", type="string", length=32, nullable=true)
     */
    private $customerFullname;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_address", type="string", length=128, nullable=true)
     */
    private $customerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=32, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=32)
     * @ORM\Id
     */
    private $customerId;



    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Customer
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set personalId
     *
     * @param string $personalId
     *
     * @return Customer
     */
    public function setPersonalId($personalId)
    {
        $this->personalId = $personalId;

        return $this;
    }

    /**
     * Get personalId
     *
     * @return string
     */
    public function getPersonalId()
    {
        return $this->personalId;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return Customer
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set customerFullname
     *
     * @param string $customerFullname
     *
     * @return Customer
     */
    public function setCustomerFullname($customerFullname)
    {
        $this->customerFullname = $customerFullname;

        return $this;
    }

    /**
     * Get customerFullname
     *
     * @return string
     */
    public function getCustomerFullname()
    {
        return $this->customerFullname;
    }

    /**
     * Set customerAddress
     *
     * @param string $customerAddress
     *
     * @return Customer
     */
    public function setCustomerAddress($customerAddress)
    {
        $this->customerAddress = $customerAddress;

        return $this;
    }

    /**
     * Get customerAddress
     *
     * @return string
     */
    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Customer
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
     * Set email
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Customer
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     *
     * @return Customer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }


    /**
     * Get customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
    /**
     * @var \AppBundle\Entity\TUser
     */
    private $user;


    /**
     * Set user
     *
     * @param \AppBundle\Entity\TUser $user
     *
     * @return Customer
     */
    public function setUser(\AppBundle\Entity\TUser $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\TUser
     */
    public function getUser()
    {
        return $this->user;
    }
}
