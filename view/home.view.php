
<?php $title = "Chanty.tn" ; ?>

<?php ob_start(); ?>

<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="public/images/home-background.jpg">
	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Trouvez le prestataire idéal pour tous les services du quotidien.</strong>
						<br>
						<span>Des milliers de particuliers utilisent <strong class="color">Chanty</strong></span>
					</h3>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- Search Field -->
					<div class="intro-search-field with-autocomplete">
						<label for="autocomplete-input" class="field-title ripple-effect">Où?</label>
						<div class="input-with-icon">
							<input id="autocomplete-input" type="text" placeholder="Tunis, Gabes, Kasserine ...">
							<i class="icon-material-outline-location-on"></i>
						</div>
					</div>

					<!-- Search Field -->
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect">Quel service cherchez vous?</label>
						<input id="intro-keywords" type="text" placeholder="Plomberie, Electricité ...">
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'">Chercher</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong > <?= $nbCategories ?></strong>
						<span>Categories</span>
					</li>
					<li>
						<strong class="counter"><?= $nbAnnonces ?></strong>
						<span>Annonces</span>
					</li>
					<li>
						<strong class="counter">1,232</strong>
						<span>Jobbeurs</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>
<!--Category Boxes-->
<div class="section margin-top-65">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">

				<div class="section-headline centered margin-bottom-15">
					<h3>Les travaux les plus demandés</h3>
				</div>

				<!-- Category Boxes Container -->
				<div class="categories-container">

					<!-- Category Box -->
                    <?php 
				    while($categorie=$categories->fetch()){
				     ?>
					<a href="jobs-grid-layout-full-page.html" class="category-box">
						<div class="category-box-icon">
							<i class="<?= $categorie["photo"]?>"></i>
						</div>
						<div class="category-box-counter">612</div>
						<div class="category-box-content">
							<h3><?= $categorie["nom"] ?></h3>
							<p><?= $categorie["description"]?></p>
						</div>
					</a>
				    <?php
				    }
				    ?>
                </div>
            </div>
        </div>
    </div>
</div>    

<!-- Features Cities -->
<div class="section margin-top-65 margin-bottom-65">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Nous sommes partout en Tunisie !</h3>
				</div>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-1.html" class="photo-box" data-background-image="images/featured-city-01.jpg">
					<div class="photo-box-content">
						<h3>San Francisco</h3>
						<span>376 Jobs</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-full-page-map.html" class="photo-box" data-background-image="images/featured-city-02.jpg">
					<div class="photo-box-content">
						<h3>New York</h3>
						<span>645 Jobs</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-grid-layout-full-page.html" class="photo-box" data-background-image="images/featured-city-03.jpg">
					<div class="photo-box-content">
						<h3>Los Angeles</h3>
						<span>832 Jobs</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-2.html" class="photo-box" data-background-image="images/featured-city-04.jpg">
					<div class="photo-box-content">
						<h3>Miami</h3>
						<span>513 Jobs</span>
					</div>
				</a>
			</div>

		</div>
	</div>
</div>
<!-- Features Cities / End -->

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>