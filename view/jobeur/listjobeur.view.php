<?php 
$title="Liste des jobs";
ob_start()?>

<br/>
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="sidebar-container">
				<form action="index.php?controller=jobeur" method="post">
				<!-- Location -->
				<div class="sidebar-widget">
					<h3>Location</h3>

						<select id="location" class="selectpicker with-border" name="location" data-size="7" title="Selectionner la localisation" data-live-search="true">
							<?php while($location=$locations->fetch()){
								?>
							<option><?php echo($location['nom']);?>
							</option>
							<?php } ?>
						</select>
								
				</div>

				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Categories</h3>
					<select name="categorie" id="skills" class="selectpicker with-border" data-size="7" title="Selectionner la catégorie" data-live-search="true">
							<?php while($categorie=$categories->fetch()){
								?>
							<option><?php echo($categorie['nom']);?>
							</option>
							<?php } ?>
						</select>
				</div>

				<!-- Keywords -->
				<div class="sidebar-widget">
					<h3>Skills</h3>
					<div class="keywords-container">
						<div class="keyword-input-container">
						<select name="skill" id="listskills" class="selectpicker with-border" data-size="7" title="Selectionner skills" data-live-search="true">
                        </select>
						</div>
						<div class="keywords-list"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>

				<!-- Hourly Rate -->
				<div class="sidebar-widget">
					<h3>Hourly Rate</h3>
					<div class="margin-top-55"></div>

					<!-- Range Slider -->
					<input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="10" data-slider-max="250" data-slider-step="5" data-slider-value="[10,250]"/>
				</div>
				<div class="sidebar-widget">
				<input type="submit" name="submit" class="button ripple-effect big margin-top-30" value="Rechercher"   />
			</div>

							</form>
				<!-- Tags -->
		
				<div class="clearfix"></div>

			</div>
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">Search Results</h3>

			<div class="notify-box margin-top-15">
				<div class="switch-container">
					<label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
				</div>

				<div class="sort-by">
					<span>Sort by:</span>
					<select class="selectpicker hide-tick">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select>
				</div>
			</div>
			
			<!-- Freelancers List Container -->
			<div class="freelancers-container freelancers-list-layout compact-list margin-top-35">
			<?php  $lastid=0;
			$aid=array();
			while($jobeur=$jobeurs->fetch()){
					if (!in_array($jobeur['id'],$aid))
						{$aid[$lastid]=$jobeur['id'];
							$lastid++;

						?>
				<!--Freelancer -->
				<div class="freelancer">
					
					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<a href="index.php?controller=jobeur&action=detail&id=<?php echo($jobeur['id']);?>"><img src="public/images/<?php echo($jobeur['photo']) ;?>"	  alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#"><?php echo($jobeur['nom']); ?>  <?php echo($jobeur['prenom']);?> </a></h4>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="<?php echo($jobeur['rate']);?>"></div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> <?php echo($jobeur['ville']);?> </strong></li>
								<li>Rate <strong><?php echo($jobeur['sal_min']);?> DT/ hr</strong></li>

							</ul>
						</div>
						
						<a href="index.php?controller=jobeur&action=detail&id=<?php echo($jobeur['id']);?>" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						<div class="job-listing-description">
							<h3 class="job-listing-title"></h3>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									
									<li><i class="icon-material-outline-business-center"></i><?php echo($jobeur['cnamei']); ?></li>
									<li><i class="icon-material-outline-access-time"></i> <?php echo ($jobeur['date_inscrit']);?></li>
								</ul>
							</div>
						</div>
					</div>
			
				</div>
					<?php }
					}?><!-- Freelancer / End -->

				

	
			</div>
			<!-- Freelancers Container / End -->


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-40 margin-bottom-60">
						<nav class="pagination">
							<ul>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
								<li><a href="#" class="current-page ripple-effect">1</a></li>
								<li><a href="#" class="ripple-effect">2</a></li>
								<li><a href="#" class="ripple-effect">3</a></li>
								<li><a href="#" class="ripple-effect">4</a></li>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>
	</div>
</div>
<?php $content=ob_get_clean(); ?>