<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FD\LivrederecettesBundle\Entity\MealType;
use FD\LivrederecettesBundle\Form\MealTypeType;

class MealTypeController extends Controller
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
    
    public function listMealTypesAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $listMealTypes = $em->getRepository('FDLivrederecettesBundle:MealType')->findAll();
        
        return $this->render('FDLivrederecettesBundle:MealType:listMealTypes.html.twig',array('listMealTypes' => $listMealTypes));
    }
    
    public function viewMealTypeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $mealType = $em->getRepository('FDLivrederecettesBundle:MealType')->find($id);
        
        if (is_null($mealType))
        {
            $this->get('session')->getFlashBag()->add('error', 'Type de repas [id='.$id.'] inexistant!');
            return $this->redirect( $this->generateUrl('livrederecettes_listMealTypes'));
        }
        
        return $this->render('FDLivrederecettesBundle:MealType:viewMealType.html.twig', array('mealType' => $mealType));
    }
    
    public function addMealTypeAction()
    {
        $mealType = new MealType;
        
        $form = $this->createForm(new MealTypeType(), $mealType );
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($mealType);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewMealType',array('id' => $mealType->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = "livrederecettes_listMealTypes";
        
        return $this->render('FDLivrederecettesBundle:MealType:addMealType.html.twig', array('form' => $form->createView(), 'mealType' => null ,'url_cancel' => $url_cancel));
    }
    
    public function modifyTypeAction($id)
    {
        $typeRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:MealType');
        $mealType = $typeRepository->find($id);
        
        $form = $this->createForm(new MealTypeType(), $mealType);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($mealType);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewMealType',array('id' => $mealType->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = 'livrederecettes_viewMealType';
        
        return $this->render('FDLivrederecettesBundle:MealType:modifyMealType.html.twig', array('form' => $form->createView(), 'mealType' => $mealType, 'url_cancel' => $url_cancel));
    }
    
    public function deleteTypeAction($id)
    {
        $typeRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:MealType');
        $mealType = $typeRepository->find($id);
        
        
        /* Si l'unité n'existe pas, alors une erreur est générée */
        if (is_null($mealType))
        {
            $this->get('session')->getFlashBag()->add('error', 'Ce type n\'existe pas!');
            // Puis on redirige vers la liste des types de repas
            return $this->redirect( $this->generateUrl('livrederecettes_listMealTypes'));
        }
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($mealType);
                $em->flush();
                // Si la requête est en POST, on supprimera le type de produit
                $this->get('session')->getFlashBag()->add('info', 'Type de repas bien supprimé');
                // Puis on redirige vers la liste des types de produit
                return $this->redirect( $this->generateUrl('livrederecettes_listMealTypes'));
            }
        }
        
        // Si le type de repas est déjà relié à un repas, on ne peut pas l'effacer!
        $mealRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Meal');
        $meal = $mealRepository->getMealByType($mealType->getId());
        
        if (count($meal) > 0)
        {
            $this->get('session')->getFlashBag()->add('error', 'Un ou plusieurs repas utilisent ce type et il ne peut pas être effacé!');
            return $this->render('FDLivrederecettesBundle:MealType:viewMealType.html.twig', array('mealType' => $mealType));
        }
        
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FDLivrederecettesBundle:MealType:deleteMealType.html.twig', array('mealType' => $mealType, 'form' => $form->createView()));
    }
}

?>
