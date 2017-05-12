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