<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Meal
 *
 * @ORM\Table(name="meal", uniqueConstraints={@ORM\UniqueConstraint(name="uq_meal_meal_id", columns={"meal_id"})}, indexes={@ORM\Index(name="ixfk_meal_meal_category", columns={"category_id"})})
 * @ORM\Entity
 */
class Meal
{
    /**
     * @var string
     *
     * @ORM\Column(name="meal_name", type="string", length=32, nullable=false)
     * @Assert\Length(
     *      max = 32,
     *      maxMessage = "Meal name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotNull(
     *      message="Meal name should not be null."
     * )
     * @Assert\NotBlank(
     *      message="Meal name should not be blank."
     * )
     */
    private $mealName;

    /**
     * @var string
     *
     * @ORM\Column(name="meal_desc", type="string", length=500, nullable=true)
     * @Assert\Length(
     *      max = 500,
     *      maxMessage = "Meal name cannot be longer than {{ limit }} characters"
     * )
     */
    private $mealDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="meal_desc_indo", type="string", length=64, nullable=true)
     * @Assert\Length(
     *      max = 64,
     *      maxMessage = "Meal name cannot be longer than {{ limit }} characters"
     * )
     */
    private $mealDescIndo;

    /**
     * @var integer
     *
     * @ORM\Column(name="meal_price", type="integer", nullable=false)
     * @Assert\Type(
     *     type="integer",
     *     message="Price is not a valid {{ type }}."
     * )
     * @Assert\NotNull(
     *      message="Price should not be null."
     * )
     * @Assert\NotBlank(
     *      message="Price should not be blank."
     * )
     * @Assert\GreaterThanOrEqual(
     *     value = 0,
     *     message="Price must be greater or equal 0."
     * )
     */
    private $mealPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="discount", type="integer", nullable=true)
     * @Assert\Type(
     *     type="integer",
     *     message="Discount is not a valid {{ type }}."
     * )
     * @Assert\GreaterThanOrEqual(
     *     value = 0,
     *     message="Discount must be greater or equal 0."
     * )
     */
    private $discount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     * @Assert\Length(
     *      max = 200,
     *      maxMessage = "Meal name cannot be longer than {{ limit }} characters"
     * )
     */
    private $picture;

    /**
     * @var integer
     *
     * @ORM\Column(name="meal_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meal_meal_id_seq", allocationSize=1, initialValue=1)
     */
    private $mealId;

    /**
     * @var \AppBundle\Entity\MealCategory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MealCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;



    /**
     * Set mealName
     *
     * @param string $mealName
     *
     * @return Meal
     */
    public function setMealName($mealName)
    {
        $this->mealName = $mealName;

        return $this;
    }

    /**
     * Get mealName
     *
     * @return string
     */
    public function getMealName()
    {
        return $this->mealName;
    }

    /**
     * Set mealDesc
     *
     * @param string $mealDesc
     *
     * @return Meal
     */
    public function setMealDesc($mealDesc)
    {
        $this->mealDesc = $mealDesc;

        return $this;
    }

    /**
     * Get mealDesc
     *
     * @return string
     */
    public function getMealDesc()
    {
        return $this->mealDesc;
    }

    /**
     * Set mealDescIndo
     *
     * @param string $mealDescIndo
     *
     * @return Meal
     */
    public function setMealDescIndo($mealDescIndo)
    {
        $this->mealDescIndo = $mealDescIndo;

        return $this;
    }

    /**
     * Get mealDescIndo
     *
     * @return string
     */
    public function getMealDescIndo()
    {
        return $this->mealDescIndo;
    }

    /**
     * Set mealPrice
     *
     * @param integer $mealPrice
     *
     * @return Meal
     */
    public function setMealPrice($mealPrice)
    {
        $this->mealPrice = $mealPrice;

        return $this;
    }

    /**
     * Get mealPrice
     *
     * @return integer
     */
    public function getMealPrice()
    {
        return $this->mealPrice;
    }

    /**
     * Set discount
     *
     * @param integer $discount
     *
     * @return Meal
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return integer
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Meal
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Get mealId
     *
     * @return integer
     */
    public function getMealId()
    {
        return $this->mealId;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\MealCategory $category
     *
     * @return Meal
     */
    public function setCategory(\AppBundle\Entity\MealCategory $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\MealCategory
     */
    public function getCategory()
    {
        return $this->category;
    }
}
