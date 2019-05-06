<?php
include "../../core/listesdescommandeC.php";

$panier = new panier;
$id_client='1';
$result = $panier->afficherPanier($id_client);

if (isset($_GET['refe'])) {
    $ref = $_GET['refe'];
    $pu=$_GET['prix_u'];
    $panier->ajouterPanier($id_client,$ref,$pu);
}


?>
<?PHP
          include "../../entities/produit.php";
          include "../../core/ProduitC.php";

            $produitC=new produitC();
             
            



$produit2C=new produitC();
$listeProduits=$produit2C->afficherProduit();


          ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Kalthita | Votre Panier</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    <link rel="stylesheet" href="css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="./index.html" class="site-logo">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form">
                            <input type="text" placeholder="Chercher sur kalthita ....">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a href="authentification.html">Se connecter</a> ou <a href="#">Creer un compte</a>
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                    <span>0</span>
                                </div>
                                <a href="cart.php">Panier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-navbar">
            <div class="container">
                <!-- menu -->
                <ul class="main-menu">
                    <li><a href="./index.html">Acceuil</a></li>
                    <li><a href="./product.php">Produits</a></li>
                    <li><a href="packs.php">Packs
                        <span class="new">New</span>
                    </a></li>
                    <li><a href="./sav.html">Service Après vente</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Header section end -->


<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Votre Panier</h4>
        <div class="site-pagination">
            <a href="./index.html">Accueil</a> /
            <a href="cart.php">Votre Panier</a>
        </div>
    </div>
</div>
<!-- Page info end -->

<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {

        opacity: 1;

    }
    </style>
<!-- cart section end -->
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Votre Panier</h3>
                    <div class="cart-table-warp">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-th">Produits</th>
                                <th class="quy-th">Quantité</th>
                               <!-- <th class="size-th">SizeSize</th>-->
                                <th class="total-th">Prix</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $total=0;
                            foreach ($result as $key) {
                                $ref = $key ['Ref'];
                                $id_panier = $key ['id'];
                                $sql="SELECT * From produit where Ref='$ref'";
                                $db = config2::getConnexion();
                                try{
                                    $listee=$db->query($sql);
                                }
                                catch (Exception $e){
                                    die('Erreur: '.$e->getMessage());
                                }

                                foreach ($listee as $row)
                                {
                                    $total=$total + $row['Prix'];
                                    ?>
                                <tr>
                                    <td class="product-col">
                                        <img src="showimage.php?id=<?php echo $row['Ref']; ?>" style="width: 80px" alt="">
                                        <div class="pc-title">
                                            <h4><?php echo $row['Nom']; ?></h4>
                                            <p><?php echo $row['Prix']; ?> DT</p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">

                                                <input type="number" id="quantite_<?php echo $row['Ref']; ?>" style="width: 60px;border: none;text-align: center;" value="1" min="1" onclick="myfunc(this.id,'total_<?php echo $row['Ref']; ?>',<?php echo $row['Prix']; ?>,'total_panier',<?php echo $id_panier?>,this.value)" onkeyup="myfunc(this.id,'total_<?php echo $row['Ref']; ?>',<?php echo $row['Prix']; ?>,'total_panier',<?php echo $id_panier?>,this.value)">

                                        </div>
                                    </td>
                                    <!--<td class="total-col"><h4><?php //echo $row['Prix']; ?> DT</h4></td>-->
                                    <td class="total-col"><div><input class="qty1" id="total_<?php echo $row['Ref']; ?>" type="text" value="<?php echo $row['Prix']; ?>" style="background: none;border: none;text-align: center;width: 50px" readonly>DT</div>  </td>
                                </tr>
                                <?php

                                }
                            ?>
                            <?php
                            }
                            ?>

                            <script>

                               // $(document).on("change", ".qty1", function() {
                              //  });
                                function myfunc(s1,s2,s3,s4,a,b) {

                                    var fahd = document.getElementById(s1).value ;
                                    document.getElementById(s2).value = (fahd * s3)  ;
                                    var x = document.getElementById(s2).value  ;
                                    //document.getElementById(s4).value += document.getElementById(s2).value ;
                                    //alert(x);
                                  //  var y = parseFloat(document.getElementById(s4).value);
                                   // var tote = +y + +x  ;
                                    //alert(tote);
                                   // document.getElementById(s4).value = tote;

                                    var sum = 0;
                                    $(".qty1").each(function(){
                                        sum += +$(this).val();
                                    });
                                    $("#total_panier").val(sum);

                                    $.ajax({

                                        url: "Quantite_Refresh.php",
                                        method: "POST",
                                        //data: 'nome='+fah,
                                        data: {
                                            nomee: a,
                                            nome: b,
                                            nom:s3
                                        },
                                        success: function (data) {
                                            //alert("2");
                                            $('#iddd').html(data);
                                        }
                                    })
                                }
                                </script>
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost" id="idd">
                        <h6><input type="text" id="total_panier" style="background: none;font-weight: bolder;border: none;text-align: right;color: white" value="<?php echo $total; ?>" readonly><span>DT</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                

                <a href="commande.php?id_client=1" class="site-btn">Passer La Commande</a>
                <a href="product.php" class="site-btn sb-dark">Continuer votre THopping</a>
            </div>
        </div>
    </div>
