<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Employee
 *
 * @ORM\Table(name="employee", uniqueConstraints={@ORM\UniqueConstraint(name="uq_employee_employee_id", columns={"employee_id"})}, indexes={@ORM\Index(name="ixfk_employee_t_user", columns={"user_id"})})
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var string
     *
     * @ORM\Column(name="personal_id", type="string", length=32, nullable=true)
     * @Assert\Length(
     *      max = 32,
     *      maxMessage = "Personal ID cannot be longer than {{ limit }} characters"
     * )
     */
    private $personalId;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_name", type="string", length=32, nullable=false)
     * @Assert\Length(
     *      max = 32,
     *      maxMessage = "Employee name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotNull(
     *      message="Employee name should not be null."
     * )
     * @Assert\NotBlank(
     *      message="Employee name should not be blank."
     * )
     */
    private $employeeName;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_fullname", type="string", length=32, nullable=true)
     * @Assert\Length(
     *      max = 32,
     *      maxMessage = "Employee fullname cannot be longer than {{ limit }} characters"
     * )
     */
    private $employeeFullname;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_address", type="string", length=128, nullable=true)
     * @Assert\Length(
     *      max = 128,
     *      maxMessage = "Address cannot be longer than {{ limit }} characters"
     * )
     */
    private $employeeAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
     * @Assert\Length(
     *      max = 20,
     *      maxMessage = "Phone number cannot be longer than {{ limit }} characters"
     * )
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=32, nullable=true)
     * @Assert\Length(
     *      max = 32,
     *      maxMessage = "Email cannot be longer than {{ limit }} characters"
     * )
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="join_date", type="datetime", nullable=true)
     */
    private $joinDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resign_date", type="datetime", nullable=true)
     */
    private $resignDate;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     * @Assert\Length(
     *      max = 200,
     *      maxMessage = "Picture name cannot be longer than {{ limit }} characters"
     * )
     */
    private $picture;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive = true;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_id", type="string", length=32)
     * @ORM\Id
     * @Assert\Length(
     *      max = 32,
     *      maxMessage = "Employee Id cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotNull(
     *      message="Employee Id should not be null."
     * )
     * @Assert\NotBlank(
     *      message="Employee Id should not be blank."
     * )
     */
    private $employeeId;

    /**
     * @var \AppBundle\Entity\TUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set personalId
     *
     * @param string $personalId
     *
     * @return Employee
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
     * Set employeeName
     *
     * @param string $employeeName
     *
     * @return Employee
     */
    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;

        return $this;
    }

    /**
     * Get employeeName
     *
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    /**
     * Set employeeFullname
     *
     * @param string $employeeFullname
     *
     * @return Employee
     */
    public function setEmployeeFullname($employeeFullname)
    {
        $this->employeeFullname = $employeeFullname;

        return $this;
    }

    /**
     * Get employeeFullname
     *
     * @return string
     */
    public function getEmployeeFullname()
    {
        return $this->employeeFullname;
    }

    /**
     * Set employeeAddress
     *
     * @param string $employeeAddress
     *
     * @return Employee
     */
    public function setEmployeeAddress($employeeAddress)
    {
        $this->employeeAddress = $employeeAddress;

        return $this;
    }

    /**
     * Get employeeAddress
     *
     * @return string
     */
    public function getEmployeeAddress()
    {
        return $this->employeeAddress;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Employee
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
     * @return Employee
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
     * Set joinDate
     *
     * @param \DateTime $joinDate
     *
     * @return Employee
     */
    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;

        return $this;
    }

    /**
     * Get joinDate
     *
     * @return \DateTime
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }

    /**
     * Set resignDate
     *
     * @param \DateTime $resignDate
     *
     * @return Employee
     */
    public function setResignDate($resignDate)
    {
        $this->resignDate = $resignDate;

        return $this;
    }

    /**
     * Get resignDate
     *
     * @return \DateTime
     */
    public function getResignDate()
    {
        return $this->resignDate;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Employee
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Employee
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set employeeId
     *
     * @param string $employeeId
     *
     * @return Employee
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * Get employeeId
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\TUser $user
     *
     * @return Employee
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
