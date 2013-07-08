<?php

namespace FD\LivrederecettesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FD\LivrederecettesBundle\Entity\MenuRepository")
 */
class Menu
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dated", type="boolean")
     */
    private $dated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="date", nullable=true)
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="date", nullable=true)
     */
    private $dateTo;
    
    
    /**
     * @var meals
     * 
     * @ORM\OneToMany(targetEntity="FD\LivrederecettesBundle\Entity\Meal", mappedBy="menu", cascade={"persist", "merge"})
     */
    private $meals;
    
    
    /**
     * Override construtor for collecion of meals
     */
    public function __construct() {
        $this->meals = new ArrayCollection();
    }
    
    /**
     * 
     * @param \FD\LivrederecettesBundle\Entity\Meal $meal
     */
    public function addMeal(\FD\LivrederecettesBundle\Entity\Meal $meal) {
        $meal->setMenu($this);
        
        if (!$this->meals->contains($meal)) {
            $this->meals->add($meal);
        }
    }
    
    /**
     * Remove meal
     *
     * @param \FD\LivrederecettesBundle\Entity\Meal $meal
     */
    public function removeMeal(\FD\LivrederecettesBundle\Entity\Meal $meal)    {
        
        $this->meals->removeElement($meal);
    }
    
    
    /**
     * Get meals
     * 
     * @return type
     */
    public function getMeals() {
        return $this->meals;
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
     * @return Menu
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
     * Set dated
     *
     * @param boolean $dated
     * @return Menu
     */
    public function setDated($dated)
    {
        $this->dated = $dated;
    
        return $this;
    }

    /**
     * Get dated
     *
     * @return boolean 
     */
    public function getDated()
    {
        return $this->dated;
    }

    /**
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return Menu
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
    
        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     * @return Menu
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
    
        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }
    
    
    /**
     * 
     * @return \FD\LivrederecettesBundle\Entity\Menu
     */
    public function createCopy()
    {
        $copyMenu= new Menu();
        
        $copyMenu->setTitle($this->getTitle());
        $copyMenu->setDated($this->getDated());
        $copyMenu->setDateFrom($this->getDateFrom());
        $copyMenu->setDateTo($this->getDateTo());
                
        foreach ($this->getMeals() as $meal) {
            $copyMenu->addMeal(clone $meal);
        }
        
        return $copyMenu;
    }
    
    /**
     * 
     * @param type $mealId
     * @return boolean
     */
    public function containsMeal($mealId) {
        
        $meal_found = false;
        
        foreach ($this->getMeals() as $meal){
            if ($meal->getId() === $mealId){
                $meal_found = true;
                break;
            }
        }
                
        return $meal_found;
    }
}
