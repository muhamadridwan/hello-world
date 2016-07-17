<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOrder
 *
 * @ORM\Table(name="customer_order", uniqueConstraints={@ORM\UniqueConstraint(name="uq_user_order_order_id", columns={"order_id"})}, indexes={@ORM\Index(name="ixfk_customer_order_customer", columns={"customer_id"})})
 * @ORM\Entity
 */
class CustomerOrder
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=false)
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cashier", type="string", length=32, nullable=true)
     */
    private $cashier;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_type", type="integer", nullable=true)
     */
    private $orderType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total_order", type="integer", nullable=true)
     */
    private $totalOrder = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="payment", type="integer", nullable=true)
     */
    private $payment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=32, nullable=false)
     */
    private $paymentMethod;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_status", type="smallint", nullable=false)
     */
    private $orderStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="courier", type="string", length=32, nullable=true)
     */
    private $courier;

    /**
     * @var string
     *
     * @ORM\Column(name="order_id", type="string", length=64)
     * @ORM\Id
     */
    private $orderId;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id")
     * })
     */
    private $customer;



    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return CustomerOrder
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set cashier
     *
     * @param string $cashier
     *
     * @return CustomerOrder
     */
    public function setCashier($cashier)
    {
        $this->cashier = $cashier;

        return $this;
    }

    /**
     * Get cashier
     *
     * @return string
     */
    public function getCashier()
    {
        return $this->cashier;
    }

    /**
     * Set orderType
     *
     * @param integer $orderType
     *
     * @return CustomerOrder
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return integer
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set totalOrder
     *
     * @param integer $totalOrder
     *
     * @return CustomerOrder
     */
    public function setTotalOrder($totalOrder)
    {
        $this->totalOrder = $totalOrder;

        return $this;
    }

    /**
     * Get totalOrder
     *
     * @return integer
     */
    public function getTotalOrder()
    {
        return $this->totalOrder;
    }

    /**
     * Set payment
     *
     * @param integer $payment
     *
     * @return CustomerOrder
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return integer
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     *
     * @return CustomerOrder
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set orderStatus
     *
     * @param integer $orderStatus
     *
     * @return CustomerOrder
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return integer
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set courier
     *
     * @param string $courier
     *
     * @return CustomerOrder
     */
    public function setCourier($courier)
    {
        $this->courier = $courier;

        return $this;
    }

    /**
     * Get courier
     *
     * @return string
     */
    public function getCourier()
    {
        return $this->courier;
    }

	/**
     * Set orderId
     *
     * @param string $orderId
     *
     * @return CustomerOrder
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }
	
    /**
     * Get orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return CustomerOrder
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
