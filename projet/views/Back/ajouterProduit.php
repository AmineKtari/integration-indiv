<?PHP
include "../../entities/produit.php";
include "../../core/ProduitC.php";



$produit1=new produit($_POST['ref'],$_POST['title'],$_POST['price'],$_POST['qt'],$_POST['des'],$_POST['cat'],"");

$produit1C=new produitC();
$produit1C->ajouterProduit($produit1);
//Pour l'ajout d'une image
        $link=mysqli_connect("127.0.0.1","root","","projet");


        $imageName = mysqli_real_escape_string($link,$_FILES["image"]["name"]);
        $imageData = mysqli_real_escape_string($link,file_get_contents($_FILES["image"]["tmp_name"]));
        $imageType = mysqli_real_escape_string($link,$_FILES["image"]["type"]);
        $ref=$_POST['ref'];
        if(substr($imageType,0,5) == "image")
        {
            mysqli_query($link,"UPDATE produit SET Image = '$imageData' WHERE Ref=$ref ");
            echo "Image !";

        }
        else
        {
            echo "Fichier non image";

        }
//fin image
header('Location: product-list.php');


?>
