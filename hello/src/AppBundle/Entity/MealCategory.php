<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MealCategory
 *
 * @ORM\Table(name="meal_category", uniqueConstraints={@ORM\UniqueConstraint(name="uq_meal_category_category_id", columns={"category_id"})})
 * @ORM\Entity
 */
class MealCategory
{
    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=32, nullable=false)
     * @Assert\Length(
     *      max = 32,
     *      maxMessage = "Category name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotNull()
     * @Assert\NotBlank()
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_desc", type="string", length=64, nullable=true)
     * @Assert\Length(
     *      max = 64,
     *      maxMessage = "Description cannot be longer than {{ limit }} characters"
     * )
     */
    private $categoryDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meal_category_category_id_seq", allocationSize=1, initialValue=1)
     */
    private $categoryId;



    /**
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return MealCategory
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categoryDesc
     *
     * @param string $categoryDesc
     *
     * @return MealCategory
     */
    public function setCategoryDesc($categoryDesc)
    {
        $this->categoryDesc = $categoryDesc;

        return $this;
    }

    /**
     * Get categoryDesc
     *
     * @return string
     */
    public function getCategoryDesc()
    {
        return $this->categoryDesc;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}
