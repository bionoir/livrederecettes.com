<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use FD\LivrederecettesBundle\Entity\Recipe;
use FD\LivrederecettesBundle\Form\RecipeType;

class RecipeController extends Controller
{
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
    
    public function listRecipiesAction() {
        
        $em = $this->getDoctrine()->getManager();
        
        $recipies_list = $em->getRepository('FDLivrederecettesBundle:Recipe')->findAll();
        
        return $this->render('FDLivrederecettesBundle:Recipe:listRecipies.html.twig',array('recipies_list' => $recipies_list));
    }
    
    public function viewRecipeAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        
        $recipe = $em->getRepository('FDLivrederecettesBundle:Recipe')->find($id);
        
        if (is_null($recipe))
        {
            $this->get('session')->getFlashBag()->add('error', 'Recette [id='.$id.'] inexistante!');
            return $this->redirect( $this->generateUrl('livrederecettes_listRecipies'));
        }
        
        $ingredients = $recipe->getIngredients();
        
        return $this->render('FDLivrederecettesBundle:Recipe:viewRecipe.html.twig', array('recipe' => $recipe, 'ingredients' => $ingredients ));
    }
    
    public function addRecipeAction() {
        
        $recipe = new Recipe;
        
        $form = $this->createForm(new RecipeType(), $recipe );
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($recipe);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewRecipe',array('id' => $recipe->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        return $this->render('FDLivrederecettesBundle:Recipe:addRecipe.html.twig', array('form' => $form->createView()));
    }
    
    public function modifyRecipeAction($id) {
        
        $recipeRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Recipe');
        $recipe = $recipeRepository->find($id);
        
        $form = $this->createForm(new RecipeType(), $recipe);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($recipe);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewRecipe',array('id' => $recipe->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
         
        return $this->render('FDLivrederecettesBundle:Recipe:modifyRecipe.html.twig', array('form' => $form->createView(), 'recipe' => $recipe));
    }
    
    public function deleteRecipeAction($id) {
        
        $recipeRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Recipe');
        $recipe = $recipeRepository->find($id);
        
        
        /* Si la recette n'existe pas, alors une erreur est générée */
        if (is_null($recipe))
        {
            $this->get('session')->getFlashBag()->add('error', 'Recette [id='.$id.'] inexistante!');
            return $this->redirect( $this->generateUrl('livrederecettes_listRecipies'));
        }
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST')
        {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($recipe);
                $em->flush();
                // Si la requête est en POST, on supprimera la recette
                $this->get('session')->getFlashBag()->add('info', 'La recette a été bien supprimée');
                // Puis on redirige vers la liste des types de produit
                return $this->redirect( $this->generateUrl('livrederecettes_listRecipies'));
            }
        }
        
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FDLivrederecettesBundle:Recipe:deleteRecipe.html.twig', array('recipe' => $recipe, 'form' => $form->createView()));
    }
}
?>
