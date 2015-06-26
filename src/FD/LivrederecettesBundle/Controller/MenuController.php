<?php

namespace FD\LivrederecettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FD\LivrederecettesBundle\Entity\Menu;
use FD\LivrederecettesBundle\Form\MenuType;

class MenuController extends Controller {
    
    public function listMenusAction() {
        
        $em = $this->getDoctrine()->getManager();
        
        $listMenus = $em->getRepository('FDLivrederecettesBundle:Menu')->findAll();
        
        return $this->render('FDLivrederecettesBundle:Menu:listMenus.html.twig',array('listMenus' => $listMenus));
    }
    
    public function viewMenuAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        
        $menu = $em->getRepository('FDLivrederecettesBundle:Menu')->find($id);
        
        if (is_null($menu))
        {
            $this->get('session')->getFlashBag()->add('error', 'Menu [id='.$id.'] inexistant!');
            return $this->redirect( $this->generateUrl('livrederecettes_listMenus'));
        }
        
        $meals = $menu->getMeals();
        
        return $this->render('FDLivrederecettesBundle:Menu:viewMenu.html.twig', array('menu' => $menu, 'meals' => $meals ));
    }
    
    public function addMenuAction() {
        
        $menu = new Menu;
        
        $form = $this->createForm(new MenuType(), $menu );
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                foreach($menu->getMeals() as $meal) {
                    $meal->setMenu($menu);
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($menu);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewMenu',array('id' => $menu->getId() )));
            } else
            {
                $errorProcessing = $this->container->get('fd_livrederecettes.errorProcessing');
                $errors = $errorProcessing->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
        
        return $this->render('FDLivrederecettesBundle:Menu:addMenu.html.twig', array('form' => $form->createView()));
    }
    
    public function modifyMenuAction($id) {
        
        $menuRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Menu');
        $menu = $menuRepository->find($id);

        if (!$menu) {
            throw $this->createNotFoundException('Menu avec ID {'.$id.'} non trouvé!');
        }
                
        $originalMenu = new Menu();
        $originalMenu = $menu->createCopy();
        
        $form = $this->createForm(new MenuType(), $menu);
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                
                /* 
                 * On compare la liste des repas existant avant modifications et ceux 
                 * qui ne sont plus présent dans le nouveau menu sont éliminés
                 */
                foreach ($originalMenu->getMeals() as $meal) {
                    $meal_id = $meal->getId();
                    
                    if (!$menu->containsMeal($meal_id)){
                        
                        $mealRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Meal');
                        $mealToRemove = $mealRepository->find($meal_id);
                        $em->remove($mealToRemove);
                    }

                }
                               
                $em->persist($menu);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livrederecettes_viewMenu',array('id' => $menu->getId() )));
            } else
            {
                $errorProcessing = $this->container->get('fd_livrederecettes.errorProcessing');
                $errors = $errorProcessing->getErrorMessages($form);
                
                return new Response(print_r($errors, true));
            }
        }
         
        return $this->render('FDLivrederecettesBundle:Menu:modifyMenu.html.twig', array('form' => $form->createView(), 'menu' => $menu));
    }
    
    public function deleteMenuAction($id) {
        
        $menuRepository = $this->getDoctrine()->getManager()->getRepository('FDLivrederecettesBundle:Menu');
        $menu = $menuRepository->find($id);
        
        
        /* Si le menu n'existe pas, alors une erreur est générée */
        if (is_null($menu))
        {
            $this->get('session')->getFlashBag()->add('error', 'Menu [id='.$id.'] inexistant!');
            return $this->redirect( $this->generateUrl('livrederecettes_listMenus'));
        }
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                foreach($menu->getMeals() as $meal) {
                    $menu->removeMeal($meal);
                    $em->remove($meal);
                }
                
                $em->remove($menu);
                $em->flush();
                // Si la requête est en POST, on supprimera le menu
                $this->get('session')->getFlashBag()->add('info', 'Le menu a été bien supprimé');
                // Puis on redirige vers la liste des menus
                return $this->redirect( $this->generateUrl('livrederecettes_listMenus'));
            }
        }
        
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FDLivrederecettesBundle:Menu:deleteMenu.html.twig', array('menu' => $menu, 'form' => $form->createView()));
    }
    
}
?>
