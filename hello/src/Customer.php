<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", uniqueConstraints={@ORM\UniqueConstraint(name="uq_customer_customer_id", columns={"customer_id"})}, indexes={@ORM\Index(name="ixfk_customer_t_user", columns={"user_id"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="customer_customer_id_seq", allocationSize=1, initialValue=1)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="personal_id", type="string", length=32, nullable=true)
     */
    private $personalId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=32, nullable=false)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_fullname", type="string", length=32, nullable=true)
     */
    private $customerFullname;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_address", type="string", length=128, nullable=true)
     */
    private $customerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=32, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_resto_table", type="boolean", nullable=false)
     */
    private $isRestoTable = false;

    /**
     * @var \TUser
     *
     * @ORM\ManyToOne(targetEntity="TUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}

