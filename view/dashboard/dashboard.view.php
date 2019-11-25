<?php $title="Profile";?>
<?php ob_start();?>

<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="">
							<li class="active"><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Tableau de bord</a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Favoris </a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Feedbacks </a></li>
						</ul>
						
						<ul data-submenu-title="Organiser et gérer">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Mes offres </a>
								<ul>
									<li><a href="dashboard-manage-jobs.html"> Gérer mes offres <span class="nav-tag">3</span></a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Mes demandes </a>
								<ul>
									<li><a href="dashboard-manage-tasks.html">Gérer mes demandes <span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-manage-bidders.html">Gérer les offres</a></li>
									<li><a href="?controller=dashboard&action=postTask">Demander un service</a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Mon compte">
							<li><a href="?controller=dashboard&action=parametre"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Deconnexion</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->
<?php $dashboard=ob_get_clean();?>
