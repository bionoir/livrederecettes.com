<?php
/**
 * Description of Builder
 *
 * @author fda
 */

//src/FD/LivrederecettesBundle/Menu/Builder.php
namespace FD\LivrederecettesBundle\Menu;

use Knp\Menu\FactoryInterface;

use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {
    
    public function mainMenu(FactoryInterface $factory, array $options) {
        
        $menu = $factory->createItem('root');
        
        $menu->addChild('Home', array('route' => 'homepage'));
        
        $em = $this->container->get('doctrine')->getManager();
        
        return $menu;
    }
    
}

?>
