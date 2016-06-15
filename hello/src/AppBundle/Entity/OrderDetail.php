<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetail
 *
 * @ORM\Table(name="order_detail", indexes={@ORM\Index(name="ixfk_order_detail_customer_order", columns={"order_id"}), @ORM\Index(name="ixfk_order_detail_meal", columns={"meal_id"})})
 * @ORM\Entity
 */
class OrderDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="qty", type="integer", nullable=false)
     */
    private $qty = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=true)
     */
    private $total = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total_discount", type="integer", nullable=true)
     */
    private $totalDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_before_discount", type="integer", nullable=true)
     */
    private $totalBeforeDiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="order_detail_id", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="order_detail_order_detail_id_seq", allocationSize=1, initialValue=1)
     */
    private $orderDetailId;

    /**
     * @var \AppBundle\Entity\Meal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Meal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="meal_id", referencedColumnName="meal_id")
     * })
     */
    private $meal;

    /**
     * @var \AppBundle\Entity\CustomerOrder
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CustomerOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="order_id")
     * })
     */
    private $order;



    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return OrderDetail
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return integer
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return OrderDetail
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set totalDiscount
     *
     * @param integer $totalDiscount
     *
     * @return OrderDetail
     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount = $totalDiscount;

        return $this;
    }

    /**
     * Get totalDiscount
     *
     * @return integer
     */
    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }

    /**
     * Set totalBeforeDiscount
     *
     * @param integer $totalBeforeDiscount
     *
     * @return OrderDetail
     */
    public function setTotalBeforeDiscount($totalBeforeDiscount)
    {
        $this->totalBeforeDiscount = $totalBeforeDiscount;

        return $this;
    }

    /**
     * Get totalBeforeDiscount
     *
     * @return integer
     */
    public function getTotalBeforeDiscount()
    {
        return $this->totalBeforeDiscount;
    }

    /**
     * Get orderDetailId
     *
     * @return string
     */
    public function getOrderDetailId()
    {
        return $this->orderDetailId;
    }

    /**
     * Set meal
     *
     * @param \AppBundle\Entity\Meal $meal
     *
     * @return OrderDetail
     */
    public function setMeal(\AppBundle\Entity\Meal $meal = null)
    {
        $this->meal = $meal;

        return $this;
    }

    /**
     * Get meal
     *
     * @return \AppBundle\Entity\Meal
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Set order
     *
     * @param \AppBundle\Entity\CustomerOrder $order
     *
     * @return OrderDetail
     */
    public function setOrder(\AppBundle\Entity\CustomerOrder $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\CustomerOrder
     */
    public function getOrder()
    {
        return $this->order;
    }
}
