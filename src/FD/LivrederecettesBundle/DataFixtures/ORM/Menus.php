<?php
//src/FD/LivrederecettesBundle/DataFixtures/ORM/Units.php

namespace FD\LivrederecettesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FD\LivrederecettesBundle\Entity\Menu;
use FD\LivrederecettesBundle\Entity\Meal;

class Menus extends AbstractFixture implements OrderedFixtureInterface {
    
    private $manager;
    
    public function load(ObjectManager $manager) {
        
        $this->manager = $manager;
        
        $this->generateEntities();
        
        $this->manager->flush();
    }
    
    public function getOrder()
    {
        return 6;
    }
    
    private function generateEntities() {
        
        $titles = array('Menu 1');
        
        
        foreach($titles as $i => $title){
            
            $this->newEntity($title, $i);
        }
    }
    
    private function newEntity($title, $refNb) {
        $en = new Menu();
        $en->setTitle($title);
        $en->setDated(false);
        $en->setDateFrom(null);
        $en->setDateTo(null);
        
        $meal1 = new Meal();
        $meal1->setMealType($this->getReference('mealType-0'));
        $meal1->setRecipe($this->getReference('recipe-0'));
        $meal1->setMenu($en);
        
        $en->addMeal($meal1);
        
        $meal2 = new Meal();
        $meal2->setMealType($this->getReference('mealType-1'));
        $meal2->setRecipe($this->getReference('recipe-1'));
        $meal2->setMenu($en);
        
        $en->addMeal($meal2);
        
        $meal3 = new Meal();
        $meal3->setMealType($this->getReference('mealType-2'));
        $meal3->setRecipe($this->getReference('recipe-2'));
        $meal3->setMenu($en);
        
        $en->addMeal($meal3);
        
        $this->manager->persist($meal1);
        $this->manager->persist($meal2);
        $this->manager->persist($meal3);
        $this->manager->persist($en);
        
        $this->addReference('menu-' . $refNb, $en);
    }
}
?>
