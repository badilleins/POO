<?php
    require_once('Car.php');
    require_once('Account.php');
    require_once('UberX.php');
    require_once('UberPool.php');
    require_once('UberBlack.php');
    require_once('UberVan.php');
    $uberX1  = new UberX("ADRF546",new Account("Stalin Badillo","jepass"),"toyota","2019");
    
    $uberPool1 = new UberPool("FEFC254", new Account("Gloria Silva","trevis1"),"chevrolet",'2020');

    $uberX1 -> printCharacteristics();
    $uberPool1 -> printCharacteristics();