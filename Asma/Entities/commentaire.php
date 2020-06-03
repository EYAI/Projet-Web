<?php
    class commentaire{
        private $Name;
        private $Email;
        private $MSG;

        function __construct ($Name, $Email, $MSG){
            $this->Name = $Name;
            $this->Email = $Email;
            $this->MSG = $MSG;
        }

        function setName(){
            $this->Name = $Name;
        }

        function getName(){
            return $this->Name;
        }

        function setEmail(){
            $this->Email = $Email;
        }

        function getEmail(){
            return $this->Email;
        }
        function setMSG(){
            $this->MSG = $MSG;
        }

        function getMSG(){
            return $this->MSG;
        }
    }
?>