<?PHP
include "../../core/listesdescommandeC.php";

$commandeC=new commandeC();
if (isset($_POST["numS"])){
	$commandeC->supprimerCommande($_POST["numS"]);
	header('Location: list-commande.php');
}

?>