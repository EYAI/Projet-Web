<?php
include "C:\wamp64\www\melodyo\Entities\Reservation.php";
    class reservationOps{

        function ajouterReservation($reservation){
                        $sql = "INSERT INTO reservation (`RefR`,`DateR`,`DiscountP`) VALUES (:RefR ,:DateR ,:DiscountP)";
                          $db = config::getConnexion();
                        try{
                            $req=$db->prepare($sql);
                            $req->bindValue(':RefR',$reservation->getRefR());
                            $req->bindValue(':DateR',$reservation->getDateR());
                            $req->bindValue(':DiscountP',$reservation->getDiscountP());
                            $req->execute();   
                        }
                        catch (Exception $e){
                            echo 'Erreur: '.$e->getMessage();
                            if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                                echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
                        } 
                            
            
                 }
        

        function getReservation(){
            $sql="SELECT * FROM `reservation`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        public static function nombreReservation(){
            $sql="SELECT count(*) FROM `reservation`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        public static function getReservations($RefR){
            $sql="SELECT * FROM `reservation` WHERE RefR = ".$RefR;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        function modifierReservation($reservation){
            $sql = "UPDATE `reservation` SET `DateR` = :DateR ,`DiscountP` = :DiscountP  WHERE `reservation`.`RefR` = :RefR";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':RefR',$reservation->getRefR());
                $req->bindValue(':DateR',$reservation->getDateR());
                $req->bindValue(':DiscountP',$reservation->getDiscountP());
                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        function supprimerReservation($RefR){
            $sql = "DELETE FROM `reservation` WHERE `reservation`.`RefR` = :RefR";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':RefR',$RefR);
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
    }
?>