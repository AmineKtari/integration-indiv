<?PHP
include_once "../../config.php";
class packC {
	function ajouterPack($pack){
		
		$sql="insert into packs (ref,nom,description,quantite,image,prix,x,y,z) values (:ref,:nom,:description,:quantite,:image,:prix,:x,:y,:z)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

       $Ref=$pack->get_ref();
      	$nom=$pack->get_nom();
      	$prix=$pack->get_prix();
      	$quantite=$pack->get_quantite();
      	$description=$pack->get_description();
      	$image=$pack->get_x();
      	$x=$pack->get_x();
      	$y=$pack->get_y();
      	$z=$pack->get_z();
		$req->bindValue(':ref',$Ref);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description',$description);
    	$req->bindValue(':image',$image);
    	$req->bindValue(':x',$x);
    	$req->bindValue(':y',$y);
    	$req->bindValue(':z',$z);
        return    $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherPack(){

		$sql="SELECT * From packs";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerPack($Ref){
		$sql="DELETE FROM packs where ref= :Ref";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Ref',$Ref);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierPack($pack,$Ref){
		$sql="UPDATE packs SET ref=:reff,nom=:nom,description=:description,quantite=:quantite,prix=:prix,x=:x,y=:y,z=:z WHERE ref=:Ref";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

		$reff=$pack->get_ref();
		$nom=$pack->get_nom();
      	$prix=$pack->get_prix();
      	$quantite=$pack->get_quantite();
      	$description=$pack->get_description();
      	$x=$pack->get_x();
      	$y=$pack->get_y();
      	$z=$pack->get_z();
$req->bindValue(':reff',$reff);
$req->bindValue(':Ref',$Ref);
$req->bindValue(':nom',$nom);
$req->bindValue(':prix',$prix);
$req->bindValue(':quantite',$quantite);
$req->bindValue(':description',$description);
$req->bindValue(':x',$x);
$req->bindValue(':y',$y);
$req->bindValue(':z',$z);


            $s=$req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererPack($Ref){
		$sql="SELECT * from packs where ref='$Ref'";
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
