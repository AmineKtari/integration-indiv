<?PHP
include "../../core/LivreurC.php";
$livreurC=new livreurC();
if (isset($_POST["cinS"])){
	$livreurC->supprimerLivreur($_POST["cinS"]);
	header('Location: list-livreurs.php');
}

?>