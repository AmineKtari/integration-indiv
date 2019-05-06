<?PHP
include "../../entities/livraison.php";
include "../../core/livraisonC.php";



$livraison1=new livraison($_POST['id'],$_POST['mail'],$_POST['adresse'],$_POST['idlivreur'],$_POST['commande'],$_POST['etatdelivraison']);

    
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header('Location: list-livraisons.php');


?>