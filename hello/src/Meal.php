<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Meal
 *
 * @ORM\Table(name="meal", uniqueConstraints={@ORM\UniqueConstraint(name="uq_meal_category_id", columns={"category_id"}), @ORM\UniqueConstraint(name="uq_meal_meal_id", columns={"meal_id"})}, indexes={@ORM\Index(name="ixfk_meal_meal_category", columns={"category_id"})})
 * @ORM\Entity
 */
class Meal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="meal_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meal_meal_id_seq", allocationSize=1, initialValue=1)
     */
    private $mealId = '"meal_meal_id_seq"';

    /**
     * @var string
     *
     * @ORM\Column(name="meal_name", type="string", length=32, nullable=false)
     */
    private $mealName;

    /**
     * @var string
     *
     * @ORM\Column(name="meal_desc", type="string", length=64, nullable=true)
     */
    private $mealDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="meal_desc_indo", type="string", length=64, nullable=true)
     */
    private $mealDescIndo;

    /**
     * @var integer
     *
     * @ORM\Column(name="meal_price", type="integer", nullable=false)
     */
    private $mealPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="discount", type="integer", nullable=true)
     */
    private $discount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var \MealCategory
     *
     * @ORM\ManyToOne(targetEntity="MealCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;


}

