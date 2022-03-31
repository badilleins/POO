<?php
    require_once('Account.php');
    class Driver extends Account{
        public $rate;
        public $numberOfTrips;
        
        public function __construct($name,$password,$rate,$numberOfTrips){
            parent::__construct($name,$password);
            $this -> rate = $rate;
            $this -> numberOfTrips = $numberOfTrips;
        }
    }
?>