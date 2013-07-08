<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FD\LivrederecettesBundle\Entity\Unit;
use FD\LivrederecettesBundle\Form\UnitType;


class UnitController extends Controller
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
    
    public function listUnitsAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $units_list = $em->getRepository('FDLivrederecettesBundle:Unit')->findAll();
        
        return $this->render('FDLivrederecettesBundle:Unit:listUnits.html.twig', array('units_list' => $units_list));
    }
    
    public function viewUnitAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $unit = $em->getRepository('FDLivrederecettesBundle:Unit')->find($id);
        
        if (is_null($unit))
        {
            $this->get('session')->getFlashBag()->add('error', 'Unité[id='.$id.'] inexistante!');
            return $this->redirect( $this->generateUrl('livrederecettes_listUnits'));
        }
        
        return $this->render('FDLivrederecettesBundle:Unit:viewUnit.html.twig', array('unit' => $unit));
    }
    
    public function addUnitAction()
    {
        $unit = new Unit;
        
        $form = $this->createForm(new UnitType(), $unit );
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($unit);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewUnit',array('id' => $unit->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = "livrederecettes_listUnits";
        
        return $this->render('FDLivrederecettesBundle:Unit:addUnit.html.twig', array('form' => $form->createView(), 'unit' => null ,'url_cancel' => $url_cancel));
    }
    
    public function modifyUnitAction($id)
    {
        $unitRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Unit');
        $unit = $unitRepository->find($id);
        
        $form = $this->createForm(new UnitType(), $unit);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($unit);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewUnit',array('id' => $unit->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = 'livrederecettes_viewUnit';
        
        return $this->render('FDLivrederecettesBundle:Unit:modifyUnit.html.twig', array('form' => $form->createView(), 'unit' => $unit, 'url_cancel' => $url_cancel));
    }
    
    public function deleteUnitAction($id)
    {
        $unitRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Unit');
        $unit = $unitRepository->find($id);
        
        
        /* Si l'unité n'existe pas, alors une erreur est générée */
        if (is_null($unit))
        {
            $this->get('session')->getFlashBag()->add('error', 'Unité[id='.$id.'] inexistante!');
            return $this->redirect( $this->generateUrl('livrederecettes_listUnits'));
        }
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($unit);
                $em->flush();
                // Si la requête est en POST, on supprimera l'article
                $this->get('session')->getFlashBag()->add('info', 'Unité bien supprimée');
                // Puis on redirige vers la liste des unités
                return $this->redirect( $this->generateUrl('livrederecettes_listUnits'));
            }
        }
        
        // Si l'unité est déjà reliée à un ingrendient, on ne peut pas l'effacer!
        $ingrendientRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Ingredient');
        $ingredient = $ingrendientRepository->getIngredientsByUnit($unit->getId());
        
        if (count($ingredient) > 0)
        {
            $this->get('session')->getFlashBag()->add('error', 'Unité[id='.$id.'] est utilisée par des ingredients et elle ne peut donc pas être effacée!');
            return $this->render('FDLivrederecettesBundle:Unit:viewUnit.html.twig', array('unit' => $unit));
        }
        
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FDLivrederecettesBundle:Unit:deleteUnit.html.twig', array('unit' => $unit, 'form' => $form->createView()));
    }
}
?>
