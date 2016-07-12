<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TUserGroup
 *
 * @ORM\Table(name="t_user_group", uniqueConstraints={@ORM\UniqueConstraint(name="uq_user_group_user_group_id", columns={"user_group_id"})})
 * @ORM\Entity
 */
class TUserGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_group_name", type="string", length=32, nullable=false)
     */
    private $userGroupName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_group_desc", type="string", length=64, nullable=true)
     */
    private $userGroupDesc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive = true;

    /**
     * @var string
     *
     * @ORM\Column(name="user_group_id", type="string", length=32)
     * @ORM\Id
     */
    private $userGroupId;



    /**
     * Set userGroupName
     *
     * @param string $userGroupName
     *
     * @return TUserGroup
     */
    public function setUserGroupName($userGroupName)
    {
        $this->userGroupName = $userGroupName;

        return $this;
    }

    /**
     * Get userGroupName
     *
     * @return string
     */
    public function getUserGroupName()
    {
        return $this->userGroupName;
    }

    /**
     * Set userGroupDesc
     *
     * @param string $userGroupDesc
     *
     * @return TUserGroup
     */
    public function setUserGroupDesc($userGroupDesc)
    {
        $this->userGroupDesc = $userGroupDesc;

        return $this;
    }

    /**
     * Get userGroupDesc
     *
     * @return string
     */
    public function getUserGroupDesc()
    {
        return $this->userGroupDesc;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return TUserGroup
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
     * Set userGroupId
     *
     * @param string $userGroupId
     *
     * @return TUserGroup
     */
    public function setUserGroupId($userGroupId)
    {
        $this->userGroupId = $userGroupId;

        return $this;
    }
	
    /**
     * Get userGroupId
     *
     * @return string
     */
    public function getUserGroupId()
    {
        return $this->userGroupId;
    }
}
