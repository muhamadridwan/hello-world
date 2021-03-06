<?php



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
     * @var integer
     *
     * @ORM\Column(name="order_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="customer_order_order_id_seq", allocationSize=1, initialValue=1)
     */
    private $orderId = '"customer_order_order_id_seq"';

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
     * @ORM\Column(name="confirmed_by", type="string", length=32, nullable=true)
     */
    private $confirmedBy;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id")
     * })
     */
    private $customer;


}

