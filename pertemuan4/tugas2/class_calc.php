<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        public $bil1;
        public $bil2;

        public function __construct($bil1, $bil2) {
            // code..
            $this->bil1 = $bil1;
            $this->bil2 = $bil2;
        }
    
        function tambah() {
            return $this->bil1 + $this->bil2;
        }
    
        function kurang() {
            return $this->bil1 - $this->bil2;
        }
    
        function bagi() {
            
            return $this->bil1 / $this->bil2;
        }
    
        function kali() {
            return $this->bil1 * $this->bil2;
        }

    }
    

    // objek
    $calculator = new Calculator(10, 5);
    $calculator = new Calculator(13, 3);
    $calculator = new Calculator(20, 5);
    $calculator = new Calculator(36, 3);

    echo "Pertambahan: " . $calculator->tambah() . "<br>";
    echo "Pengurangan: " . $calculator->kurang() . "<br>";
    echo "Pembagian: "   . $calculator->bagi() . "<br>";
    echo "Perkalian: "   . $calculator->kali() . "<br>";
?>