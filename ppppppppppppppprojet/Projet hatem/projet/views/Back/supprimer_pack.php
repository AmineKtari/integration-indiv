<?PHP
include "../../core/packC.php";
$packC=new packC();
if (isset($_POST["refS"])){
	$packC->supprimerPack($_POST["refS"]);
	header('Location: pack-list.php');
}

?>
