<?php

namespace FD\LivrederecettesBundle\Tools;

/**
 * Description of ShoppingListElement
 *
 * @author fda
 */
class ShoppingListElement {
    
    private $name;
    
    private $quantity;
    
    private $unit;
    
    private $productType;
    
    function initializeShoppingListElement($name, $quantity, $unit, $productType) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unit = $unit;
        $this->productType = $productType;
    }

    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        
        return $this;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        
        return $this;
    }

    public function getUnit() {
        return $this->unit;
    }

    public function setUnit($unit) {
        $this->unit = $unit;
        
        return $this;
    }

    public function getProductType() {
        return $this->productType;
    }

    public function setProductType($productType) {
        $this->productType = $productType;
        
        return $this;
    }

    
}

?>