</section>
<!-- cart section end -->

<!-- Related product section -->
<section class="related-product-section">
        <div class="container">
            <div class="section-title">
                <h2>AUTRES PRODUITS</h2>
            </div>
            
                    
            <div class="product-slider owl-carousel">
                <?php 
                         foreach ($listeProduits as $row ) {
                            ?>
                <div class="product-item">

                    <div class="pi-pic">
                        <a href="product-details.php?ref=<?php echo $row['Ref']; ?>"><img src="showimage.php?id=<?php echo $row['Ref']; ?>" alt=""></a>
                        <div class="pi-links">
                            <a href="cart.php?refe=<?php echo $row['Ref'];?>&prix_u=<?php echo $row['Prix'];?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6><?php echo $row['Prix']; ?> TND</h6>
                        <p><?php echo $row['Nom']; ?> </p>
                    </div>
                </div>
                
                <?php }
                ?>
                
                
            </div>
        </div>
    </section>
<!-- Related product section end -->



<!-- Footer section -->
    <section class="footer-section">
        <div class="container">
            <div class="footer-logo text-center">
                <a href="index.html"><img src="./img/logo-light.png" alt="" style=" width="200px" height="50px""></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget about-widget">
                        <h2>A Propos</h2>
                        <p>Kalthita est un fabricant Tunisien de chaussettes originales et uniques. Vous trouverez
                        sûremenet votre bonheur chez nous.</p>
                        <img src="img/cards.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget about-widget">
                        <h2>Rubriques</h2>
                        <ul>
                            <li><a href="">A Propos</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Panier</a></li>
                            <li><a href="">Livraison</a></li>
                            <li><a href="">Produits</a></li>
                            <li><a href="">Packs</a></li>
                        </ul>
                        <ul>
                            <li><a href="">S.A.V</a></li>
                            <li><a href="">Profil</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget about-widget">
                        <h2>Questions</h2>
                        <div class="fw-latest-post-widget">
                            <div class="lp-item">
                                <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
                                <div class="lp-content">
                                    <h6>Quelles chaussures choisir</h6>
                                    <span>Oct 21, 2018</span>
                                    <a href="#" class="readmore">Read More</a>
                                </div>
                            </div>
                            <div class="lp-item">
                                <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
                                <div class="lp-content">
                                    <h6>Tendance de l'année</h6>
                                    <span>Oct 21, 2018</span>
                                    <a href="#" class="readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget contact-widget">
                        <h2>Questions</h2>
                        <div class="con-info">
                            <span>C.</span>
                            <p>Kalthita TN Ltd </p>
                        </div>
                        <div class="con-info">
                            <span>A.</span>
                            <p>B@Labs, Avenue Habib Bourguiba, Tunis, Tunisie</p>
                        </div>
                        <div class="con-info">
                            <span>T.</span>
                            <p>+216 99 411 516</p>
                        </div>
                        <div class="con-info">
                            <span>E.</span>
                            <p>zouebi.anas@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
            <div class="container">
                <div class="social-links">
                    <a target="_blank" href="https://www.instagram.com/kalthita.tn/" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                    <a target="_blank" href="https://www.facebook.com/Kalthita.tn/" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                    
                </div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Paper's Club</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </div>
        </div>
    </section>
    <!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
