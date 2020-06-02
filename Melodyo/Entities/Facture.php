<?php
    class facture{
        private $idfacture;
        private $montant;
        private $code;


        function __construct ($idfacture, $montant,$code){
            $this->idfacture = $idfacture;
            $this->montant = $montant;
            $this->code = $code;
        }

        function setidfacture(){
            $this->idfacture = $idfacture;
        }

        function getidfacture(){
            return $this->idfacture;
        }
        function getcodefacture(){
            return $this->code;
        }
        function setcode(){
            $this->code = $code;
        }

        function setmontant(){
            $this->montant = $montant;
        }

        function getmontant(){
            return $this->montant;
        }
        
    }
?>