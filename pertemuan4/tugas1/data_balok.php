<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		 require_once 'class_balok.php';

    $balok1 = new Balok(29,16,7);
    $balok2 = new Balok(25,10,8);
    $balok3 = new Balok(30,19,7);
    $balok4 = new Balok(17,5,5);


    echo '<br>luas balok 1 adalah ' . $balok1->getLuas() ;
    echo '<br>keliling balok 1 adalah ' . $balok1->getKeliling() ;
    echo '<br>volume balok 1 adalah ' . $balok1->getVolume() ;
    echo '<br>';

    echo '<br>luas balok 2 adalah ' . $balok2->getLuas() ;
    echo '<br>keliling balok 2 adalah ' . $balok2->getKeliling() ;
    echo '<br>volume balok 2 adalah ' . $balok2->getVolume() ;
    echo '<br>';

    echo '<br>luas balok 3 adalah ' . $balok3->getLuas() ;
    echo '<br>keliling balok 3 adalah ' . $balok3->getKeliling() ;
    echo '<br>volume balok 3 adalah ' . $balok3->getVolume() ;
    echo '<br>';
	
    echo '<br>luas balok 4 adalah ' . $balok4->getLuas() ;
    echo '<br>keliling balok 4 adalah ' . $balok4->getKeliling() ;
    echo '<br>volume balok 4 adalah ' . $balok4->getVolume() ;
    
        
?>