<?PHP
include "../../entities/reclamation.php";
include "../../core/reclamationC.php";

$rec1=new rec($_POST['id'],$_POST['prenom'],$_POST['mail'],$_POST['sujet'],$_POST['msg'],"Non Traite");

$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($rec1);
header('Location: index.html');


?>