<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;
use FD\LivrederecettesBundle\Entity\Menu;
use FD\LivrederecettesBundle\Entity\Recipe;
use FD\LivrederecettesBundle\Entity\Meal;
use FD\LivrederecettesBundle\Tools\ShoppingListElement;
use FD\LivrederecettesBundle\Tools\ShoppingListCollection;

class ShoppingListController extends Controller {
    
    public function generateShoppingListAction($menuId) {
        
        $em = $this->getDoctrine()->getManager();
        $stringProcessing = $this->container->get('fd_livrederecettes.stringProcessing');
        $menu = new Menu();
        $menu = $em->getRepository('FDLivrederecettesBundle:Menu')->find($menuId);
        
        /*
         * Rechercher tous les ingredients du menu
         * 
         */
        
        /* methode 1 */
        /*$menuIngredientsList = new ArrayCollection();
               
        foreach($menu->getMeals() as $meal) {
            $recipe = new Recipe();
            $recipe = $meal->getRecipe();
            foreach($recipe->getIngredients() as $ingredient) {
                $menuIngredientsList->add($ingredient);
            }
        }*/
        
        /* methode 2 */
        $menuRepository = $em->getRepository('FDLivrederecettesBundle:Menu');
        $menuIngredientsList = $menuRepository->getIngredients($menuId);
        
        /* methode 3 */
        /*$shoppingList = new ShoppingListCollection();
        foreach($menu->getMeals() as $meal) {
            $recipe = new Recipe();
            $recipe = $meal->getRecipe();
            foreach($recipe->getIngredients() as $ingredient) {
                $shoppingListElement = new ShoppingListElement();
                $shoppingListElement->initializeShoppingListElement($ingredient->getProduct()->getName(), 
                                                                $ingredient->getQuantity(),
                                                                $ingredient->getUnit(), 
                                                                $ingredient->getProduct()->getProductType());
                $shoppingList->append($shoppingListElement);
            }
        }*/
        
        $html = $this->renderView('FDLivrederecettesBundle:ShoppingList:shoppingListGeneration.html.twig', array('menu' => $menu, 'ingredients' => $menuIngredientsList));
 
        $html2pdf = new \HTML2PDF('P','A5','fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($html, isset($_GET['vuehtml']));
        
        $filename = $menu->getTitle();
        $filename = preg_replace('/\s+/', '', $filename);
        $filename = $stringProcessing->supprAccents($filename);
        
        $fichier = $html2pdf->Output('Liste_courses_'.$filename.'.pdf');

        $response = new Response();
        $response->clearHttpHeaders();
        $response->setContent(file_get_contents($fichier));
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename='. $fichier);

        return $response;
    }
    
}
?>
