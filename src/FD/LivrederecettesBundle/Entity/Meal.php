<?php

namespace FD\LivrederecettesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meal
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FD\LivrederecettesBundle\Entity\MealRepository")
 */
class Meal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="FD\LivrederecettesBundle\Entity\Recipe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe;
    
    /**
     * @ORM\ManyToOne(targetEntity="FD\LivrederecettesBundle\Entity\MealType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mealType;
    
    /**
     * @ORM\ManyToOne(targetEntity="FD\LivrederecettesBundle\Entity\Menu", inversedBy="meals")
     * @ORM\JoinColumn(name="menu_id", referencedColumnName="id", nullable=false)
     */
    private $menu;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    
    /**
     * Set recipe
     *
     * @param \FD\LivrederecettesBundle\Entity\Recipe $recipe
     * @return Meal
     */
    public function setRecipe(\FD\LivrederecettesBundle\Entity\Recipe $recipe)
    {
        $this->recipe = $recipe;
    
        return $this;
    }

    /**
     * Get recipe
     *
     * @return \FD\LivrederecettesBundle\Entity\Recipe 
     */
    public function getRecipe()
    {
        return $this->recipe;
    }
    
    
    /**
     * Set mealType
     *
     * @param \FD\LivrederecettesBundle\Entity\MealType $mealType
     * @return Meal
     */
    public function setMealType(\FD\LivrederecettesBundle\Entity\MealType $mealType)
    {
        $this->mealType = $mealType;
    
        return $this;
    }

    /**
     * Get mealType
     *
     * @return \FD\LivrederecettesBundle\Entity\MealType 
     */
    public function getMealType()
    {
        return $this->mealType;
    }
    
    /**
     * Set menu
     *
     * @param \FD\LivrederecettesBundle\Entity\Menu $menu
     * @return Meal
     */
    public function setMenu(\FD\LivrederecettesBundle\Entity\Menu $menu)
    {
        $this->menu = $menu;
    
        return $this;
    }

    /**
     * Get menu
     *
     * @return \FD\LivrederecettesBundle\Entity\Menu 
     */
    public function getMenu()
    {
        return $this->menu;
    }
}
