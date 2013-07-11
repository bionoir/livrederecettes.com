<?php
//src/FD/LivrederecettesBundle/DataFixtures/ORM/Units.php

namespace FD\LivrederecettesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FD\LivrederecettesBundle\Entity\Unit;

class Units extends AbstractFixture implements OrderedFixtureInterface {
    
    private $manager;
    
    public function load(ObjectManager $manager) {
        
        $this->manager = $manager;
        
        $this->generateEntities();
        
        $this->manager->flush();
    }
    
    public function getOrder()
    {
        return 2; 
    }
    
    private function generateEntities() {
        
        $values = array('gr', 'Kg', 'ml', 'cl', 'dl', 'L', 'cc', 'cs', 'pce');
        $names = array('gramme', 'Kilogramme', 'millilitre', 'centilitre', 'décilitre', 'Litre', 'cuillère à café', 'cuillère à soupe', 'pièce');
        
        foreach($values as $i => $value){
            $name = $names[$i];
            $this->newEntity($value, $name, $i);
        }
    }
    
    private function newEntity($value, $name, $refNb) {
        $en = new Unit();
        $en->setValue($value);
        $en->setName($name);
        $this->manager->persist($en);
        
        $this->addReference('unit-' . $refNb, $en);
    }
}

?>
