<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // livrederecettes_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'livrederecettes_homepage');
            }

            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\LivrederecettesController::homepageAction',  '_route' => 'livrederecettes_homepage',);
        }

        // livrederecettes_listShoppingLists
        if ($pathinfo === '/listShoppingLists') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ShoppingListController::listShoppingListsAction',  '_route' => 'livrederecettes_listShoppingLists',);
        }

        // livrederecettes_viewShoppingList
        if (0 === strpos($pathinfo, '/viewShoppingList') && preg_match('#^/viewShoppingList/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_viewShoppingList')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ShoppingListController::viewShoppingListAction',));
        }

        // livrederecettes_addShoppingList
        if ($pathinfo === '/addShoppingList') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ShoppingListController::addShoppingListAction',  '_route' => 'livrederecettes_addShoppingList',);
        }

        // livrederecettes_modifyShoppingList
        if (0 === strpos($pathinfo, '/modifyShoppingList') && preg_match('#^/modifyShoppingList/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_modifyShoppingList')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ShoppingListController::modifyShoppingListAction',));
        }

        // livrederecettes_deleteShoppingList
        if (0 === strpos($pathinfo, '/deleteShoppingList') && preg_match('#^/deleteShoppingList/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_deleteShoppingList')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ShoppingListController::deleteShoppingListAction',));
        }

        // livrederecettes_listMenus
        if ($pathinfo === '/listMenus') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MenuController::listMenusAction',  '_route' => 'livrederecettes_listMenus',);
        }

        // livrederecettes_viewMenu
        if (0 === strpos($pathinfo, '/viewMenu') && preg_match('#^/viewMenu/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_viewMenu')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MenuController::viewMenuAction',));
        }

        // livrederecettes_addMenu
        if ($pathinfo === '/addMenu') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MenuController::addMenuAction',  '_route' => 'livrederecettes_addMenu',);
        }

        // livrederecettes_modifyMenu
        if (0 === strpos($pathinfo, '/modifyMenu') && preg_match('#^/modifyMenu/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_modifyMenu')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MenuController::modifyMenuAction',));
        }

        // livrederecettes_deleteMenu
        if (0 === strpos($pathinfo, '/deleteMenu') && preg_match('#^/deleteMenu/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_deleteMenu')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MenuController::deleteMenuAction',));
        }

        // livrederecettes_listRecipies
        if ($pathinfo === '/listRecipies') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\RecipeController::listRecipiesAction',  '_route' => 'livrederecettes_listRecipies',);
        }

        // livrederecettes_viewRecipe
        if (0 === strpos($pathinfo, '/viewRecipe') && preg_match('#^/viewRecipe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_viewRecipe')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\RecipeController::viewRecipeAction',));
        }

        // livrederecettes_addRecipe
        if ($pathinfo === '/addRecipe') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\RecipeController::addRecipeAction',  '_route' => 'livrederecettes_addRecipe',);
        }

        // livrederecettes_modifyRecipe
        if (0 === strpos($pathinfo, '/modifyRecipe') && preg_match('#^/modifyRecipe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_modifyRecipe')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\RecipeController::modifyRecipeAction',));
        }

        // livrederecettes_deleteRecipe
        if (0 === strpos($pathinfo, '/deleteRecipe') && preg_match('#^/deleteRecipe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_deleteRecipe')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\RecipeController::deleteRecipeAction',));
        }

        // livrederecettes_listProducts
        if ($pathinfo === '/listProducts') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ProductController::listProductsAction',  '_route' => 'livrederecettes_listProducts',);
        }

        // livrederecettes_viewProduct
        if (0 === strpos($pathinfo, '/viewProduct') && preg_match('#^/viewProduct/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_viewProduct')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ProductController::viewProductAction',));
        }

        // livrederecettes_addProduct
        if ($pathinfo === '/addProduct') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ProductController::addProductAction',  '_route' => 'livrederecettes_addProduct',);
        }

        // livrederecettes_modifyProduct
        if (0 === strpos($pathinfo, '/modifyProduct') && preg_match('#^/modifyProduct/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_modifyProduct')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ProductController::modifyProductAction',));
        }

        // livrederecettes_deleteProduct
        if (0 === strpos($pathinfo, '/deleteProduct') && preg_match('#^/deleteProduct/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_deleteProduct')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\ProductController::deleteProductAction',));
        }

        // livrederecettes_listIngredients
        if ($pathinfo === '/listIngredients') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\LivrederecettesController::homepageAction',  '_route' => 'livrederecettes_listIngredients',);
        }

        // livrederecettes_viewIngredient
        if (0 === strpos($pathinfo, '/viewIngredient') && preg_match('#^/viewIngredient/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_viewIngredient')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\LivrederecettesController::homepageAction',));
        }

        // livrederecettes_addIngredient
        if ($pathinfo === '/addIngredient') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\LivrederecettesController::homepageAction',  '_route' => 'livrederecettes_addIngredient',);
        }

        // livrederecettes_modifyIngredient
        if ($pathinfo === '/modifyIngredient') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\LivrederecettesController::homepageAction',  '_route' => 'livrederecettes_modifyIngredient',);
        }

        // livrederecettes_deleteIngredient
        if ($pathinfo === '/deleteIngredient') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\LivrederecettesController::homepageAction',  '_route' => 'livrederecettes_deleteIngredient',);
        }

        // livrederecettes_listUnits
        if ($pathinfo === '/listUnits') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\UnitController::listUnitsAction',  '_route' => 'livrederecettes_listUnits',);
        }

        // livrederecettes_viewUnit
        if (0 === strpos($pathinfo, '/viewUnit') && preg_match('#^/viewUnit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_viewUnit')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\UnitController::viewUnitAction',));
        }

        // livrederecettes_addUnit
        if ($pathinfo === '/addUnit') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\UnitController::addUnitAction',  '_route' => 'livrederecettes_addUnit',);
        }

        // livrederecettes_modifyUnit
        if (0 === strpos($pathinfo, '/modifyUnit') && preg_match('#^/modifyUnit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_modifyUnit')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\UnitController::modifyUnitAction',));
        }

        // livrederecettes_deleteUnit
        if (0 === strpos($pathinfo, '/deleteUnit') && preg_match('#^/deleteUnit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_deleteUnit')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\UnitController::deleteUnitAction',));
        }

        // livrederecettes_listTypes
        if ($pathinfo === '/listTypes') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\TypeController::listTypesAction',  '_route' => 'livrederecettes_listTypes',);
        }

        // livrederecettes_viewType
        if (0 === strpos($pathinfo, '/viewType') && preg_match('#^/viewType/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_viewType')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\TypeController::viewTypeAction',));
        }

        // livrederecettes_addType
        if ($pathinfo === '/addType') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\TypeController::addTypeAction',  '_route' => 'livrederecettes_addType',);
        }

        // livrederecettes_modifyType
        if (0 === strpos($pathinfo, '/modifyType') && preg_match('#^/modifyType/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_modifyType')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\TypeController::modifyTypeAction',));
        }

        // livrederecettes_deleteType
        if (0 === strpos($pathinfo, '/deleteType') && preg_match('#^/deleteType/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_deleteType')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\TypeController::deleteTypeAction',));
        }

        // livrederecettes_listMealTypes
        if ($pathinfo === '/listMealTypes') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MealTypeController::listMealTypesAction',  '_route' => 'livrederecettes_listMealTypes',);
        }

        // livrederecettes_viewMealType
        if (0 === strpos($pathinfo, '/viewMealType') && preg_match('#^/viewMealType/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_viewMealType')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MealTypeController::viewMealTypeAction',));
        }

        // livrederecettes_addMealType
        if ($pathinfo === '/addMealType') {
            return array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MealTypeController::addMealTypeAction',  '_route' => 'livrederecettes_addMealType',);
        }

        // livrederecettes_modifyMealType
        if (0 === strpos($pathinfo, '/modifyMealType') && preg_match('#^/modifyMealType/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_modifyMealType')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MealTypeController::modifyMealTypeAction',));
        }

        // livrederecettes_deleteMealType
        if (0 === strpos($pathinfo, '/deleteMealType') && preg_match('#^/deleteMealType/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livrederecettes_deleteMealType')), array (  '_controller' => 'FD\\LivrederecettesBundle\\Controller\\MealTypeController::deleteMealTypeAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
