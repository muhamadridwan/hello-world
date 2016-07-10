<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPrivilege
 *
 * @ORM\Table(name="t_privilege", indexes={@ORM\Index(name="ixfk_privilege_menu", columns={"menu_id"}), @ORM\Index(name="ixfk_privilege_user_group", columns={"user_group_id"})})
 * @ORM\Entity
 */
class TPrivilege
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="p_access", type="boolean", nullable=false)
     */
    private $pAccess = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="p_create", type="boolean", nullable=false)
     */
    private $pCreate = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="p_retrieve", type="boolean", nullable=false)
     */
    private $pRetrieve = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="p_update", type="boolean", nullable=false)
     */
    private $pUpdate = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="p_delete", type="boolean", nullable=false)
     */
    private $pDelete = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="t_privilege_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_privilege_t_privilege_id_seq", allocationSize=1, initialValue=1)
     */
    private $tPrivilegeId;

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
     * @var \AppBundle\Entity\TMenu
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TMenu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="menu_id", referencedColumnName="menu_id")
     * })
     */
    private $menu;



    /**
     * Set pAccess
     *
     * @param boolean $pAccess
     *
     * @return TPrivilege
     */
    public function setPAccess($pAccess)
    {
        $this->pAccess = $pAccess;

        return $this;
    }

    /**
     * Get pAccess
     *
     * @return boolean
     */
    public function getPAccess()
    {
        return $this->pAccess;
    }

    /**
     * Set pCreate
     *
     * @param boolean $pCreate
     *
     * @return TPrivilege
     */
    public function setPCreate($pCreate)
    {
        $this->pCreate = $pCreate;

        return $this;
    }

    /**
     * Get pCreate
     *
     * @return boolean
     */
    public function getPCreate()
    {
        return $this->pCreate;
    }

    /**
     * Set pRetrieve
     *
     * @param boolean $pRetrieve
     *
     * @return TPrivilege
     */
    public function setPRetrieve($pRetrieve)
    {
        $this->pRetrieve = $pRetrieve;

        return $this;
    }

    /**
     * Get pRetrieve
     *
     * @return boolean
     */
    public function getPRetrieve()
    {
        return $this->pRetrieve;
    }

    /**
     * Set pUpdate
     *
     * @param boolean $pUpdate
     *
     * @return TPrivilege
     */
    public function setPUpdate($pUpdate)
    {
        $this->pUpdate = $pUpdate;

        return $this;
    }

    /**
     * Get pUpdate
     *
     * @return boolean
     */
    public function getPUpdate()
    {
        return $this->pUpdate;
    }

    /**
     * Set pDelete
     *
     * @param boolean $pDelete
     *
     * @return TPrivilege
     */
    public function setPDelete($pDelete)
    {
        $this->pDelete = $pDelete;

        return $this;
    }

    /**
     * Get pDelete
     *
     * @return boolean
     */
    public function getPDelete()
    {
        return $this->pDelete;
    }

    /**
     * Get tPrivilegeId
     *
     * @return integer
     */
    public function getTPrivilegeId()
    {
        return $this->tPrivilegeId;
    }

    /**
     * Set userGroup
     *
     * @param \AppBundle\Entity\TUserGroup $userGroup
     *
     * @return TPrivilege
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
     * Set menu
     *
     * @param \AppBundle\Entity\TMenu $menu
     *
     * @return TPrivilege
     */
    public function setMenu(\AppBundle\Entity\TMenu $menu = null)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \AppBundle\Entity\TMenu
     */
    public function getMenu()
    {
        return $this->menu;
    }
}
