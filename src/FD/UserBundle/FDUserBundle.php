<?php

namespace FD\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of FDUserBundle
 *
 * @author fda
 */
class FDUserBundle extends Bundle {
    
    public function getParent() {
        
        return 'FOSUserBundle';
        
    }
    
}

?>
