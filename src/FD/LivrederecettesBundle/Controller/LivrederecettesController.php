<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LivrederecettesController extends Controller
{
    public function menuAction()
    {
        $liste_recettes = array(
                        array('id' => 2, 'titre' => 'Gateaux chocolat !'),
                        array('id' => 5, 'titre' => 'Pizza'),
                        array('id' => 9, 'titre' => 'Patates')
                 );
        
        return $this->render('FDLivrederecettesBundle:Livrederecettes:menu.html.twig', array('liste_recettes' => $liste_recettes ));
}
    
    public function homepageAction()
    {
        // Les recettes :
        $liste_recettes = array(
                            array('titre' => 'Mon weekend a Phi Phi Island !', 
                                  'id'=> 1, 
                                  'auteur' => 'winzou', 
                                  'contenu' => 'Ce weekend était trop bien. Blabla…', 
                                  'date' => new \Datetime()),
                            array('titre' => 'Repetition du National Day de Singapour', 
                                  'id' => 2, 
                                  'auteur' => 'winzou', 
                                  'contenu' => 'Bientôt prêt pour le jour J. Blabla…', 
                                  'date' => new \Datetime()),
                            array('titre' => 'Chiffre d\'affaire en hausse', 
                                  'id'=> 3, 
                                  'auteur' => 'M@teo21', 
                                  'contenu' => '+500% sur 1 an, fabuleux. Blabla…', 
                                  'date' => new \Datetime())
                    );
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
        return $this->render('FDLivrederecettesBundle:Livrederecettes:homepage.html.twig', array('liste_recettes' => $liste_recettes));
    }
    
    public function addIngredientAction()
    {
        return $this->render('FDLivrederecettesBundle:Livrederecettes:homepage.html.twig');
    }
    
    public function addRecipeAction()
    {
        return $this->render('FDLivrederecettesBundle:Livrederecettes:homepage.html.twig');
    }
    
    public function listRecipiesAction()
    {
        return $this->render('FDLivrederecettesBundle:Livrederecettes:homepage.html.twig');
    }
    
    public function viewRecipeAction($id)
    {
        return $this->render('FDLivrederecettesBundle:Livrederecettes:homepage.html.twig');
    }
    
 
}

?>
