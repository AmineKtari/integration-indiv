<?PHP
include_once "../../config.php";
class clientC {
	  function ajouterClient($client){
		
		$sql="insert into client (cin,nom,prenom,sexe,date_n,adresse_m,adresse,numero,mot_d_p,points_f,grad_fk) values (:cin, :nom,:prenom,:sexe,:date_n,:adresse_m,:adresse,:numero,:mot_d_p,:points_f,:grad_fk)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $cin=$client->getcin();
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $sexe=$client->getsexe();
        $date_n=$client->getdate();
        $adresse_m=$client->getadressem();
        $adresse=$client->getadresse();
        $numero=$client->getnumero();
        $mot_d_p=$client->getmotdp();
        $points_f=$client->getpointf();
        $grad_fk=$client->getgradfk();

      	
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':date_n',$date_n);
		$req->bindValue(':adresse_m',$adresse_m);
    	$req->bindValue(':adresse',$adresse);
    	$req->bindValue(':numero',$numero);
    	$req->bindValue(':mot_d_p',$mot_d_p);
    	$req->bindValue(':points_f',$points_f);
    	$req->bindValue(':grad_fk',$grad_fk);
    	

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	  }
   function afficherInfo(){

        $sql="SELECT * From client";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
 function AfficherClient(){

		$sql="SELECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerClient($cin){
		$sql="DELETE FROM client where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function modifierClient($client,$cin){
        $sql="UPDATE client SET points_f=:points_f,grad_fk=:grad_fk WHERE cin=:cin";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

        $points_f=$client->getpointf();
        $grad_fk=$client->getgradfk();
        
$req->bindValue(':points_f',$points_f);
$req->bindValue(':grad_fk',$grad_fk);

            $s=$req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

    }

    function recupererClient($cin){
        $sql="SELECT * from client where cin='$cin'";
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
