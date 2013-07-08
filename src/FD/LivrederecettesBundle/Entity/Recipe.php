<?php

namespace FD\LivrederecettesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Recipe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FD\LivrederecettesBundle\Entity\RecipeRepository")
 */
class Recipe
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
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Difficulty", type="string", length=255)
     */
    private $difficulty;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Preparation", type="time")
     */
    private $preparation;

    /**
     * @var ingredients
     * 
     * @ORM\OneToMany(targetEntity="FD\LivrederecettesBundle\Entity\Ingredient", mappedBy="recipe", cascade={"persist", "merge"})
     */
    private $ingredients;
    
    
    public function __construct() {
        $this->ingredients = new ArrayCollection();
    }
    
    public function addIngredient(\FD\LivrederecettesBundle\Entity\Ingredient $ingredient) {
        $ingredient->setRecipe($this);
        
        if (!$this->ingredients->contains($ingredient)) {
            $this->ingredients->add($ingredient);
        }
    }
    
    /**
     * Remove ingredient
     *
     * @param \FD\LivrederecettesBundle\Entity\Ingredient $ingredient
     */
    public function removeIngredient(\FD\LivrederecettesBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients->removeElement($ingredient);
    }
    
    
    /**
     * 
     * @return type
     */
    public function getIngredients() {
        return $this->ingredients;
    }
    
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
     * Set title
     *
     * @param string $title
     * @return Recipe
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set difficulty
     *
     * @param string $difficulty
     * @return Recipe
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    
        return $this;
    }

    /**
     * Get difficulty
     *
     * @return string 
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set preparation
     *
     * @param \DateTime $preparation
     * @return Recipe
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;
    
        return $this;
    }

    /**
     * Get preparation
     *
     * @return \DateTime 
     */
    public function getPreparation()
    {
        return $this->preparation;
    }
    
    /**
     * 
     * @return \FD\LivrederecettesBundle\Entity\Recipe
     */
    public function createCopy()
    {
        $copyRecipe = new Recipe();
        
        $copyRecipe->setDescription($this->getDescription());
        $copyRecipe->setDifficulty($this->getDifficulty());
        $copyRecipe->setPreparation($this->getPreparation());
        $copyRecipe->setTitle($this->getTitle());
                
        foreach ($this->getIngredients() as $ingredient) {
            $copyRecipe->addIngredient(clone $ingredient);
        }
        
        return $copyRecipe;
    }
    
    /**
     * 
     * @param type $ingredientId
     * @return boolean
     */
    public function containsIngredient($ingredientId) {
        
        $ingredient_found = false;
        
        foreach ($this->getIngredients() as $ingredient){
            if ($ingredient->getId() === $ingredientId){
                $ingredient_found = true;
                break;
            }
        }
                
        return $ingredient_found;
    }
}