<?PHP
include "../../core/ProduitC.php";
$produitC=new produitC();
if (isset($_POST["refS"])){
	$produitC->supprimerProduit($_POST["refS"]);
	header('Location: product-list.php');
}

?>
