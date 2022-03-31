<?php
    require_once('Payment.php');
    class Tarjeta extends Payment{
        public $typeCard;
        public $password;
        public function __construct($id,$typeCard,$password){
            parent:: __construct($id);
            $this->typeCard = $typeCard;
            $this->password = $password;
        }
    }
?>