<?php

class Negara{
    protected $IbuKota;
    protected $KepalaNegara;

    protected function __construct($Ibukota, $KepalaNegara){
        $this->Ibukota = $Ibukota;
        $this->KepalaNegara = $KepalaNegara;
    }

    protected function getInfo(){
        echo 'Ibukota: '. $this->Ibukota. '<br>';
        echo 'KepalaNegara '. $this->KepalaNegara. '<br>';
    }
}

class Indonesia extends Negara{
    public $Lagukebangsaan;

    public function __construct($IbuKota, $KepalaNegara,$Lagukebangsaan){
        parent::__construct($IbuKota, $KepalaNegara);
        $this->Lagukebangsaan = $Lagukebangsaan;
    }

    public function getInfoIndonesia(){
        parent::getInfo();
        echo 'Lagu Kebangsaan: '. $this->Lagukebangsaan . '<br>';
    }

}

class Japan extends Negara{
    public $Lagukebangsaan;

    public function __construct($IbuKota, $KepalaNegara,$Lagukebangsaan){
        parent::__construct($IbuKota, $KepalaNegara);
        $this->Lagukebangsaan = $Lagukebangsaan;
    }

    public function getInfoJapan(){
        parent::getInfo();
        echo 'Lagu Kebangsaan: '. $this->Lagukebangsaan . '<br>';
    }
}

class Arab extends Negara{
    public $Lagukebangsaan;

    public function __construct($IbuKota, $KepalaNegara,$Lagukebangsaan){
        parent::__construct($IbuKota, $KepalaNegara);
        $this->Lagukebangsaan = $Lagukebangsaan;
    }

    public function getInfoArab(){
        parent::getInfo();
        echo 'Lagu Kebangsaan: '. $this->Lagukebangsaan . '<br>';
    }
}




?>