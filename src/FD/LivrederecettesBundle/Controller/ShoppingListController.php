<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/*use FD\LivrederecettesBundle\Entity\Recipe;
use FD\LivrederecettesBundle\Form\RecipeType;*/

class ShoppingListController extends Controller {
    
    private function getErrorMessages(\Symfony\Component\Form\Form $form)
    {
        $errors = array();

        if ($form->count() > 0) {
            foreach ($form->all() as $child) {
                /**
                * @var \Symfony\Component\Form\Form $child
                */
                if (!$child->isValid()) {
                    $errors[$child->getName()] = $this->getErrorMessages($child);
                }
            }
        } else {
            /**
            * @var \Symfony\Component\Form\FormError $error
            */
            foreach ($form->getErrors() as $key => $error) {
                $errors[] = $error->getMessage();
            }
        }
        
        return $errors;
    }
    
    public function listShoppingListsAction() {
        
    }
    
}
?>
