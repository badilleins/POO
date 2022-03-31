<?php
class Account{
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct($name,$password){
        $this-> name = $name;
        $this -> password = $password;
    }
}
