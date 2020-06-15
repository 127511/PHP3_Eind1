<?php
class Huis{

    private $_straat;
    private $_huisnummer;
    private $_plaats;
    private $_oppervlakte;
    private $_wozWaarde;
    private $_aantalKamers;
    private $_aantalToiletten;
    private $_verwarming;
    private $_soortVerwarming;
    private $_belasting;


    public function __construct($straat, $huisnummer, $plaats) {
      $this->_straat = $straat;
      $this->_huisnummer = $huisnummer;
      $this->_plaats = $plaats;
    }

    public function setOppervlakte($oppervlakte){
        $this->_oppervlakte = $oppervlakte;
    }

    public function setWozWaarde($wozWaarde){
        $this->_wozWaarde = $wozWaarde;
    }

    public function setAantalKamers($aantalKamers){
        $this->_aantalKamers = $aantalKamers;
    }

    public function setAantalToiletten($aantalToiletten){
        $this->_aantalToiletten = $aantalToiletten;
    }

    public function setVerwarming($verwarming){
      if(strtolower($verwarming)=="ja" || strtolower($verwarming)=="nee") {
        $this->_verwarming = $verwarming;
      } else {
        echo "Gelieve ja of nee in te vullen.";
      }
    }

    public function setSoortVerwarming($soortVerwarming){
      if(strtolower($soortVerwarming)=="centrale verwarming" ||
          strtolower($soortVerwarming)=="stadsverwarming" ||
          strtolower($soortVerwarming)=="blokverwarming" ||
          strtolower($soortVerwarming)=="vloerverwarming") {
        $this->_soortVerwarming = $soortVerwarming;
      } else {
        echo "Keuze uit: Centrale Verwarming, Stadsverwarming, Blokverwarming, Vloerverwarming";
      }
    }
    public function getOppervlakte(){
        return $this->_oppervlakte;
    }

    public function getWozWaarde(){
        return $this->_wozWaarde;
    }

    public function getAantalKamers(){
        return $this->_aantalKamers;
    }

    public function getAantalToiletten(){
        return $this->_aantalToiletten;
    }

    public function getVerwarming(){
        return $this->_verwarming;
    }

    public function getSoortVerwarming(){
        return $this->_soortVerwarming;
    }

    public function berekenBelasting(){
      echo "Adres: $this->_straat  $this->_huisnummer  $this->_plaats ";
      echo "<br>";
      echo "WOZ Waarde: ";
      echo $this->getWozWaarde();
      echo "<br>";
      echo "Oppervlakte: ";
      echo $this->getOppervlakte();
      echo "<br>";
      echo "Aantal Kamers: ";
      echo $this->getAantalKamers();
      echo "<br>";
      echo "Aantal Toiletten: ";
      echo $this->getAantalToiletten();
      echo "<br>";
      echo "Verwarming: ";
      echo $this->getVerwarming();
      echo "<br>";
      echo "Soort Verwarming: ";
      echo $this->getSoortVerwarming();
      echo "<br>";

      echo "<br>";
      if($this->_wozWaarde < 100000) {
        $this->_belasting += 600;
      }
      if($this->_wozWaarde >= 100000 && $this->_wozWaarde < 200000) {
        $this->_belasting += 2000;
      }
      if($this->_wozWaarde >= 200000){
        $this->_belasting += 6000;
      }
      if($this->_aantalKamers == 1) {
        $this->_belasting += 100;
      }
      if($this->_aantalKamers == 2) {
        $this->_belasting += 300;
      }
      if($this->_aantalKamers > 2){
        $this->_belasting += 800;
      }
      if($this->_plaats == "Amsterdam" || $this->_plaats == "Rotterdam" || $this->_plaats == "Groningen"){
        $this->_belasting += 1000;
      }


    echo "Belasting: ";
    echo $this->_belasting;
  }

}
  ?>
