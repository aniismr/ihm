<?php 
ob_start();
?>
<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Post a Task</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Post a Task</li>
					</ul>
				</nav>
			</div>
	
            <!-- Row -->
            <form action="index.php?controller=dashboard&action=addannoce" method="post">
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Task Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Project Name</h5>
                                        <input type="text" class="with-border" placeholder="e.g. amenagement de maison" name="libelle">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Category</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Category" name="categorie">
                                        <?php 
				    while($categorie=$categories->fetch()){
				     ?>
											<option><?= $categorie["nom"]?></option>
                                            <?php
				    }
				    ?>
										</select>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
                                    <h5>Location</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Category" name="location">
                                        <?php 
				    while($location=$locations->fetch()){
				     ?>
											<option><?= $location["nom"]?></option>
                                            <?php
				    }
				    ?>
										</select>
									</div>
                                </div>
                                <div class="col-xl-6">
									<div class="submit-field">
										<h5>Adresse</h5>
										
											
												<div class="input-with-icon">
													<input class="with-border" type="text" placeholder="Rue ennour " name="adresse">
													
												
											</div>
											
										
										
									</div>
                                </div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>What is your estimated budget?</h5>
										
											
												<div class="input-with-icon">
													<input class="with-border" type="text" placeholder="Budget" name="prix">
													<i class="currency">DT</i>
												</div>
											
											
										
										
									</div>
                                </div>
                                <div class="col-xl-6">
									<div class="submit-field">
										<h5>Delais</h5>
                                        <input type="text" class="with-border" placeholder="delais" name="delais">
									</div>
								</div>

								

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Describe Your Project</h5>
										<textarea cols="30" rows="5" class="with-border" name="description"></textarea>
										<div class="uploadButton margin-top-30">
											<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your project</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<input type="submit" name="submit" class="button ripple-effect big margin-top-30" value="Post a Task"   /> 
				</div>

            </div>
            </form>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

        </div>
        
	</div>
	<!-- Dashboard Content / End -->

</div>
<?php $content=ob_get_clean();?>