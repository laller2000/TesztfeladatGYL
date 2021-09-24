<?php

class ClassRendelOOP {
    public  int $sorszam;
    public string $szamlacim;
    public int $nettoosszeg;
    public int $afa;
    public int $brutto;
    
    function __construct($Sorszam,$Szamlacim,$Nettoosszeg,$AFA,$Brutto) {
        $this->sorszam=$Sorszam;
        $this->szamlacim=$Szamlacim;
        $this->nettoosszeg=$Nettoosszeg;
        $this->afa=$AFA;
        $this->brutto=$Brutto;
    }
    function __construct2($Sorszam){
       $this->sorszam=$Sorszam; 
    }
    function __construct3($szamlacim){
        $this->szamlacim=$szamlacim;
    }
    function __construct4($Nettoosszeg){
        $this->nettoosszeg=$Nettoosszeg;
    }
    function __construct5($AFA){
        $this->afa=$AFA;
    }
    function __construct6($Brutto)
    {
        $this->brutto=$Brutto;
    }
    function get_Sorszam(){
        return $this->sorszam;
    }
    function get_Szamla(){
        
        return $this->szamlacim;
    }
    function get_Netto(){
        return $this->nettoosszeg;
    }
    function get_afa(){
        return $this->afa;
    }
    function get_brutto(){
        return $this->brutto;
    }
}
