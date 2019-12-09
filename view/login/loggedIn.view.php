<?php ob_start(); ?>
<div class="right-side">

<!--  User Notifications -->
<div class="header-widget hide-on-mobile">
    
    <!-- Notifications -->
    <div class="header-notifications">

        <!-- Trigger -->
        <div class="header-notifications-trigger">
            <a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
        </div>

        <!-- Dropdown -->
        <div class="header-notifications-dropdown">

            <div class="header-notifications-headline">
                <h4>Notifications</h4>
                <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                    <i class="icon-feather-check-square"></i>
                </button>
            </div>

            <div class="header-notifications-content">
                <div class="header-notifications-scroll" data-simplebar>
                    <ul>
                        <!-- Notification -->
                        <li class="notifications-not-read">
                            <a href="dashboard-manage-candidates.html">
                                <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                <span class="notification-text">
                                    <strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
                                </span>
                            </a>
                        </li>

                        <!-- Notification -->
                        <li>
                            <a href="dashboard-manage-bidders.html">
                                <span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
                                <span class="notification-text">
                                    <strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
                                </span>
                            </a>
                        </li>

                        <!-- Notification -->
                        <li>
                            <a href="dashboard-manage-jobs.html">
                                <span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
                                <span class="notification-text">
                                    Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
                                </span>
                            </a>
                        </li>

                        <!-- Notification -->
                        <li>
                            <a href="dashboard-manage-candidates.html">
                                <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                <span class="notification-text">
                                    <strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    
    <!-- Messages -->
    <div class="header-notifications">
        <div class="header-notifications-trigger">
            <a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
        </div>

        <!-- Dropdown -->
        <div class="header-notifications-dropdown">

            <div class="header-notifications-headline">
                <h4>Messages</h4>
                <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                    <i class="icon-feather-check-square"></i>
                </button>
            </div>

            <div class="header-notifications-content">
                <div class="header-notifications-scroll" data-simplebar>
                    <ul>
                        <!-- Notification -->
                        <li class="notifications-not-read">
                            <a href="dashboard-messages.html">
                                <span class="notification-avatar status-online"><img src="public/images/user-avatar-small-03.jpg" alt=""></span>
                                <div class="notification-text">
                                    <strong>David Peterson</strong>
                                    <p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
                                    <span class="color">4 hours ago</span>
                                </div>
                            </a>
                        </li>

                        <!-- Notification -->
                        <li class="notifications-not-read">
                            <a href="dashboard-messages.html">
                                <span class="notification-avatar status-offline"><img src="public/images/user-avatar-small-02.jpg" alt=""></span>
                                <div class="notification-text">
                                    <strong>Sindy Forest</strong>
                                    <p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
                                    <span class="color">Yesterday</span>
                                </div>
                            </a>
                        </li>

                        <!-- Notification -->
                        <li class="notifications-not-read">
                            <a href="dashboard-messages.html">
                                <span class="notification-avatar status-online"><img src="public/images/user-avatar-placeholder.png" alt=""></span>
                                <div class="notification-text">
                                    <strong>Marcin Kowalski</strong>
                                    <p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
                                    <span class="color">Yesterday</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
        </div>
    </div>

</div>
<!--  User Notifications / End -->

<!-- User Menu -->
<div class="header-widget">

    <!-- Messages -->
    <div class="header-notifications user-menu">
        <div class="header-notifications-trigger">
            <a href="#"><div class="user-avatar status-online"><img src="public/images/<?php echo($user->getPhoto());?>" alt=""></div></a>
        </div>

        <!-- Dropdown -->
        <div class="header-notifications-dropdown">

            <!-- User Status -->
            <div class="user-status">

                <!-- User Name / Avatar -->
                <div class="user-details">
                    <div class="user-avatar status-online"><img src="public/images/<?php echo($user->getPhoto());?> " alt=""></div>
                    <div class="user-name">
                        <?php echo($user->getName());?> <?php echo($user->getPrenom());?> <span><?php if(($user->getType())=="utilisateur")echo("Utilisateur Normal");else echo("Jobeur");?></span>
                    </div>
                </div>
                
                <!-- User Status Switcher -->
                <div class="status-switch" id="snackbar-user-status">
                    <label class="user-online current-status">Online</label>
                    <label class="user-invisible">Invisible</label>
                    <!-- Status Indicator -->
                    <span class="status-indicator" aria-hidden="true"></span>
                </div>	
        </div>
        
        <ul class="user-menu-small-nav">

            <li><a href="?controller=dashboard&action=parametre"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
            <li><a href="?controller=login&action=logout"><i class="icon-material-outline-power-settings-new"></i> Deconnexion</a></li>
        </ul>

        </div>
    </div>

</div>
<!-- User Menu / End -->

<!-- Mobile Navigation Button -->
<span class="mmenu-trigger">
    <button class="hamburger hamburger--collapse" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
</span>

</div>


<?php $rightSide= ob_get_clean();
?>