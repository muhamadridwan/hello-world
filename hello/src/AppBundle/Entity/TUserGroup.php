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
     * @var integer
     *
     * @ORM\Column(name="is_active", type="integer", nullable=true)
     */
    private $isActive = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="user_group_id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_user_group_user_group_id_seq", allocationSize=1, initialValue=1)
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
     * @param integer $isActive
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
     * @return integer
     */
    public function getIsActive()
    {
        return $this->isActive;
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
