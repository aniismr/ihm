<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 14:36:48 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title><?= $title ?> </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/colors/blue.css">

</head><body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index-2.html"><img src="public/images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li>
							<a href="#" class="current">Accueil</a>
						</li>

						<li>
							<a href="#">Trouver un job</a>
						</li>

						<li>
							<a href="#">Demander un service</a>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<?= $rightSide?>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div>
<?= $content ?>
</div>
<div class="clearfix"></div>
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="public/images/logo2.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Pour les entreprises et les particuliers</h3>
						<ul>
							<li><a href="#"><span>Trouver des jobs</span></a></li>
							<li><a href="#"><span>Ajouter votre resumé</span></a></li>
							<li><a href="#"><span>Alertes de jobs</span></a></li>
							<li><a href="#"><span>Mes favouris</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Pour les employeurs</h3>
						<ul>
							<li><a href="#"><span>Trouvers des jobbeurs</span></a></li>
							<li><a href="#"><span>Demander un service</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Liens utiles</h3>
						<ul>
							<li><a href="#"><span>Contactez-nous</span></a></li>
							<li><a href="#"><span>Données privées</span></a></li>
							<li><a href="#"><span>Conditions d'utilisation</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Compte</h3>
						<ul>
							<li><a href="#"><span>Se connecter</span></a></li>
							<li><a href="#"><span>S'inscrire</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Rejoigner notre Newsletter</h3>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Entez votre adresse e-mail">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>Chanty.tn</strong>. Tout les droits reservées.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->
<?= $popup?>
<!-- Scripts
================================================== -->
<script src="public/js/jquery-3.4.1.min.js"></script>
<script src="public/js/jquery-migrate-3.1.0.min.html"></script>
<script src="public/js/mmenu.min.js"></script>
<script src="public/js/tippy.all.min.js"></script>
<script src="public/js/simplebar.min.js"></script>
<script src="public/js/bootstrap-slider.min.js"></script>
<script src="public/js/bootstrap-select.min.js"></script>
<script src="public/js/snackbar.js"></script>
<script src="public/js/clipboard.min.js"></script>
<script src="public/js/counterup.min.js"></script>
<script src="public/js/magnific-popup.min.js"></script>
<script src="public/js/slick.min.js"></script>
<script src="public/js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		   componentRestrictions: {country: "tn"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>
</body>
</html>