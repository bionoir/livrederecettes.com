<?php
//src/FD/LivrederecettesBundle/DataFixtures/ORM/Units.php

namespace FD\LivrederecettesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FD\LivrederecettesBundle\Entity\Recipe;
use FD\LivrederecettesBundle\Entity\Ingredient;
use \DateTime;

class Recipies extends AbstractFixture implements OrderedFixtureInterface {
    
    private $manager;
    
    public function load(ObjectManager $manager) {
        
        $this->manager = $manager;
        
        $this->generateEntities();
        
        $this->manager->flush();
    }
    
    public function getOrder()
    {
        return 4;
    }
    
    private function generateEntities() {
        
        $titles = array('Fraises beurk', 'Asperges beurk', 'Bananes au saumon', 'Huile de fraise', 'Broccoli aux framboises');
        $descriptions = array('Mouoahahahaah', 'Vous allez en vomir!', 'Deguelasse mais bon', 'Craaaaaaaaaaade', 'Bievenues aux chiottes');
        $difficulties = array('Facile', 'Très facile', 'Moyen', 'Expert', 'PGM');
        $preparations = array(new DateTime('2000-01-01 00:15:00'),new DateTime('2000-01-01 02:15:00'),new DateTime('2000-01-01 01:30:00'),
                                new DateTime('2000-01-01 00:45:00'),new DateTime('2000-01-01 00:25:00'));
        
        foreach($titles as $i => $title){
            $description = $descriptions[$i];
            $difficulty = $difficulties[$i];
            $preparation = $preparations[$i];
            $this->newEntity($title, $description, $difficulty, $preparation, $i);
        }
    }
    
    private function newEntity($title, $description, $difficulty, $preparation, $refNb) {
        $en = new Recipe();
        $en->setTitle($title);
        $en->setDescription($description);
        $en->setDifficulty($difficulty);
        $en->setPreparation($preparation);
        
        $ingr1 = new Ingredient();
        $ingr1->setQuantity(1.0);
        $ingr1->setProduct($this->getReference('product-0'));
        $ingr1->setUnit($this->getReference('unit-0'));
        $ingr1->setRecipe($en);
        $en->addIngredient($ingr1);
        
        $ingr2 = new Ingredient();
        $ingr2->setQuantity(2.0);
        $ingr2->setProduct($this->getReference('product-1'));
        $ingr2->setUnit($this->getReference('unit-1'));
        $ingr2->setRecipe($en);
        $en->addIngredient($ingr2);
        
        $ingr3 = new Ingredient();
        $ingr3->setQuantity(3.0);
        $ingr3->setProduct($this->getReference('product-2'));
        $ingr3->setUnit($this->getReference('unit-2'));
        $ingr3->setRecipe($en);
        $en->addIngredient($ingr3);
        
        $this->manager->persist($ingr1);
        $this->manager->persist($ingr2);
        $this->manager->persist($ingr3);
        $this->manager->persist($en);
        
        $this->addReference('recipe-' . $refNb, $en);
    }
}

?>