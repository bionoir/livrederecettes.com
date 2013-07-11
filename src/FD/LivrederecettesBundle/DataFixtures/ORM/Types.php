<?php
//src/FD/LivrederecettesBundle/DataFixtures/ORM/Types.php

namespace FD\LivrederecettesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FD\LivrederecettesBundle\Entity\Type;

class Types extends AbstractFixture implements OrderedFixtureInterface {
    
    private $manager;
    
    public function load(ObjectManager $manager) {
        
        $this->manager = $manager;
        
        $this->generateEntities();
        
        $this->manager->flush();
    }
    
    public function getOrder()
    {
        return 1; 
    }
    
    private function generateEntities() {
        
        $types = array('Viande', 'Légume', 'Fruit', 'Poisson', 'Laitier', 'Surgelé', 'Misc');
        $descriptions = array('Boeuf, porc, poulet, agneaux, etc.', 'Poivron, broccoli, tomate, etc.', 
                                'Fraise, framboise, banane, etc.', 'Morue, saumon, thon, etc.',
                                'Lait, yogurt, beurre, fromage, etc.', 'Crevettes, cabillaut, légumes, etc.','Huile, riz, pâtes,etc.');
        
        foreach($types as $i => $type){
            $description = $descriptions[$i];
            $this->newEntity($type, $description, $i);
        }
    }
    
    private function newEntity($value, $descr, $refNb) {
        $en = new Type();
        $en->setValue($value);
        $en->setDescription($descr);
        $this->manager->persist($en);
        
        $this->addReference('productType-' . $refNb, $en);
    }
}
?>
