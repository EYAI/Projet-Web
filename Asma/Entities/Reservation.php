<?php
    class reservation{
        private $RefR;
        private $DateR;
        private $DiscountP;

        function __construct ($RefR, $DateR, $DiscountP){
            $this->RefR = $RefR;
            $this->DateR = $DateR;
            $this->DiscountP = $DiscountP;
        }

        function setRefR(){
            $this->RefR = $RefR;
        }

        function getRefR(){
            return $this->RefR;
        }

        function setDateR(){
            $this->DateR = $DateR;
        }

        function getDateR(){
            return $this->DateR;
        }
        function setDiscountP(){
            $this->DiscountP = $DiscountP;
        }

        function getDiscountP(){
            return $this->DiscountP;
        }
    }
?>