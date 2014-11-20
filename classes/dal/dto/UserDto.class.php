<?php

require_once (CLASSES_PATH . "/framework/dal/dto/AbstractDto.class.php");

/**
 * AdminDto class is extended class from AbstractDto.
 *
 * @author	Arman Tshitoyan
 */
class UserDto extends AbstractDto {

    // Map of DB value to Field value
    protected $mapArray = array("id" => "id",
        "email" => "email",
        "password" => "password",
        "hash" => "hash"
    );

    // constructs class instance
    public function __construct() {
        
    }

    // returns map array
    public function getMapArray() {
        return $this->mapArray;
    }

}

?>