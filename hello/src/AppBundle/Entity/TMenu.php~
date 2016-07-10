<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMenu
 *
 * @ORM\Table(name="t_menu", uniqueConstraints={@ORM\UniqueConstraint(name="uq_menu_menu_id", columns={"menu_id"})})
 * @ORM\Entity
 */
class TMenu
{
    /**
     * @var string
     *
     * @ORM\Column(name="menu_pid", type="string", length=32, nullable=true)
     */
    private $menuPid;

    /**
     * @var string
     *
     * @ORM\Column(name="menu", type="string", length=32, nullable=true)
     */
    private $menu;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_in_bahasa", type="string", length=32, nullable=true)
     */
    private $menuInBahasa;

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=32, nullable=true)
     */
    private $controller;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_css", type="string", length=32, nullable=true)
     */
    private $menuCss;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_icon", type="string", length=32, nullable=true)
     */
    private $menuIcon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_seq", type="integer", nullable=true)
     */
    private $menuSeq = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="menu_id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_menu_menu_id_seq", allocationSize=1, initialValue=1)
     */
    private $menuId;



    /**
     * Set menuPid
     *
     * @param string $menuPid
     *
     * @return TMenu
     */
    public function setMenuPid($menuPid)
    {
        $this->menuPid = $menuPid;

        return $this;
    }

    /**
     * Get menuPid
     *
     * @return string
     */
    public function getMenuPid()
    {
        return $this->menuPid;
    }

    /**
     * Set menu
     *
     * @param string $menu
     *
     * @return TMenu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return string
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set menuInBahasa
     *
     * @param string $menuInBahasa
     *
     * @return TMenu
     */
    public function setMenuInBahasa($menuInBahasa)
    {
        $this->menuInBahasa = $menuInBahasa;

        return $this;
    }

    /**
     * Get menuInBahasa
     *
     * @return string
     */
    public function getMenuInBahasa()
    {
        return $this->menuInBahasa;
    }

    /**
     * Set controller
     *
     * @param string $controller
     *
     * @return TMenu
     */
    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Get controller
     *
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Set menuCss
     *
     * @param string $menuCss
     *
     * @return TMenu
     */
    public function setMenuCss($menuCss)
    {
        $this->menuCss = $menuCss;

        return $this;
    }

    /**
     * Get menuCss
     *
     * @return string
     */
    public function getMenuCss()
    {
        return $this->menuCss;
    }

    /**
     * Set menuIcon
     *
     * @param string $menuIcon
     *
     * @return TMenu
     */
    public function setMenuIcon($menuIcon)
    {
        $this->menuIcon = $menuIcon;

        return $this;
    }

    /**
     * Get menuIcon
     *
     * @return string
     */
    public function getMenuIcon()
    {
        return $this->menuIcon;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return TMenu
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
     * Set menuSeq
     *
     * @param integer $menuSeq
     *
     * @return TMenu
     */
    public function setMenuSeq($menuSeq)
    {
        $this->menuSeq = $menuSeq;

        return $this;
    }

    /**
     * Get menuSeq
     *
     * @return integer
     */
    public function getMenuSeq()
    {
        return $this->menuSeq;
    }

    /**
     * Get menuId
     *
     * @return string
     */
    public function getMenuId()
    {
        return $this->menuId;
    }
}
