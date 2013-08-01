<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FD\LivrederecettesBundle\Entity\ProductType;
use FD\LivrederecettesBundle\Form\ProductTypeType;

class ProductTypeController extends Controller
{
    
    public function listProductTypesAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $productTypes_list = $em->getRepository('FDLivrederecettesBundle:ProductType')->findAll();
        
        return $this->render('FDLivrederecettesBundle:ProductType:listProductTypes.html.twig',array('productTypes_list' => $productTypes_list));
    }
    
    public function viewProductTypeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $productType = $em->getRepository('FDLivrederecettesBundle:ProductType')->find($id);
        
        if (is_null($productType))
        {
            $this->get('session')->getFlashBag()->add('error', 'Type de produit [id='.$id.'] inexistant!');
            return $this->redirect( $this->generateUrl('livrederecettes_listProductTypes'));
        }
        
        return $this->render('FDLivrederecettesBundle:ProductType:viewProductType.html.twig', array('productType' => $productType));
    }
    
    public function addProductTypeAction()
    {
        $productType = new ProductType;
        
        $form = $this->createForm(new ProductTypeType(), $productType );
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($productType);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewProductType',array('id' => $productType->getId() )));
            } else
            {
                $errorProcessing = $this->container->get('fd_livrederecettes.errorProcessing');
                $errors = $errorProcessing->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = "livrederecettes_listProductTypes";
        
        return $this->render('FDLivrederecettesBundle:ProductType:addProductType.html.twig', array('form' => $form->createView(), 'productType' => null ,'url_cancel' => $url_cancel));
    }
    
    public function modifyProductTypeAction($id)
    {
        $productTypeRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:ProductType');
        $productType = $productTypeRepository->find($id);
        
        $form = $this->createForm(new ProductTypeType(), $productType);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($productType);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewProductType',array('id' => $productType->getId() )));
            } else
            {
                $errorProcessing = $this->container->get('fd_livrederecettes.errorProcessing');
                $errors = $errorProcessing->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = 'livrederecettes_viewProductType';
        
        return $this->render('FDLivrederecettesBundle:ProductType:modifyProductType.html.twig', array('form' => $form->createView(), 'productType' => $productType, 'url_cancel' => $url_cancel));
    }
    
    public function deleteProductTypeAction($id)
    {
        $productTypeRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:ProductType');
        $productType = $productTypeRepository->find($id);
        
        
        /* Si l'unité n'existe pas, alors une erreur est générée */
        if (is_null($productType))
        {
            $this->get('session')->getFlashBag()->add('error', 'Ce type de produit n\'existe pas!');
            // Puis on redirige vers la liste des types de produit
            return $this->redirect( $this->generateUrl('livrederecettes_listProductTypes'));
        }
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($productType);
                $em->flush();
                // Si la requête est en POST, on supprimera le type de produit
                $this->get('session')->getFlashBag()->add('info', 'Type de produit bien supprimé');
                // Puis on redirige vers la liste des types de produit
                return $this->redirect( $this->generateUrl('livrederecettes_listProductTypes'));
            }
        }
        
        // Si le type de produit est déjà relié à un produit, on ne peut pas l'effacer!
        $productRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Product');
        $product = $productRepository->getProductsByType($productType->getId());
        
        if (count($product) > 0)
        {
            $this->get('session')->getFlashBag()->add('error', 'Un ou plusieurs produits utilisent ce type et il ne peut pas être effacé!');
            return $this->render('FDLivrederecettesBundle:ProductType:viewProductType.html.twig', array('productType' => $productType));
        }
        
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FDLivrederecettesBundle:ProductType:deleteProductType.html.twig', array('productType' => $productType, 'form' => $form->createView()));
    }
}

?>
