<?php
/*
echo '<script> alert("fezeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee"); </script>';
echo "<script> alert(".$_POST['nome'].$_POST['nomee']."); </script>";
echo '<script> alert("fezeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee"); </script>';
*/
include "../../core/listesdescommandeC.php";

if (isset($_POST['nome']) && isset($_POST['nomee'])) {
    //echo "<script> alert(".$_POST['nome'].$_POST['nomee']."); </script>";
    $Panier = new Panier();
    $Panier->modifierPanier_quantite2($_POST['nomee'],$_POST['nome'],$_POST['nom']);
    $pt= $_POST['nomee'] * $_POST['nom'] ;
/*
$output='';
$output.='
          <h6><input type="text" id="total_panier" style="background: none;font-weight: bolder;border: none;text-align: right;color: white" value="'.$pt.'" readonly><span>DT</span></h6>
';
echo $output;*/

   }

?>