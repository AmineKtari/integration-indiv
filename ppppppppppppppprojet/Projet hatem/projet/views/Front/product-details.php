

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Kalthita | Product Details</title>
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

		<!-- Header section -->
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
								<a href="./cart.html">Panier</a>
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
					<li><a href="./contact.html">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Category PAge</h4>
			<div class="site-pagination">
				<a href="">Accueil</a> /
				<a href="">Détails Produits</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->
<?PHP
          include "../../entities/produit.php";
          include "../../core/ProduitC.php";

            $produitC=new produitC();
              $result=$produitC->recupererProduit($_GET['ref']);
            foreach($result as $row){
                $ref=$row['Ref'];
                $nom=$row['Nom'];
                $prix=$row['Prix'];
                $quantite=$row['Quantite'];
                $description=$row['Description'];
              $categorie=$row['Categorie'];
            }



$produit2C=new produitC();
$listeProduits=$produit2C->afficherProduit();


          ?>

	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="./product.php"> &lt;&lt; Retour aux produits</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="showimage.php?id=<?php echo $row['Ref']; ?>" alt="">
					</div>
					
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $nom ?></h2>
					<h3 class="p-price"><?php echo $prix ?> TND</h3>
					<h4 class="p-stock">Disponibilité: <span><?php echo $quantite ?></span></h4>
					
					
					
					<div class="quantity">
						<p>Quantité</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
					<a href="#" class="site-btn">Acheter</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p><?php echo $description ?></p>
									
								</div>
							</div>
						</div>
						
						
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
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
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
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
	<!-- RELATED PRODUCTS section end -->


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
