<?php

require_once (CLASSES_PATH . "/loads/main/BaseGuestLoad.class.php");

/**
 *
 * @author Vahagn Sookiasian
 *
 */
class PriceLoad extends BaseGuestLoad{
    
    public function load() {
    }

    public function getTemplate() {
        return TEMPLATES_DIR . "/main/price.tpl";
    }

}

?>