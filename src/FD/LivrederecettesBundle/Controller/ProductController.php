<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FD\LivrederecettesBundle\Entity\Product;
use FD\LivrederecettesBundle\Form\ProductType;

class ProductController extends Controller
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
    
    public function listProductsAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $products_list = $em->getRepository('FDLivrederecettesBundle:Product')->findAll();
        
        return $this->render('FDLivrederecettesBundle:Product:listProducts.html.twig',array('products_list' => $products_list));
    }
    
    public function viewProductAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $product = $em->getRepository('FDLivrederecettesBundle:Product')->find($id);
        
        if (is_null($product))
        {
            $this->get('session')->getFlashBag()->add('error', 'Produit [id='.$id.'] inexistant!');
            return $this->redirect( $this->generateUrl('livrederecettes_listProducts'));
        }
        
        return $this->render('FDLivrederecettesBundle:Product:viewProduct.html.twig', array('product' => $product));
    }
    
    public function addProductAction()
    {
        $product = new Product;
        
        $form = $this->createForm(new ProductType(), $product );
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($product);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewProduct',array('id' => $product->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = "livrederecettes_listProducts";
        
        return $this->render('FDLivrederecettesBundle:Product:addProduct.html.twig', array('form' => $form->createView(), 'product' => null ,'url_cancel' => $url_cancel));
    }
    
    public function modifyProductAction($id)
    {
        $productRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Product');
        $product = $productRepository->find($id);
        
        $form = $this->createForm(new ProductType(), $product);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($product);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewProduct',array('id' => $product->getId() )));
            } else
            {
                $errors = $this->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        $url_cancel = 'livrederecettes_viewProduct';
        
        return $this->render('FDLivrederecettesBundle:Product:modifyProduct.html.twig', array('form' => $form->createView(), 'product' => $product, 'url_cancel' => $url_cancel));
    }
    
    public function deleteProductAction($id)
    {
        $productRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Product');
        $product = $productRepository->find($id);
        
        
        /* Si l'unité n'existe pas, alors une erreur est générée */
        if (is_null($product))
        {
            $this->get('session')->getFlashBag()->add('error', 'Produit [id='.$id.'] inexistant!');
            return $this->redirect( $this->generateUrl('livrederecettes_listProducts'));
        }
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($product);
                $em->flush();
                // Si la requête est en POST, on supprimera le type de produit
                $this->get('session')->getFlashBag()->add('info', 'Le produit a été bien supprimé');
                // Puis on redirige vers la liste des types de produit
                return $this->redirect( $this->generateUrl('livrederecettes_listProducts'));
            }
        }
        
        // Si le type de produit est déjà relié à un produit, on ne peut pas l'effacer!
        $ingredientRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Ingredient');
        $ingredient = $ingredientRepository->getIngredientsByProduct($product->getId());
        
        if (count($ingredient) > 0)
        {
            $this->get('session')->getFlashBag()->add('error', 'Le produit[id='.$id.'] est utilisé par des recettes et il ne peut donc pas être effacé!');
            return $this->render('FDLivrederecettesBundle:Product:viewProduct.html.twig', array('product' => $product));
        }
        
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FDLivrederecettesBundle:Product:deleteProduct.html.twig', array('product' => $product, 'form' => $form->createView()));
    }
}

?>
