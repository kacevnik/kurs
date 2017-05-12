<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('/'); ?></title>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script type="text/javascript">
/* <![CDATA[ */
var wordpressOptionsObject = {"urlRoot":"https:\/\/wp.microthemes.ca\/quantum","templateDir":"https:\/\/wp.microthemes.ca\/quantum\/wp-content\/themes\/quantum-theme","stickyNav":"on","autoPlaySpeed":"8000","slideSpeed":"500","rewindSpeed":"1000","ppAnimationSpeed":"","ppAutoPlay":"false","ppShowTitle":"","ppColorTheme":"dark_square","ppSlideShowSpeed":"6040","dropMenuIndicator":"fa-angle-down","securityError":"Security answer invalid. Please answer the security question correctly.","successMessage":"Your inquiry has been received, thank you.","failedMessage":"A system error occurred. Please try again later.","ajaxSearchResult":"No results","fieldValidation":"Validating Fields...","loginMessage":"Validating credentials, please wait...","loginMessageSuccess":"Login successful, refreshing page...","loginMessageInvalid":"Invalid credentials, try again.","contactForm1":"Please fill in your name.","contactForm2":"Please provide a valid email address.","contactForm3":"Please provide a subject line.","contactForm4":"Please provide a message for your inquiry.","quickContact1":"Please provide your full name.","quickContact2":"Please provide a valid email address.","quickContact3":"Please provide a message for your inquiry.","reg1":"Please provide your name.","reg2":"Please provide a valid email address.","reg3":"Please enter a username.","reg4":"Please enter a password for your account.","reg5":"Security answer invalid. Please answer the security question correctly.","reg6":"Your registration is complete! You can now proceed to login.","reg7":"A system error has occurred, please try again.","pm_ln_ajax_url":"https:\/\/wp.microthemes.ca\/quantum\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Search form overlay -->
    <div class="pm-search-container" id="pm-search-container">
        <!-- Search window -->
        <div class="pm-search-columns">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pm-center">
                        <p>Поиск по сайту</p>
                    </div>          
                </div>
                <div class="row">
                    <div class="col-lg-12">                       
                        <div class="pm-search-box">
                           <i class="fa-search pm-search-submit" id="pm-search-submit"></i>
                            <form name="searchform" id="pm-searchform" method="get" action="">
                                <input type="text" name="s" placeholder="Начните поиск...">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-lg-12">
                        <i class="fa fa-times pm-search-exit" id="pm-search-exit"></i>
                    </div>
                </div>
            </div>
        </div>
<!-- Search window end -->

    </div>

<!-- Search form overlay end -->

    <div class="pm-full-mode" id="pm_layout_wrapper">  
        <div id="pm-quick-message" class="pm-quick-login-message">
            <span><i id="pm-quick-message-close" class="typcn typcn-times"></i> Validating credentials, please wait...</span>
        </div>
            
<!-- pm-header-info -->        
        
    	<div class="pm-header-info">        
            <div class="container pm-header-info-container">                
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                        <ul class="pm-header-support-ul">
                            <li>
                                <p class="pm-header-support-text">Наши телефоны: 8-903-555-5555</p>
                            </li>
                            <li class="pm-header-support-text-bullet">
                                <p class="pm-header-support-text">•</p>
                            </li>
                            <li>
                                <p class="pm-header-support-text">Потдержка: 1-888-555-5555</p>
                            </li>
                        </ul>                        
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
                        <div class="pm-header-buttons-spacer">                    
                            <ul class="pm-header-buttons-ul">                            
                                <li>
                                    <p class="pm-header-login-text">Начните сегодня!</p>
                                </li>
                                <li>
                                    <div class="pm-base-btn pm-header-btn search" id="pm-search-btn">
                                        <a class="fa fa-search"></a>
                                    </div>
                                </li>
                           </ul>                                                      
                        </div>                        
                    </div>
                </div>                
            </div>            
        </div>

<!-- /pm-header-info -->
    
        <header>
            <div class="container pm-header-container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-12 pm-header-logo-div">
                        <div class="pm-header-logo-container">
                    	   <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri().'/img/logo.png'; ?>" class="img-responsive" alt="IT курсы">
                            </a>
                        </div>
                        <div class="pm-header-mobile-btn-container">
                            <button type="button" class="navbar-toggle pm-main-menu-btn" id="pm-main-menu-btn" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-12 pm-main-menu">
                        <?php
                            $args = array('theme_location' => 'top', 'container'=> 'nav', 'menu_class' => 'sf-menu sf-js-enabled', 'menu_id' => 'pm-nav');
                            wp_nav_menu($args);
                        ?>
                    </div>                                    
                </div>        
            </div>
        </header>

        <!-- /header -->