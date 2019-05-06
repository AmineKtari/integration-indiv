<?PHP
include "../../config.php";
class reclamationC {
	function ajouterReclamation($rec){
		
		$sql="insert into reclamation (id,nom,mail,sujet,message,etat) values (:id, :nom,:mail,:sujet,:msg,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $id=$rec->getId();
      	$nom=$rec->getNom();
      	$mail=$rec->getMail();
      	$sujet=$rec->getSujet();
      	$msg=$rec->getMsg();
      	$etat=$rec->getEtat();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':msg',$msg);
    	$req->bindValue(':etat',$etat);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherReclamation(){

		$sql="SELECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerReclamation($id){
		$sql="DELETE FROM reclamation where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: home.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierEtat($reclamation,$id){
		$sql="UPDATE reclamation SET etat=:etat WHERE id=:id";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

		$etat=$reclamation->getEtat();
	
$req->bindValue(':etat',$etat);
$req->bindValue(':id',$id);

            $s=$req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererReclamation($id){
		$sql="SELECT * from reclamation where id='$id'";
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
