<?PHP
include "../../config.php";
class livraisonC {
	function ajouterlivraison($livraison){
		
		$sql="insert into livraison (id,mail,adresse,idlivreur,commande,etatdelivraison) values (:id, :mail,:adresse,:idlivreur,:commande,:etatdelivraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $id=$livraison->getid();
      	$mail=$livraison->getmail();
      	$adresse=$livraison->getadresse();
      	$commande=$livraison->getcommande();
      	$idlivreur=$livraison->getidlivreur();
      	$etatdelivraison=$livraison->getetatdelivraison();
      	

		$req->bindValue(':id',$id);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':commande',$commande);
		$req->bindValue(':idlivreur',$idlivreur);
    	$req->bindValue(':etatdelivraison',$etatdelivraison);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherlivraison(){

		$sql="SELECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerlivraison($id){
		$sql="DELETE FROM livraison where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierlivraison($livraison,$id){
		$sql="UPDATE livraison SET id=:idn, mail=:mail,adresse=:adresse,idlivreur=:idlivreur,commande=:commande,etatdelivraison=:etatdelivraison WHERE id=:id";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		
		
		$idn=$livraison->getid();
      	$mail=$livraison->getmail();
      	$mail=$livraison->getmail();
      	$commande=$livraison->getcommande();
      	$idlivreur=$livraison->getidlivreur();
      	$etatdelivraison=$livraison->getetatdelivraison();
      	$adresse=$livraison->getadresse();
      	
      	$req->bindValue(':idn',$idn);
		$req->bindValue(':id',$id);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':commande',$commande);
		$req->bindValue(':idlivreur',$idlivreur);
    	$req->bindValue(':etatdelivraison',$etatdelivraison);
    	$req->bindValue(':adresse',$adresse);
            $req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererlivraison($id){
		$sql="SELECT * from livraison where id='$id'";
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