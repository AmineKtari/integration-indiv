<?PHP
include "../../config.php";
class demandeC {
	function ajouterDemande($dem){
		
		$sql="insert into demande (id,nom,mail,sujet,message,etat) values (:id, :nom,:mail,:sujet,:msg,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $id=$dem->getId();
      	$nom=$dem->getNom();
      	$mail=$dem->getMail();
      	$sujet=$dem->getSujet();
      	$msg=$dem->getMsg();
      	$etat=$dem->getEtat();
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

	function afficherDemande(){

		$sql="SELECT * From demande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerDemande($id){
		$sql="DELETE FROM demande where id= :id";
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

	function modifierEtat($demande,$id){
		$sql="UPDATE demande SET etat=:etat WHERE id=:id";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

		$etat=$demande->getEtat();
	
$req->bindValue(':etat',$etat);
$req->bindValue(':id',$id);

            $s=$req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererDemande($id){
		$sql="SELECT * from demande where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
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