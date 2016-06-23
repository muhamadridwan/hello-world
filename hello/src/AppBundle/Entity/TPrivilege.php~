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
     * @var integer
     *
     * @ORM\Column(name="p_access", type="smallint", nullable=false)
     */
    private $pAccess = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="p_create", type="smallint", nullable=false)
     */
    private $pCreate = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="p_retrieve", type="smallint", nullable=false)
     */
    private $pRetrieve = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="p_update", type="smallint", nullable=false)
     */
    private $pUpdate = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="p_delete", type="smallint", nullable=false)
     */
    private $pDelete = '1';

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
     * @param integer $pAccess
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
     * @return integer
     */
    public function getPAccess()
    {
        return $this->pAccess;
    }

    /**
     * Set pCreate
     *
     * @param integer $pCreate
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
     * @return integer
     */
    public function getPCreate()
    {
        return $this->pCreate;
    }

    /**
     * Set pRetrieve
     *
     * @param integer $pRetrieve
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
     * @return integer
     */
    public function getPRetrieve()
    {
        return $this->pRetrieve;
    }

    /**
     * Set pUpdate
     *
     * @param integer $pUpdate
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
     * @return integer
     */
    public function getPUpdate()
    {
        return $this->pUpdate;
    }

    /**
     * Set pDelete
     *
     * @param integer $pDelete
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
     * @return integer
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
