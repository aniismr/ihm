
<?php $title = "Chanty.tn" ; ?>

<?php ob_start(); ?>

<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="public/images/1122.png">
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
		<form action="index.php?controller=jobeur" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- Search Field -->
					<div class="intro-search-field with-autocomplete">
						<label for="autocomplete-input" class="field-title ripple-effect">Selectionner une categorie</label>
						<div class="input-with-icon">
						<select name="categorie" id="skills" class="selectpicker with-border" data-size="7" title="Selectionner la catégorie" data-live-search="true">
							<?php while($categorie=$categories->fetch()){
								?>
							<option><?php echo($categorie['nom']);?>
							</option>
							<?php } ?>
						</select>
							<i class="icon-material-outline-location-on"></i>
						</div>
					</div>

					<!-- Search Field -->
					<div class="intro-search-field with-autocomplete">
						<label for="autocomplete-input" class="field-title ripple-effect">Selectionner une competence</label>
						<div class="input-with-icon">
						<select name="skill" id="listskills" class="selectpicker with-border" data-size="7" title="Selectionner skills" data-live-search="true">
                        </select>
						</div>
					</div>

					<!-- Button -->
					<div class="intro-search-button">
	
						<button type="submit" class="button ripple-effect" >Chercher</button>
					</div>
				</div>
			</div>
		</div>	
							</form>
		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter"> <?= $nbCategories ?></strong>
						<span>Categories</span>
					</li>
					<li>
						<strong class="counter"><?= $nbAnnonces ?></strong>
						<span>Annonces</span>
					</li>
					<li>
						<strong class="counter"><?= $nbJobbeurs ?></strong>
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
<div class="section gray margin-top-65 margin-bottom-65 padding-bottom-50 padding-top-50">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Nous sommes partout en Tunisie !</h3>
				</div>
			</div>
                <?php
                    while($location=$locations->fetch()){
                ?>
                <div class="col-xl-2 col-md-2">
                    <!-- Photo Box -->
                    <a href="jobs-list-layout-1.html" class="photo-box" data-background-image="<?php echo'public/images/villes/'.$location["photo"] ?>">
                        <div class="photo-box-content">
                            <h3><?= $location["nom"] ?></h3>
                        </div>
                    </a>
                </div>
                <?php
                        }
                ?>

		</div>
	</div>
</div>
<!-- Features Cities / End -->

<!-- Highest Rated Freelancers -->
<div class="section padding-top-20 padding-bottom-50 full-width-carousel-fix">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->   
				<div class="section-headline margin-top-0 margin-bottom-25">
					<h3>Les jobbeurs les plus recrutés</h3>
					<a href="index.php?controller=annonce" class="headline-link">Afficher tout les jobbeurs</a>
				</div>
			</div>

			<div class="col-xl-12">
				<div class="default-slick-carousel freelancers-container freelancers-grid-layout">
  <?php
                    while($jobeur=$jobbeurs->fetch()){
                ?>
					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
								
								<!-- Bookmark Icon -->
							
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="index.php?controller=jobeur&action=detail&id=<?php echo($jobeur[0]);?>" ><img src="public/images/<?php echo($jobeur['photo']) ;?>" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="index.php?controller=jobeur&action=detail&id=<?php echo($jobeur[0]);?>" ><?php echo($jobeur['nom']); ?>  <?php echo($jobeur['prenom']);?><img class="flag" src="public/images/flags/tn.png" alt="" title="Sfax" data-tippy-placement="top"></a></h4>
									
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Sfax</strong></li>
									<li>Salaire min: <strong>25 Dt</strong></li>
								
								</ul>
							</div>
								<a href="index.php?controller=jobeur&action=detail&id=<?php echo($jobeur[0]);?>" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					 <?php
                        }
                ?>

					<!-- Freelancer / End -->

					<!--Freelancer -->
					
					<!-- Freelancer / End -->

					<!--Freelancer -->
				
					<!-- Freelancer / End -->

					
	
								
					<!--Freelancer -->
					
					<!-- Freelancer / End -->


				</div>
			</div>

		</div>
	</div>
</div>
<!-- Highest Rated Freelancers / End-->
<?php $content = ob_get_clean(); ?>
