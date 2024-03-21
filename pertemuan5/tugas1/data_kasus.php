<?php

    require_once 'class_kasus.php';

    //object
    $indonesia = new Indonesia('Jakarta', 'Presiden', 'Indonesia Raya');
    $japan = new Japan('Tokyo', 'Kaisar', 'Kimigayo');
    $arab = new Arab('Riyadh', 'Raja', 'Yaish Al-Malik');
    

    //echo
    echo "Info Negara:<br>";
    $indonesia->getInfoIndonesia();
    echo"<br>";

    echo "Info Negara:<br>";
    $japan->getInfojapan();
    echo"<br>";

    echo "Info Negara:<br>";
    $arab->getInfoArab();
    echo"<br>";
    
    
?>