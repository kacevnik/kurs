<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('/'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
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
                                <p class="pm-header-support-text">Наши телефоны: <?php echo fw_get_db_settings_option('kdv_phone_header'); ?></p>
                            </li>
                            <li class="pm-header-support-text-bullet">
                                <p class="pm-header-support-text">•</p>
                            </li>
                            <li>
                                <p class="pm-header-support-text">Потдержка: <?php echo fw_get_db_settings_option('kdv_phone_header2'); ?></p>
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
                                <img src="<?php echo 'http:'.fw_get_db_settings_option('kdv_logo')['url']; ?>" class="img-responsive" alt="<?php bloginfo('name'); ?>">
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