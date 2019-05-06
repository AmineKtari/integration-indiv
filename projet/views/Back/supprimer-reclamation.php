<?PHP
include "../../core/reclamationC.php";
$reclamationC=new reclamationC();
if (isset($_POST["idS"])){
	$reclamationC->supprimerReclamation($_POST["idS"]);
	header('Location: list-reclamations.php');
}

?>