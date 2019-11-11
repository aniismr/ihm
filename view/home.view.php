
<?php $title = "Home Page" ; ?>

<?php ob_start(); ?>

<div class="section margin-top-65">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">

				<div class="section-headline centered margin-bottom-15">
					<h3>Popular Job Categories</h3>
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

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>