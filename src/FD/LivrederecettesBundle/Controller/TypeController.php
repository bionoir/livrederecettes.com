<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FD\LivrederecettesBundle\Entity\Type;
use FD\LivrederecettesBundle\Form\TypeType;

class TypeController extends Controller
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
    
    public function listTypesAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $types_list = $em->getRepository('FDLivrederecettesBundle:Type')->findAll();
        
        return $this->render('FDLivrederecettesBundle:Type:listTypes.html.twig',array('types_list' => $types_list));
    }
    
    public function viewTypeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $type = $em->getRepository('FDLivrederecettesBundle:Type')->find($id);
        
        if (is_null($type))
        {
            $this->get('session')->getFlashBag()->add('error', 'Type de produit [id='.$id.'] inexistant!');
            return $this->redirect( $this->generateUrl('livrederecettes_listTypes'));
        }
        
        return $this->render('FDLivrederecettesBundle:Type:viewType.html.twig', array('type' => $type));
    }
    
    public function addTypeAction()
    {
        $type = new Type;
        
        $form = $this->createForm(new TypeType(), $type );
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($type);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewType',array('id' => $type->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = "livrederecettes_listTypes";
        
        return $this->render('FDLivrederecettesBundle:Type:addType.html.twig', array('form' => $form->createView(), 'type' => null ,'url_cancel' => $url_cancel));
    }
    
    public function modifyTypeAction($id)
    {
        $typeRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Type');
        $type = $typeRepository->find($id);
        
        $form = $this->createForm(new TypeType(), $type);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($type);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewType',array('id' => $type->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = 'livrederecettes_viewType';
        
        return $this->render('FDLivrederecettesBundle:Type:modifyType.html.twig', array('form' => $form->createView(), 'type' => $type, 'url_cancel' => $url_cancel));
    }
    
    public function deleteTypeAction($id)
    {
        $typeRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Type');
        $type = $typeRepository->find($id);
        
        
        /* Si l'unité n'existe pas, alors une erreur est générée */
        if (is_null($type))
        {
            $this->get('session')->getFlashBag()->add('error', 'Ce type n\'existe pas!');
            // Puis on redirige vers la liste des types de produit
            return $this->redirect( $this->generateUrl('livrederecettes_listTypes'));
        }
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($type);
                $em->flush();
                // Si la requête est en POST, on supprimera le type de produit
                $this->get('session')->getFlashBag()->add('info', 'Type de produit bien supprimé');
                // Puis on redirige vers la liste des types de produit
                return $this->redirect( $this->generateUrl('livrederecettes_listTypes'));
            }
        }
        
        // Si le type de produit est déjà relié à un produit, on ne peut pas l'effacer!
        $productRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Product');
        $product = $productRepository->getProductsByType($type->getId());
        
        if (count($product) > 0)
        {
            $this->get('session')->getFlashBag()->add('error', 'Un ou plusieurs produits utilisent ce type et il ne peut pas être effacé!');
            return $this->render('FDLivrederecettesBundle:Type:viewType.html.twig', array('type' => $type));
        }
        
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FDLivrederecettesBundle:Type:deleteType.html.twig', array('type' => $type, 'form' => $form->createView()));
    }
}

?>
