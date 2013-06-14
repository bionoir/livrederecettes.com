<?php

namespace FD\LivrederecettesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FD\LivrederecettesBundle\Entity\IngredientRepository")
 */
class Ingredient
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
     * @var float
     *
     * @ORM\Column(name="Quantity", type="float")
     */
    private $quantity;
    
    /**
     * @ORM\ManyToOne(targetEntity="FD\LivrederecettesBundle\Entity\Recipe", inversedBy="ingredients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe;
    
    /**
     * @ORM\ManyToOne(targetEntity="FD\LivrederecettesBundle\Entity\Product")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;
    
    /**
     * @ORM\ManyToOne(targetEntity="FD\LivrederecettesBundle\Entity\Unit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unit;

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
     * Set quantity
     *
     * @param float $quantity
     * @return Ingredient
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    
    

    /**
     * Set recipe
     *
     * @param \FD\LivrederecettesBundle\Entity\Recipe $recipe
     * @return Ingredient
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
     * Set product
     *
     * @param \FD\LivrederecettesBundle\Entity\Product $product
     * @return Ingredient
     */
    public function setProduct(\FD\LivrederecettesBundle\Entity\Product $product)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \FD\LivrederecettesBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set unit
     *
     * @param \FD\LivrederecettesBundle\Entity\Unit $unit
     * @return Ingredient
     */
    public function setUnit(\FD\LivrederecettesBundle\Entity\Unit $unit)
    {
        $this->unit = $unit;
    
        return $this;
    }

    /**
     * Get unit
     *
     * @return \FD\LivrederecettesBundle\Entity\Unit 
     */
    public function getUnit()
    {
        return $this->unit;
    }
}