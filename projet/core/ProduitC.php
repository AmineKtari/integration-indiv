<?PHP
include_once "../../config.php";
class produitC {
	function ajouterProduit($produit){
		
		$sql="insert into produit (ref,nom,prix,quantite,description,categorie,image) values (:ref, :nom,:prix,:quantite,:description,:categorie,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $ref=$produit->get_ref();
      	$nom=$produit->get_nom();
      	$prix=$produit->get_prix();
      	$quantite=$produit->get_quantite();
      	$description=$produit->get_description();
      	$categorie=$produit->get_categorie();
      	$image=$produit->get_image();
		$req->bindValue(':ref',$ref);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description',$description);
    	$req->bindValue(':categorie',$categorie);
    	$req->bindValue(':image',$image);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherProduit(){

		$sql="SELECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerProduit($ref){
		$sql="DELETE FROM produit where Ref= :ref";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref',$ref);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierProduit($produit,$ref){
		$sql="UPDATE Produit SET Ref=:reff,Nom=:nom,Prix=:prix,Quantite=:quantite,Description=:description,Categorie=:categorie WHERE Ref=:ref";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

		$reff=$produit->get_ref();
		$nom=$produit->get_nom();
		$prix=$produit->get_prix();
		$quantite=$produit->get_quantite();
		$description=$produit->get_description();
		$categorie=$produit->get_categorie();
$req->bindValue(':reff',$reff);
$req->bindValue(':ref',$ref);
$req->bindValue(':nom',$nom);
$req->bindValue(':prix',$prix);
$req->bindValue(':quantite',$quantite);
$req->bindValue(':description',$description);
$req->bindValue(':categorie',$categorie);

            $s=$req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererProduit($ref){
		$sql="SELECT * from produit where Ref='$ref'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererProduit1($ref){
		$sql="SELECT Nom from produit where Ref='$ref'";
		$db = config::getConnexion();
		try{
		$liste=$db->prepare($sql);
		$liste->execute();
		return $liste->fetchAll();
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
