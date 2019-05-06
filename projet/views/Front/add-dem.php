<?PHP
include "../../entities/demande.php";
include "../../core/demandeC.php";

$dem1=new dem($_POST['id1'],$_POST['nom1'],$_POST['mail1'],$_POST['sujet1'],$_POST['msg1'],"Non Traite");

$demande1C=new demandeC();
$demande1C->ajouterDemande($dem1);
header('Location: index.html');


?>