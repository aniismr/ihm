<?php 
ob_start();
?>
<div class="dashboard-content-container" data-simplebar>
<div class="dashboard-content-inner" >
    
    <!-- Dashboard Headline -->
    <div class="dashboard-headline">
        <h3>Paramètres</h3>

        <!-- Breadcrumbs -->
        <nav id="breadcrumbs" class="dark">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Tableau de bord</a></li>
                <li>Paramètres</li>
            </ul>
        </nav>
    </div>

    <!-- Row -->
    <form method="post" action="index.php?controller=login&action=confirmer">
    <div class="row">

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div class="dashboard-box margin-top-0">
                
                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-account-circle"></i> Mon compte</h3>
                </div>

                <div class="content with-padding padding-bottom-0">

                    <div class="row">

                        <div class="col-auto">
                            <div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
                                <img class="profile-pic" src="public/images/<?= $user->getPhoto()?>" alt="" />
                                <div class="upload-button"></div>
                                <input class="file-upload" type="file" accept="image/*"/>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Nom </h5>
                                        <input name="nom" type="text" class="with-border" value="<?= $user->getName() ?>"/>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Prenom</h5>
                                        <input name="prenom" type="text" class="with-border" value="<?= $user->getPrenom() ?>">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <!-- Account Type -->
                                    <div class="submit-field">
                                        <h5>Account Type</h5>
                                        <div class="account-type">
                                            <div>
                                                <input value="utilisateur" type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" <?php if($type!="jobbeur") echo "checked";else echo"disabled" ;?>/>
                                                <label  for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Utilisateur</label>
                                            </div>

                                            <div>
                                                <input value="jobbeur" type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"<?php if($type=="jobbeur") echo "checked";else echo"disabled" ;?>/>
                                                <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Jobbeur</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Email</h5>
                                        <input name="email" type="text" class="with-border" value="<?= $user->getEmail() ?>">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div class="dashboard-box">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-face"></i> Mon profile</h3>
                </div>

                <div class="content">
                    <ul class="fields-ul">
                    <li>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <div class="bidding-widget">
                                        <!-- Headline -->
                                        <span class="bidding-detail">Ajuster votre <strong>salaire minimum</strong> par intervention</span>

                                        <!-- Slider -->
                                        <div class="bidding-value margin-bottom-10"> DT <span id="biddingVal"></span></div>
                                        <input name="salmin"  class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="DT" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>Compétences <i class="help-icon" data-tippy-placement="right" title="Vous pouvez ajouter jusqu'a 10 compétences"></i></h5>

                                    <!-- Skills List -->
                                    <div class="keywords-container">
                                            
                                        <div class="keyword-input-container">
                                        <select id="skillpicker" class="keyword-input selectpicker with-border" data-size="7" title="Selectionner la catégorie" data-live-search="true">
                                                    <?php while($categorie=$categories->fetch()){
                                                        ?>
                                                    <optgroup label="<?php echo($categorie['nom']);?>">
                                                    <?php $curcatid=categorie::getId($categorie['nom']);
                                                    $skills=skill::getSkills($curcatid);
                                                    while($skill=$skills->fetch()){
                                                        ?><option><?php echo($skill['nom']);?></option>
                                                    <?php }
                                                    ?>
                                               
                                                    </optroup>
                                                    <?php } ?>
                                                </select>
                                                <span class="keyword-input-button ripple-effect" id="skillid" ><i class="icon-material-outline-add" ></i></span>
                                        </div>
                                        <div name="skillls" id="arrayskill">

                                        </div>
                            
                        
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>Attachments</h5>
                                    
                                    <!-- Attachments -->
                                    <div class="attachments-container margin-top-0 margin-bottom-0">
                                        <div class="attachment-box ripple-effect">
                                            <span>Cover Letter</span>
                                            <i>PDF</i>
                                            <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                        </div>
                                        <div class="attachment-box ripple-effect">
                                            <span>Contract</span>
                                            <i>DOCX</i>
                                            <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                    <!-- Upload Button -->
                                    <div class="uploadButton margin-top-0">
                                        <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
                                        <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                                        <span class="uploadButton-file-name">Maximum file size: 10 MB</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="submit-field">
                                    <h5>Numero de Téléphone </h5>
                                    <input type="number" name="tel" class="with-border" value="+216">
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="submit-field">
                                    <h5>Region</h5>
                                    <select name="location" class="selectpicker with-border" data-size="7" title="Selectionner votre region" data-live-search="true">
                                        <?php while($reg=$regions->fetch()){
                                            ?>
                                            <option><?php echo($reg['nom']);?></option>
                                        <?php };?>
                                            
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="submit-field">
                                    <h5>Introduce Yourself</h5>
                                    <textarea name="descr" cols="30" rows="5" class="with-border"></textarea>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div id="test1" class="dashboard-box">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
                </div>

                <div class="content with-padding">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Current Password</h5>
                                <input type="password" class="with-border">
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>New Password</h5>
                                <input type="password" class="with-border">
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Repeat New Password</h5>
                                <input type="password" class="with-border">
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="checkbox">
                                <input type="checkbox" id="two-step" checked>
                                <label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Button -->
        <div class="col-xl-12">
            <input type="submit" class="button ripple-effect big margin-top-30" value="Sauvegarder les modifications"/>
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