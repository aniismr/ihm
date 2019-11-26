<?php 
	$annonce=$annoce->fetch();

$title="Annonce details";?>
<?php ob_start() ?>
<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><a href="single-company-profile.html"><img src="<?php echo'public/images/'.$annonce[12] ?>" alt=""></a></div>
						<div class="header-details">
							<h3><?php echo($annonce['libelle']); ?></h3>
							
							<ul>
								<li><a href="single-company-profile.html"><i class="icon-material-outline-business"></i> <?= $annonce[32] ?></a></li>
								<li><div class="star-rating" data-rating="4.9"></div></li>
								<li><img class="flag" src="images/flags/gb.svg" alt=""> <?= $annonce["adresse"] ?></li>
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">    Prix    </div>
							<div class="salary-amount">  <?= $annonce["prix"] ?> DT </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">

			<div class="single-page-section">
				<h3 class="margin-bottom-25">Job Description</h3>
				<p>  <?= $annonce[2] ?> </p>
			</div>

			<div class="single-page-section">
				<h3 class="margin-bottom-25">Propeietere de l'annonce</h3>

				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<a href="single-freelancer-profile.html"><img src="<?php echo'public/images/'.$annonce[22] ?>" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#"><?= $annonce[18] ?> <?= $annonce[19] ?> </a></h4>
								
								<!-- Rating -->
								
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> London</strong></li>
								<li>Rate <strong>$60 / hr</strong></li>
								<li>Job Success <strong>95%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
			</div>

			<div class="single-page-section">
				<h3 class="margin-bottom-30">Location</h3>
				<div id="single-job-map-container">
					<div id="singleListingMap" data-latitude="51.507717" data-longitude="-0.131095" data-map-icon="im im-icon-Hamburger"></div>
					<a href="#" id="streetView">Street View</a>
				</div>
			</div>

			<div class="single-page-section">
				<h3 class="margin-bottom-25">Similar Jobs</h3>

				<!-- Listings Container -->
				<div class="listings-container grid-layout">

						<!-- Job Listing -->
						<a href="#" class="job-listing">

							<!-- Job Listing Details -->
							<div class="job-listing-details">
								<!-- Logo -->
								<div class="job-listing-company-logo">
									<img src="images/company-logo-02.png" alt="">
								</div>

								<!-- Details -->
								<div class="job-listing-description">
									<h4 class="job-listing-company">Coffee</h4>
									<h3 class="job-listing-title">Barista and Cashier</h3>
								</div>
							</div>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									<li><i class="icon-material-outline-location-on"></i> San Francisco</li>
									<li><i class="icon-material-outline-business-center"></i> Full Time</li>
									<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
									<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
								</ul>
							</div>
						</a>

						<!-- Job Listing -->
						<a href="#" class="job-listing">

							<!-- Job Listing Details -->
							<div class="job-listing-details">
								<!-- Logo -->
								<div class="job-listing-company-logo">
									<img src="images/company-logo-03.png" alt="">
								</div>

								<!-- Details -->
								<div class="job-listing-description">
									<h4 class="job-listing-company"><?= $annonce[32] ?> <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
									<h3 class="job-listing-title">Restaurant Manager</h3>
								</div>
							</div>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									<li><i class="icon-material-outline-location-on"></i> San Francisco</li>
									<li><i class="icon-material-outline-business-center"></i> Full Time</li>
									<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
									<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
								</ul>
							</div>
						</a>
					</div>
					<!-- Listings Container / End -->

				</div>
		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				<a href="#small-dialog" class="apply-now-button popup-with-zoom-anim">Apply Now <i class="icon-material-outline-arrow-right-alt"></i></a>
					
				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<div class="job-overview">
						<div class="job-overview-headline">Job Summary</div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="icon-material-outline-location-on"></i>
									<span>Location</span>
									<h5><?= $annonce[32] ?>, <?= $annonce[6] ?></h5>
								</li>
								
								<li>
									<i class="icon-material-outline-local-atm"></i>
									<span>Prix</span>
									<h5><?= $annonce["prix"] ?> DT</h5>
								</li>
								<li>
									<i class="icon-material-outline-access-time"></i>
									<span>Date Posted</span>
									<h5><?= $annonce[7] ?></h5>
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
<?php $content=ob_get_clean(); ?>

