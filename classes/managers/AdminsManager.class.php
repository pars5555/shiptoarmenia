<?php
require_once (CLASSES_PATH . "/framework/AbstractManager.class.php");
require_once (CLASSES_PATH . "/dal/mappers/AdminsMapper.class.php");

class AdminsManager extends AbstractManager  {

   

    /**
     * @var singleton instance of class
     */
    private static $instance = null;

    /**
     * Initializes DB mappers
     *
     * @param object $config
     * @param object $args
     * @return
     */
    function __construct() {
            $this -> mapper = AdminsMapper::getInstance();
    }

    /**
     * Returns an singleton instance of this class
     *
     * @param object $config
     * @param object $args
     * @return
     */
    public static function getInstance() {

        if (self::$instance == null) {
                self::$instance = new AdminsManager();
        }
        return self::$instance;
    }
	
     public function getByLoginPassword($login, $password) {        
        return $this->mapper->getByUsernamePassword($login, $password);
    }
    
}

?>