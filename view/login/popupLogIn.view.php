<?php
ob_start();
?>
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

<!--Tabs -->
<div class="sign-in-form">

    <ul class="popup-tabs-nav">
        <li><a href="#login">Connexion</a></li>
        <li><a href="#register">S'inscrire</a></li>
    </ul>

    <div class="popup-tabs-container">

        <!-- Login -->
        <div class="popup-tab-content" id="login">
            
            <!-- Welcome Text -->
            <div class="welcome-text">
                <h3>Bienvenue!</h3>
                <span>Vous n'etes pas inscrit? <a href="#" class="register-tab">S'inscrire!</a></span>
            </div>
                
            <!-- Form -->
            <form method="post" action="index.php?controller=login&action=login" id="login-form">
                <div class="input-with-icon-left">
                    <i class="icon-material-baseline-mail-outline"></i>
                    <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Adresse mail" required/>
                </div>

                <div class="input-with-icon-left">
                    <i class="icon-material-outline-lock"></i>
                    <input type="password" class="input-text with-border" name="password" id="password" placeholder="mot de passe" required/>
                </div>
                <a href="#" class="forgot-password">mot de passe oublié?</a>
            </form>
            
            <!-- Button -->
            <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Connexion<i class="icon-material-outline-arrow-right-alt"></i></button>
            
            <!-- Social Login -->
            <div class="social-login-separator"><span>or</span></div>
            <div class="social-login-buttons">
                <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
                <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
            </div>

        </div>

        <!-- Register -->
        <div class="popup-tab-content" id="register">
            
            <!-- Welcome Text -->
            <div class="welcome-text">
                <h3>Allons creer votre compte!</h3>
            </div>
 <form action="index.php?controller=login&action=adduser" method="post" id="register-account-form">
            <!-- Account Type -->
            <div class="account-type">
                <div>
                    <input type="radio" name="account-type-radio" value="utilisateur" id="freelancer-radio" class="account-type-radio" checked/>
                    <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Utilisateur</label>
                </div>

                <div>
                    <input type="radio" name="account-type-radio" value="jobbeur" id="employer-radio" class="account-type-radio"/>
                    <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Jobbeur</label>
                </div>
            </div>
                
            <!-- Form -->
           
                <div class="input-with-icon-left">
                    <i class="icon-material-baseline-mail-outline"></i>
                    <input type="text" class="input-text with-border" name="email" placeholder="Adresse mail" required/>
                </div>
                <div class="input-with-icon-left">
                    <i class="icon-material-baseline-mail-outline"></i>
                    <input type="text" class="input-text with-border" name="nom"  placeholder="Nom" required/>
                </div>
                 <div class="input-with-icon-left">
                    <i class="icon-material-baseline-mail-outline"></i>
                    <input type="text" class="input-text with-border" name="prenom"  placeholder="Prenom" required/>
                </div>

                <div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
                    <i class="icon-material-outline-lock"></i>
                    <input type="password" class="input-text with-border" name="pass" id="password-register" placeholder="Password" required/>
                </div>

             
           
            
            <!-- Button -->
   <input type="submit" name="submit" class="button ripple-effect big margin-top-30" value="Sinscrire"   /> 
            </form> 
            <!-- Social Login -->
            <div class="social-login-separator"><span>or</span></div>
            <div class="social-login-buttons">
                <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
                <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
            </div>

        </div>

    </div>
</div>
</div>
<?php $popup=ob_get_clean();?>