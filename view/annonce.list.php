<?php $title="Liste des annonces";?>
<?php ob_start() ?>
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="sidebar-container">
				
				<!-- Location -->
				<div class="sidebar-widget">
					<h3>Location</h3>
					<div class="input-with-icon">
						<div id="autocomplete-container">
							<input id="autocomplete-input" type="text" placeholder="Location">
						</div>
						<i class="icon-material-outline-location-on"></i>
					</div>
				</div>

				<!-- Keywords -->
				
				
				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<select class="selectpicker" multiple data-selected-text-format="count" data-size="7" title="All Categories">
						<option>Accounting and Finance</option>
						<option>Clerical & Data Entry</option>
						<option>Counseling</option>
						<option>Court Administration</option>
						<option>Human Resources</option>
						<option>Investigative</option>
						<option>IT and Computers</option>
						<option>Law Enforcement</option>
						<option>Management</option>
						<option>Miscellaneous</option>
						<option>Public Relations</option>
					</select>
				</div>
				
				<!-- Job Types -->
			

				<!-- Salary -->
				

				<!-- Tags -->
		

			</div>
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">Search Results</h3>

			<div class="notify-box margin-top-15">
				

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

			<div class="listings-container compact-list-layout margin-top-35">
				 <?php 
				    while($annonce=$annonces->fetch()){
				     ?>
				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="<?php echo'public/images/'.$annonce["photo"] ?>" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h3 class="job-listing-title"><?= $annonce["libelle"] ?></h3>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									<li><i class="icon-material-outline-business"></i> <?= $annonce["prix"] ?> DT <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>
									<li><i class="icon-material-outline-location-on"></i> <?= $annonce["adresse"] ?></li>
									<li><i class="icon-material-outline-business-center"></i> <?= $annonce["date"] ?></li>
									<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
								</ul>
							</div>
						</div>

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>
				</a>	
				<?php
				    }
				    ?>


				
			</div>


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-60 margin-bottom-60">
						<nav class="pagination">
							<ul>
								<li class="pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#" class="current-page">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li class="pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
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

