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
					<a href="index.php"><img src="public/images/chanty.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li>
							<a href="index.php" class="current">Accueil</a>
						</li>

						<li>
							<a href="index.php?controller=annonce">Trouver un job</a>
						</li>

						<li>
							<a href="index.php?controller=jobeur">Liste des jobbeurs</a>
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
	<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Spacer -->

</header>
<?php if(isset($dashboard)){?>
	<div class="container-fluid">
	<div class="row">
	<?php echo($dashboard);
	
	if(isset($content)){
		echo"<div class='col-10'>";
		echo($content);
		echo"</div>";}
		
	?>
	</div>
	</div>
	<?php 
}else{
?>

<div>
<?php if(isset($content))echo($content); ?>
</div>
<?php }?>

<div class="clearfix"></div>
<!-- Footer / End -->


</div>

<!-- Wrapper / End -->
<?php if(isset($popup))echo($popup);?>
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
<script>
$(document).ready(function(){
	$('#skills').on('change',function(){
		var str=$('#skills').val();
	if(str){
	$.ajax({
		type:"POST",
		url:'index.php?controller=ajax',
		data:'curcat='+str,
		success:function(html){
			$('#listskills').html(html);
			$('#listskills').selectpicker('refresh');

		}
	});

}
else{
	$('#listskills').html("<option class='bs-title-option' value=''>Selectionner skills</option>");
}
	})
})

</script>

<script>
$(document).ready(function(){
                                            $('#skillid').on('click',function(){

												var label=$('#skillpicker :selected').parent().attr('label');
								
												var str=$('#skillpicker').val();
											
												if(str!="")
								
												$('#arrayskill').append("<span class='badge badge-primary'><span></span><input name='sk[]' value='"+label+":"+str+"'/></span>");
                                            })
                                        })
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