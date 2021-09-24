<?php
class CimszamClass {
    public int $id;
    public string $tipus;
    public string $cegnev;
    public int $telefonszam;
    public int $adoszam;
    public string $orszag;
    public int $iranyitoszam;
    public string $varos;
    public string $utca;
    
    function __construct($ID,$Tipus,$Cegnev,$Telefonszam,$Adoszam,$Orszag,$Iranyitoszam,$Varos,$Utca) {
        $this->id=$ID;
        $this->tipus=$Tipus;
        $this->cegnev=$Cegnev;
        $this->telefonszam=$Telefonszam;
        $this->adoszam=$Adoszam;
        $this->orszag=$Orszag;
        $this->iranyitoszam=$Iranyitoszam;
        $this->varos=$Varos;
        $this->utca=$Utca;
    }
    function __construct2($Cegnev,$Orszag,$Iranyitoszam,$Varos,$Utca){
        $this->cegnev=$Cegnev;
        $this->orszag=$Orszag;
        $this->iranyitoszam=$Iranyitoszam;
        $this->varos=$Varos;
        $this->utca=$Utca;
        
    }
    
}