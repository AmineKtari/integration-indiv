<?PHP
include "../../entities/livreur.php";
include "../../core/LivreurC.php";



$livreur1=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['vehicule']);

$livreur1C=new livreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: list-livreurs.php');


?>