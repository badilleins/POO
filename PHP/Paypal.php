<?php
require_once('Payment.php')
    class Paypal extends Payment{
        public $user;
        public function __construct($id,$user){
            parent:: __construct($id);
            $this-> user = $user; 
        }
    }
?>