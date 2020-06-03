<?php
include "C:\wamp64\www\melodyo\Entities\commentaire.php";

    class commentaireOps{

        function ajouterCommentaire($commentaire){
                        $sql = "INSERT INTO commentaire (`Name`,`Email`,`MSG`) VALUES (:Name ,:Email ,:MSG)";
                          $db = config::getConnexion();
                        try{
                            $req=$db->prepare($sql);
                            $req->bindValue(':Name',$commentaire->getName());
                            $req->bindValue(':Email',$commentaire->getEmail());
                            $req->bindValue(':MSG',$commentaire->getMSG());
                            $req->execute();   
                        }
                        catch (Exception $e){
                            echo 'Erreur: '.$e->getMessage();
                            if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                                echo '<script>alert("Echec, il n y a pas de commentaire.");</script>';
                        }   
                            
                 }
         function getCommentaire(){
                    $sql="SELECT * FROM `commentaire`";
                    $db = config::getConnexion();
                    try{
                    $liste=$db->query($sql);
                    return $liste;
                    }
                    catch (Exception $e){
                        die('Erreur: '.$e->getMessage());
                    }	
                }
         function supprimerCommentaire($MSG){
                    $sql = "DELETE FROM `commentaire` WHERE `commentaire`.`MSG` = :MSG";
                    $db = config::getConnexion();
                    try{
                        $req=$db->prepare($sql);
                        $req->bindValue(':MSG',$MSG);
                        $req->execute();
                    }
                    catch (Exception $e){
                            echo 'Erreur: '.$e->getMessage();
                    }    
                }
         function badWords($MSG){
                    $mots = ['fuck','con'];
                    $rp = ['f***','c**'];
                    
                       for($i=0;$i<count($mots);$i++)
                          {$MSG= str_replace($mots[$i], $rp[$i], $MSG);}
                    
                     echo $MSG;
                     
                    }
                
}    

?>