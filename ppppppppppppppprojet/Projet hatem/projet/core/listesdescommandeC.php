<?PHP

require_once "config2.php";

class commandeC {
	function ajouterCommande($commande){
		
		$sql="insert into commande (num,cinfk,date,etat,prixtotal) values (:num,:cinfk,:date,:etat,:prixtotal)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $num=$commande->getnum();
      	$cinfk=$commande->getcinfk();
      	$date=$commande->getdate();
      	$etat=$commande->getetat();
      	$prixtotal=$commande->getprixtotal();
      	
		$req->bindValue(':num',$num);
		$req->bindValue(':cinfk',$cinfk);
		$req->bindValue(':date',$date);
    	$req->bindValue(':etat',$etat);
    	$req->bindValue(':prixtotal',$prixtotal);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

    function ajouterCommande2($id_client,$date,$etat,$prix_total){

        $sql="insert into commande (cinfk,date,etat,prixtotal) values (:cinfk,:date,:etat,:prixtotal)";
        $db = config2::getConnexion();
        try{
            $req=$db->prepare($sql);


            $req->bindValue(':cinfk',$id_client);
            $req->bindValue(':date',$date);
            $req->bindValue(':etat',$etat);
            $req->bindValue(':prixtotal',$prix_total);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

	function afficherCommande(){

		$sql="SELECT * From commande";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function afficherCommande_id_client($id){

        $sql="SELECT * From commande where cinfk='$id'";
        $db = config2::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

	function supprimerCommande($num){
		$sql="DELETE FROM commande where  num=:num";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierCommande($commande,$num){
		$sql="UPDATE commande SET etat=:etat WHERE num=:num";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

		$etat=$commande->getetat();
      	
	
    	$req->bindValue(':etat',$etat);
            $req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererCommande($num){
		$sql="SELECT * from commande ORDER BY num "; /*where num='$num'";*/
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
class Panier {
    function ajouterPanier($id_client,$ref,$p)
    {   $result=$this->afficherPanier($id_client);
        $test='true';
        foreach ($result as $row)
        {
            if($row['Ref']==$ref) {$test='false';}
        }
        if($test=='true') {
            $sql = "insert into panier (id_client,Ref,prix_u) values ($id_client,'$ref','$p')";
            $db = config2::getConnexion();
            try {
                $req = $db->prepare($sql);


                $req->execute();

            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }
        //include "../views/Front/cart.php";
        header('Location:cart.php');
    }
    function afficherPanier($id_client)
    {
        $sql="SELECT * From panier where id_client='$id_client'";
        $db = config2::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierPanier_quantite2($var,$vare,$varee)
    {   if ($vare==''){$vare=0;}
        $total = $varee * $vare ;


        $sql="UPDATE panier SET quantite=:id,prix_t=$total WHERE id=:quantite ";

        $db = config2::getConnexion();
        /*
                $req->execute();
        */
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$vare);
            $req->bindValue(':quantite',$var);
          //  $req->bindValue(':pt',$total);

            //   echo "<script> alert('succ'); </script>";
            $s=$req->execute();

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            // echo "<script> alert('erreur'); </script>";
        }

    }

    function vider_panier($id_client)
    {
        $sql="DELETE FROM panier where  id_client=:num";
        $db = config2::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':num',$id_client);
        try{
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}

?>