<?php
ob_start();
?>
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

<!--Tabs -->
<div class="sign-in-form">

    <ul class="popup-tabs-nav">
        <li><a href="#login">Log In</a></li>
        <li><a href="#register">Register</a></li>
    </ul>

    <div class="popup-tabs-container">

        <!-- Login -->
        <div class="popup-tab-content" id="login">
            
            <!-- Welcome Text -->
            <div class="welcome-text">
                <h3>We're glad to see you again!</h3>
                <span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
            </div>
                
            <!-- Form -->
            <form method="post" action="index.php?controller=login.controller&action=login" id="login-form">
                <div class="input-with-icon-left">
                    <i class="icon-material-baseline-mail-outline"></i>
                    <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
                </div>

                <div class="input-with-icon-left">
                    <i class="icon-material-outline-lock"></i>
                    <input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
                </div>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </form>
            
            <!-- Button -->
            <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
            
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
                <h3>Let's create your account!</h3>
            </div>

            <!-- Account Type -->
            <div class="account-type">
                <div>
                    <input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
                    <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
                </div>

                <div>
                    <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
                    <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
                </div>
            </div>
                
            <!-- Form -->
            <form method="post" id="register-account-form">
                <div class="input-with-icon-left">
                    <i class="icon-material-baseline-mail-outline"></i>
                    <input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
                </div>

                <div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
                    <i class="icon-material-outline-lock"></i>
                    <input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required/>
                </div>

                <div class="input-with-icon-left">
                    <i class="icon-material-outline-lock"></i>
                    <input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
                </div>
            </form>
            
            <!-- Button -->
            <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
            
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