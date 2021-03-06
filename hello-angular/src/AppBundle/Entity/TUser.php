<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TUser
 *
 * @ORM\Table(name="t_user", uniqueConstraints={@ORM\UniqueConstraint(name="uq_t_user_id", columns={"id"})}, indexes={@ORM\Index(name="ixfk_user_user_group", columns={"user_group_id"})})
 * @ORM\Entity
 */
class TUser implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=32, nullable=false)
     * @Assert\Length(
     *      max = 32,
     *      maxMessage = "Username cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotNull(
     *      message="Username should not be null."
     * )
     * @Assert\NotBlank(
     *      message="Username should not be blank."
     * )
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     * @Assert\Length(
     *      max = 64,
     *      maxMessage = "Password cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotNull(
     *      message="Password should not be null."
     * )
     * @Assert\NotBlank(
     *      message="Password should not be blank."
     * )
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive = true;

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
     * @var string
     *
     * @ORM\Column(name="valid_token", type="text", nullable=true)
     */
    private $validToken;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TUserGroup
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TUserGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_group_id", referencedColumnName="user_group_id")
     * })
     */
    private $userGroup;



    /**
     * Set username
     *
     * @param string $username
     *
     * @return TUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return TUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return TUser
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
     * Set email
     *
     * @param string $email
     *
     * @return TUser
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userGroup
     *
     * @param \AppBundle\Entity\TUserGroup $userGroup
     *
     * @return TUser
     */
    public function setUserGroup(\AppBundle\Entity\TUserGroup $userGroup = null)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * Get userGroup
     *
     * @return \AppBundle\Entity\TUserGroup
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }
    
    /**
     * Set validToken
     *
     * @param string $validToken
     *
     * @return TUser
     */
    public function setValidToken($validToken)
    {
        $this->validToken = $validToken;

        return $this;
    }

    /**
     * Get validToken
     *
     * @return string
     */
    public function getValidToken()
    {
        return $this->validToken;
    }

    public function getRoles()
    {
        return array($this->getUserGroup()->getUserGroupId());
    }
    public function getSalt()
    {
        return null;
    }
    public function eraseCredentials()
    {}
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
            // see section on salt below
            // $this->salt,
        ));
    }
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    public function isAccountNonExpired()
    {
        return true;
    }
    public function isAccountNonLocked()
    {
        return true;
    }
    public function isCredentialsNonExpired()
    {
        return true;
    }
    public function isEnabled()
    {
        return $this->isActive;
    }
}
