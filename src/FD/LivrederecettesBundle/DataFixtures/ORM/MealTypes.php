<?php
//src/FD/LivrederecettesBundle/DataFixtures/ORM/Types.php

namespace FD\LivrederecettesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FD\LivrederecettesBundle\Entity\MealType;

class MealTypes extends AbstractFixture implements OrderedFixtureInterface {
    
    private $manager;
    
    public function load(ObjectManager $manager) {
        
        $this->manager = $manager;
        
        $this->generateEntities();
        
        $this->manager->flush();
    }
    
    public function getOrder()
    {
        return 5; 
    }
    
    private function generateEntities() {
        
        $names = array('Petit Déjeuner', 'Collation', 'Diner', 'Gouter', 'Souper');
                
        foreach($names as $i => $name){
            $this->newEntity($name, $i);
        }
    }
    
    private function newEntity($name, $refNb) {
        $en = new MealType();
        $en->setName($name);
        $this->manager->persist($en);
        
        $this->addReference('mealType-' . $refNb, $en);
    }
}
?>
