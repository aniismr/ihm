<?php 
$title="Detail du jobbeur";
ob_start();
?>
<div class="single-page-header" data-background-image="public/images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><a href="single-company-profile.html"><img src="public/images/<?php echo($jobeur['photo']);?>" alt=""></a></div>
						<div class="header-details">
							<h3><?php echo($jobeur['nom']) ;?> <?php echo($jobeur['prenom']);?></h3>
							<h5>Information sur le jobbeur</h5>
							<ul>
								
								<li><div class="star-rating" data-rating="<?php echo($jobeur['rate']);?>"></div></li>
								<li><img class="flag" src="public/images/flags/tn.png" alt=""> Tunisie</li>
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Annual Salary</div>
							<div class="salary-amount"><?php echo($jobeur['sal_min']);?> DT</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			<?php while($job=$jobeurs->fetch()){

			?>
			<div class="job-overview">
						<div class="job-overview-headline"><?php echo($job['cnamei']);?></div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="bookmark-icon"></i>
									<span>Skill</span>
									<h5><?php echo($job['cskilli']);?></h5>
								</li>
							</ul>
						</div>
			</div>
			<?php };?>
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Description</h3>
				<p><?php echo($jobeur['description']);?></p>

			</div>

			<div class="single-page-section">
				<?php 
			while($rate=$rates->fetch()){
					

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
								<a href="index.php?controller=jobeur&action=detail&id=<?php echo($jobeur['id']);?>"><img src="public/images/<?php echo($rate[9]) ;?>"	  alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#"><?php echo($rate[7]); ?>  <?php echo($rate[8]);?> </a></h4>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="<?php echo($rate['num']);?>"></div>
								</div>
							</div>

						</div>
							<li ><i   class="icon-material-outline-business-center"></i><?php echo($rate[2]); ?></li>
					</div>
					
			
			
				</div>
					<?php 
					}?><!-- Freelancer / End -->
			</div>

			<div class="single-page-section">
				<h3 class="margin-bottom-25"></h3>

				<!-- Listings Container -->
				<div class="listings-container grid-layout">

					</div>
					<!-- Listings Container / End -->

				</div>
		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
					
				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<div class="job-overview">
						<div class="job-overview-headline">Detail du jobbeur</div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="icon-material-outline-location-on"></i>
									<span>Location</span>
									<h5><?php echo($jobeur['ville']);?></h5>
								</li>
								<li>
									<i class="icon-material-outline-local-atm"></i>
									<span>Salaire</span>
									<h5><?php echo($jobeur['sal_min']);?></h5>
								</li>
								<li>
									<i class="icon-material-outline-access-time"></i>
									<span>Date d'inscription</span>
									<h5><?php echo($jobeur['date_inscrit']);?></h5>
								</li>
								<li>
									<i class="icon-material-outline-location-on"></i>
									<span>Téléphone</span>
									<h5><?php echo($jobeur['num_tel']);?></h5>
								</li>
								<li>
									<i class="icon-material-outline-location-on"></i>
									<span>Email</span>
									<h5><?php echo($jobeur['email']);?></h5>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<h3>Bookmark or Share</h3>

					<!-- Bookmark Button -->
					<button class="bookmark-button margin-bottom-25">
						<span class="bookmark-icon"></span>
						<span class="bookmark-text">Bookmark</span>
						<span class="bookmarked-text">Bookmarked</span>
					</button>

					<!-- Copy URL -->
					<div class="copy-url">
						<input id="copy-url" type="text" value="" class="with-border">
						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
					</div>

					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Interesting? <strong>Share It!</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
<?php $content=ob_get_clean();?>