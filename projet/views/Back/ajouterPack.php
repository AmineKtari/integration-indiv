<?PHP
include "../../entities/pack.php";
include "../../core/packC.php";
include "../../core/clientC.php";


$pack1=new pack($_POST['ref'],$_POST['title'],$_POST['des'],$_POST['qt'],"",$_POST['price'],$_POST['x'],$_POST['y'],$_POST['z']);

$pack1C=new packC();
if($pack1C->ajouterPack($pack1))
{
var_dump($_POST);
//Pour l'ajout d'une image
        $link=mysqli_connect("127.0.0.1","root","","projet");


        $imageName = mysqli_real_escape_string($link,$_FILES["image"]["name"]);
        $imageData = mysqli_real_escape_string($link,file_get_contents($_FILES["image"]["tmp_name"]));
        $imageType = mysqli_real_escape_string($link,$_FILES["image"]["type"]);
        $ref=$_POST['ref'];
        if(substr($imageType,0,5) == "image")
        {
            mysqli_query($link,"UPDATE packs SET Image = '$imageData' WHERE ref=$ref ");
            echo "Image !";

        }
        else
        {
            echo "Fichier non image";

        }

//MAAAAAAAAAIIIIIIIIIL



$cc=new clientC();
$listeClients=$cc->AfficherClient();
$subject ="Kalthita.tn : NOUVEAU PACK DISPONIBLE !";
        $message="Nouveau Pack ".$_POST['title']." disponible : ".$_POST['des']." prix : ".$_POST['price']." TND";
        $headers ="From: amine.gtari@esprit.tn";
foreach ($listeClients as $row) {
    # code...
    $to =$row['adresse_m'];
        
        mail($to, $subject, $message,$headers);
}}


        //MAIL


    
//fin image
header('Location: pack-list.php');


?>
