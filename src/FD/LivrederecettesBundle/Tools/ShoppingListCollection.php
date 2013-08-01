<?php

namespace FD\LivrederecettesBundle\Tools;

use FD\LivrederecettesBundle\Tools\ShoppingListElement;
use \ArrayObject;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShoppingListCollection
 *
 * @author fda
 */
class ShoppingListCollection extends \ArrayObject {
    
    private $shoppingListElements;
    
    function __construct(){ 
        $this->shoppingListElements = new ArrayObject(); 
    }
    
    public function setShoppingListElements($array) {
        $this->shoppingListElements = new ArrayObject($array);
    }
    
    public function appendIfExists(FD\LivrederecettesBundle\Tools\ShoppingListElement $shoppingListElement) {
        
        $iterator = $this->shoppingListElements->getIterator();
        
        while ($iterator->valid()) {
            $shoppingListElement = new ShoppingListElement();
            $shoppingListElement = $iterator->current();
            $iterator->next();
        }
    }
    
}

?>
