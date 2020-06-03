<?php
include "C:\wamp64\www\melodyo\Entities\promotion.php";  
class promotionOps{

    function ajouterPromotion($promotion){
                    $sql = "INSERT INTO promotion (`RefP`,`DateL`,`Discount`) VALUES (:RefP,:DateL,:Discount)";
                      $db = config::getConnexion();
                    try{
                        $req=$db->prepare($sql);
                        $req->bindValue(':RefP',$promotion->getRefP());
                        $req->bindValue(':DateL',$promotion->getDateL());
                        $req->bindValue(':Discount',$promotion->getDiscount());
                        $req->execute();   
                    }
                    catch (Exception $e){
                        echo 'Erreur: '.$e->getMessage();
                        if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                            echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
                    }   
        
             }
    

    function getPromotion(){
        $sql="SELECT * FROM `promotion`";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public static function getPromotions($RefP){
        $sql="SELECT * FROM `promotion` WHERE RefP = ".$RefP;
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function modifierPromotion($promotion){
        $sql = "UPDATE `promotion` SET `DateL` = :DateL ,`Discount` = :Discount  WHERE `promotion`.`RefP` = :RefP";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':RefP',$promotion->getRefP());
            $req->bindValue(':DateL',$promotion->getDateL());
            $req->bindValue(':Discount',$promotion->getDiscount());
            $req->execute();   
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
        }    
    }

    function supprimerPromotion($RefP){
        $sql = "DELETE FROM `promotion` WHERE `promotion`.`RefP` = :RefP";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':RefP',$RefP);
            $req->execute();
        }
        catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
        }    
    }
    function trierPromotion(){
        $sql = "SELECT * FROM `promotion` ORDER BY `RefP` DESC";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        
            $req->execute();
        }
        catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
        }    
    }

    
    function getNoP($RefP){
        $sql="SELECT count(*) FROM `reservation` WHERE `reservation`.`RefR` = ".$RefP;
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public static function getTopPromotion(){
        $sql="SELECT promotion.RefP, count(promotion.RefP) FROM promotion JOIN reservation ON promotion.RefP = reservation.RefR GROUP by promotion.RefP ORDER by count(promotion.RefP) desc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public static function getNoC(){
        $sql="SELECT count(*) FROM `promotion`";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}

?>