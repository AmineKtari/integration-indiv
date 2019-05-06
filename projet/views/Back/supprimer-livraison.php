<?PHP
include "../../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["idS"])){
	$livraisonC->supprimerlivraison($_POST["idS"]);
	header('Location: list-livraisons.php');
}

?>