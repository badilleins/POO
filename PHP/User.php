<?php

    require_once('Account.php');
    class User extends Account{
        public function __construct($name,$password){
            parent::__construct($name,$password);
        }
    }
?>