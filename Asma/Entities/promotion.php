<?php
    class promotion{
        private $RefP;
        private $DateL;
        private $Discount;

        function __construct ($RefP, $DateL, $Discount){
            $this->RefP = $RefP;
            $this->DateL = $DateL;
            $this->Discount = $Discount;
        }

        function setRefP(){
            $this->RefP = $RefP;
        }

        function getRefP(){
            return $this->RefP;
        }

        function setDateL(){
            $this->DateL = $DateL;
        }

        function getDateL(){
            return $this->DateL;
        }
        function setDiscount(){
            $this->Discount = $Discount;
        }

        function getDiscount(){
            return $this->Discount;
        }
    }
?>