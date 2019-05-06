<?PHP
include "../../core/demandeC.php";
$demandeC=new demandeC();
if (isset($_POST["idS"])){
	$demandeC->supprimerDemande($_POST["idS"]);
	header('Location: list-demandes.php');
}

?>