<?php
//src/FD/LivrederecettesBundle/DataFixtures/ORM/Units.php

namespace FD\LivrederecettesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FD\LivrederecettesBundle\Entity\Product;
use \DateTime;

class Products extends AbstractFixture implements OrderedFixtureInterface {
    
    private $manager;
    
    public function load(ObjectManager $manager) {
        
        $this->manager = $manager;
        
        $this->generateEntities();
        
        $this->manager->flush();
    }
    
    public function getOrder()
    {
        return 3; 
    }
    
    private function generateEntities() {
        
        $names = array('Fraises', 'Asperges', 'Bananes', 'Broccolis', 'Aubergines', 'Framboises', 'Yogurt Mocca', 'Huile colza', 'Saumon');
        $startDates = array(new DateTime('2000-06-01'),new DateTime('2000-04-01'),new DateTime('2000-01-01'),new DateTime('2000-01-01'),new DateTime('2000-01-01'),new DateTime('2000-06-01'),new DateTime('2000-01-01'),new DateTime('2000-01-01'),new DateTime('2000-01-01'));
        $endDates =   array(new DateTime('2000-08-01'),new DateTime('2000-05-01'),new DateTime('2000-12-31'),new DateTime('2000-12-31'),new DateTime('2000-12-31'),new DateTime('2000-07-01'),new DateTime('2000-12-31'),new DateTime('2000-12-31'),new DateTime('2000-12-31'));
        $productTypes = array('2', '1', '2', '1', '1', '2', '4', '6', '0');
        
        foreach($names as $i => $name){
            $startDate = $startDates[$i];
            $endDate = $endDates[$i];
            $prodType = $productTypes[$i];
            $this->newEntity($name, $startDate, $endDate, $prodType, $i);
        }
    }
    
    private function newEntity($name, $startDate, $endDate, $prodType, $refNb) {
        $en = new Product();
        $en->setName($name);
        $en->setSeasonStart($startDate);
        $en->setSeasonEnd($endDate);
        $en->setType($this->getReference('productType-' . $prodType));
        $this->manager->persist($en);
        
        $this->addReference('product-' . $refNb, $en);
    }
}

?>
