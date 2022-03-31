<?php
require_once('account.php');
class Car{
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($license,$driver){
        $this -> license = $license;
        $this -> driver = $driver; 
    }
    public function printCharacteristics(){
        echo "license: $this->license, driver: {$this->driver->name}, password: {$this->driver->password}";
    
    } 
}