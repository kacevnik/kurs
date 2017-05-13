<?php get_header(); ?> 


        		<!-- PRESENTATION AREA -->
                <div class="pm-presentation-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="97">
                    <div class="pm-presentation-text-container" style="height:335px; top:25%;">
                        <div class="pm-presentation-text">
                            <h1><?php echo fw_get_db_settings_option('kdv_slogan_1'); ?></h1>
                            <p><?php echo fw_get_db_settings_option('kdv_slogan_2'); ?></p>
                        </div>
<?php 
    if(fw_get_db_settings_option('kdv_gallery_off') == 1){
?>
                        <ul class="pm-presentation-posts owl-carousel owl-theme" id="pm-presentation-owl">
<?php
    $args = array(
        'numberposts' => fw_get_db_settings_option('kdv_gallery_count_items'),
        'post_status' => 'publish',
        'category'    => fw_get_db_settings_option('kdv_gallery_category'),
        'orderby'     => 'date'
    ); 

    $result = wp_get_recent_posts($args);

    foreach( $result as $p ){ 
?>                          <li>
                                <div class="pm-presentation-post-container">
                                    <div class="pm-presentation-post-date">
                                        <div class="pm-presentation-post-date-box">
                                            <p class="pm-month"><?php echo get_the_date('M', $p['ID']); ?></p>
                                            <p class="pm-day"><?php echo get_the_date('d', $p['ID']); ?></p>
                                        </div>               
                                    	<div class="pm-presentation-post-comment-count">
                                            <p><?php echo get_comments_number( $p['ID'] ); ?></p>
                                        </div>
                                    </div>

<!-- /pm-presentation-post-date -->
      
                                    <div class="pm-presentation-post-title">
                                        <p><?php echo $p['post_title']; ?></p>
                                    </div>      
                                    <div class="pm-presentation-post-excerpt">
                                        <p>
                                            <?php
                                                $arr_cat = get_the_category($p['ID']);
                                                if(count($arr_cat) > 1){
                                                    foreach ($arr_cat as $arr_cat_item) {
                                                        if($arr_cat_item->id == $args['category']){
                                                            continue;
                                                        }else{
                                                            echo $arr_cat_item->name;
                                                            break;
                                                        }
                                                    }
                                                }else{
                                                    echo "Интересные курсы";
                                                }
                                            ?>                                                
                                            </p>
                                    </div> 
                                    <div class="pm-presentation-post-hover-container">
                                        <p class="pm-presentation-post-hover-excerpt">
                                            <?php echo get_the_excerpt($p['ID']); ?> 
                                        <a href="<?php echo get_permalink($p['ID']); ?>">[...]</a>
                                        </p>
                                        <a href="<?php echo get_permalink($p['ID']); ?>">Подробнее »</a>
                                    </div>
                                    <div class="pm-presentation-post-img">
      	        		               <img src="<?php echo get_the_post_thumbnail_url($p['ID'], 'full'); ?>" alt="<?php echo $p['post_title']; ?>" class="lazyOwl"> 
                                    </div>
                                </div>

<!-- /pm-presentation-post-container -->

                            </li>
<?php } ?>
                                                    
                        </ul>
<?php } ?>                                  
                    </div>
                </div>

<!-- PRESENTATION AREA end -->
        
                
                    
    


		
		        
        	<div class="pm-column-container container pm-containerPadding0">
          		<div class="row">
                	<div class="col-lg-12 col-md-12 col-sm-12">
                    								<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid pm-containerPadding-top-40 pm-containerPadding-bottom-80 vc_custom_1474925432540 vc_row-has-fill" style="position: relative; left: -371.5px; box-sizing: border-box; width: 1903px; padding-left: 371.5px; padding-right: 371.5px;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="feature-box">
            <i class="fa fa-tv" style="color:#ffffff;"></i>
            <div class="content">
                <h4 class="uppercase" style="color:#ffffff;">Software Development</h4>
                 <span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui.</span>            </div>
        </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="feature-box">
            <i class="fa fa-globe" style="color:#ffffff;"></i>
            <div class="content">
                <h4 class="uppercase" style="color:#ffffff;">Networking</h4>
                 <span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui.</span>            </div>
        </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="feature-box">
            <i class="fa fa-cogs" style="color:#ffffff;"></i>
            <div class="content">
                <h4 class="uppercase" style="color:#ffffff;">Business Solutions</h4>
                 <span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui.</span>            </div>
        </div>
        
        <!-- Element Code / END -->

        </div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid pm-containerPadding-top-100 pm-containerPadding-bottom-60"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-statistic-box-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-offset="50" data-wow-delay="0.3s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
        
        	<div class="pm-statistic-box-container" style="background-color:#283e4e;">
				                    <h3 style="color:#ffffff;">55%</h3>
                                
<p style="text-align: left;">&nbsp;reduction in development costs</p>
<p>                                    <img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/man-icon.png" class="img-responsive" alt="stat_icon">
                            </p></div>
        
        </div>
        
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-statistic-box-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-offset="50" data-wow-delay="0.6s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
        
        	<div class="pm-statistic-box-container" style="background-color:#dbc164;">
				                    <h3 style="color:#ffffff;">72%</h3>
                                
<p style="text-align: left;">increase in quality assurance</p>
<p>                                    <img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/man-icon.png" class="img-responsive" alt="stat_icon">
                            </p></div>
        
        </div>
        
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-statistic-box-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-offset="50" data-wow-delay="0.9s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.9s; -moz-animation-delay: 0.9s; animation-delay: 0.9s;">
        
        	<div class="pm-statistic-box-container" style="background-color:#283e4e;">
				                    <h3 style="color:#ffffff;">85%</h3>
                                
<p style="text-align: left;">increase in development time</p>
<p>                                    <img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/man-icon.png" class="img-responsive" alt="stat_icon">
                            </p></div>
        
        </div>
        
        
        <!-- Element Code / END -->

        </div></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2>Take your company to the next level</h2>
<p>QUANTUM offers workshops and courses to help to get your development up to speed with the latest technologies. In an environment where technology is constantly evolving its important that your staff stay current and up to date. Our courses are proven to help your employees get up to speed with the latest tech resulting in cost savings and improved development times.</p>
<p>Our workshops run between 1 to 2 hours and are absolutey free to registered QUANTUM members.</p>

		</div>
	</div>
        
        
        <!-- Element Code start -->
        
        <div class="pm-rounded-btn pm-page-scroll  " style="margin-top:20px; margin-bottom:20px;"><a href="#upcoming-workshops" target="_self">upcoming workshops <i class="fa fa-angle-down"></i></a></div>
        
        <!-- Element Code / END -->

        </div></div></div></div><div id="upcoming-workshops" class="vc_row wpb_row vc_row-fluid pm-medium-font pm-medium-link"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h3 style="text-align: center;">UPCOMING WORKSHOPS</h3>
<p style="text-align: center;"><a href="/quantum/wp-register.php">Register today</a> and gain full access to our workshops</p>

		</div>
	</div>
</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-workshop-post-container" style="margin:30px 0 0;">
        
            <div class="pm-workshop-post-title-container">
                <p class="pm-workshop-post-title">Advanced Foundation</p>
                <p class="pm-workshop-post-subtitle">The skills you need as an application developer</p>
            </div>
            <div class="pm-workshop-post-date-container">
                <div class="pm-workshop-post-icon">
                    <i class="fa fa-bolt"></i>
                </div>
                <p class="pm-title">Mastering Design Patterns</p>
                <p class="pm-date">Nov 30 2017 | 1:30pm EST.</p>
            </div>
            <div class="pm-workshop-shortcode-link"><a href="https://wp.microthemes.ca/quantum/workshop/mastering-design-patterns/" class="pm-workshop-post-button-container">View full details<i class="fa fa-angle-right"></i></a></div>
        </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-workshop-post-container" style="margin:30px 0 0;">
        
            <div class="pm-workshop-post-title-container">
                <p class="pm-workshop-post-title">Core Programming skills</p>
                <p class="pm-workshop-post-subtitle">The skills you need as a software developer</p>
            </div>
            <div class="pm-workshop-post-date-container">
                <div class="pm-workshop-post-icon">
                    <i class="fa fa-tablet"></i>
                </div>
                <p class="pm-title">Mastering Object Oriented Programming</p>
                <p class="pm-date">Dec 07 2017 | 1:30pm EST.</p>
            </div>
            <div class="pm-workshop-shortcode-link"><a href="https://wp.microthemes.ca/quantum/workshop/mastering-object-oriented-programming/" class="pm-workshop-post-button-container">View full details<i class="fa fa-angle-right"></i></a></div>
        </div>
        
        <!-- Element Code / END -->

        </div></div></div></div><div class="vc_row wpb_row vc_row-fluid pm-containerPadding-bottom-90"><div class="pm-center pm-containerPadding-bottom-40 wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-rounded-btn   " style="margin-top:20px; margin-bottom:20px;"><a href="/quantum/workshops" target="_self">View all workshops <i class="fa fa-angle-right"></i></a></div>
        
        <!-- Element Code / END -->

        </div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.5" data-vc-parallax-image="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/newsletter-background.jpg" class="vc_row wpb_row vc_row-fluid pm-containerPadding80 pm-column-border vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving" style="border-top: 5px solid white; position: relative; left: -371.5px; box-sizing: border-box; width: 1903px; padding-left: 371.5px; padding-right: 371.5px;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="pm-medium-font wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="text-align: center;"><span style="color: #ffffff;">Sign up for our free weekly software design courses,</span><br>
<span style="color: #ffffff;"> we’ll send them right to your inbox.</span></p>

		</div>
	</div>
</div></div></div></div>        
        
        <!-- Element Code start -->
        
        <div class="pm-workshop-newsletter-form-container">
            <form action="http://pulsarmedia.us4.list-manage2.com/subscribe?u=2aa9334fc1bc18c8d05500b41&amp;amp;id=dbcb577c4d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">  
            	                	<input name="MERGE1" type="text" id="MERGE1" placeholder="Your Name">
                                
                <input name="MERGE0" type="text" id="MERGE0" placeholder="Email Address">
                <input name="subscribe" id="mc-embedded-subscribe" type="submit" value="subscribe" class="pm-workshop-newsletter-submit-btn">
            </form>
         </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(&quot;https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/newsletter-background.jpg&quot;); top: -50%;"></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid pm-containerPadding60"><div class="pm-containerPadding-top-60 pm-containerPadding-bottom-60 wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h5 style="text-align: center;">Who you’ll be learning from</h5>
<p style="text-align: center;">These are just a few of the stellar software designers and developers that teach our software design courses.</p>

		</div>
	</div>

        <!-- Element Code start -->
        
        <div class="pm-divider" style="height:1px; background-color:#ffffff; margin:20px 0px;"></div>
        
        <!-- Element Code / END -->

        <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-staff-profile-container wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="50" data-wow-duration="1s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <div class="pm-staff-profile-image-wrapper">
                <div class="pm-staff-profile-image">
                    <img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/01_bio_pic.jpg" class="img-responsive" alt="profile">
                </div>
                <ul class="pm-staff-profile-icons">
                                            <li><a href="http://www.twitter.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="http://www.facebook.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="http://www.google.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="http://www.linkedin.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-linkedin"></i></a></li>
                    			
                </ul>
            </div>
            <div class="pm-staff-profile-details">
                <a href="https://wp.microthemes.ca/quantum/staff-member/bryan-johnson/"><p class="pm-staff-profile-name" style="color:#2c5e83;">Bryan Johnson</p></a>
                <p class="pm-staff-profile-title" style="color:#4b4b4b;">Lead Software Engineer</p>
                <p class="pm-staff-profile-bio" style="color:#4b4b4b;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt.  <a href="https://wp.microthemes.ca/quantum/staff-member/bryan-johnson/">[...]</a></p>
            </div>
        </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-staff-profile-container wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="50" data-wow-duration="1s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
            <div class="pm-staff-profile-image-wrapper">
                <div class="pm-staff-profile-image">
                    <img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/02_bio_pic.jpg" class="img-responsive" alt="profile">
                </div>
                <ul class="pm-staff-profile-icons">
                                            <li><a href="http://www.twitter.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="http://www.facebook.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="http://www.google.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="http://www.linkedin.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-linkedin"></i></a></li>
                    			
                </ul>
            </div>
            <div class="pm-staff-profile-details">
                <a href="https://wp.microthemes.ca/quantum/staff-member/christina-lewison/"><p class="pm-staff-profile-name" style="color:#2c5e83;">Christina Lewison</p></a>
                <p class="pm-staff-profile-title" style="color:#4b4b4b;">Lead Software Designer</p>
                <p class="pm-staff-profile-bio" style="color:#4b4b4b;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt.  <a href="https://wp.microthemes.ca/quantum/staff-member/christina-lewison/">[...]</a></p>
            </div>
        </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-staff-profile-container wow fadeInUp" data-wow-delay="0.9s" data-wow-offset="50" data-wow-duration="1s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.9s; -moz-animation-delay: 0.9s; animation-delay: 0.9s;">
            <div class="pm-staff-profile-image-wrapper">
                <div class="pm-staff-profile-image">
                    <img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/06_bio_pic.jpg" class="img-responsive" alt="profile">
                </div>
                <ul class="pm-staff-profile-icons">
                                            <li><a href="http://www.twitter.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="http://www.facebook.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="http://www.google.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="http://www.linkedin.com" target="_blank" style="background-color:#dad9d9;"><i class="fa fa-linkedin"></i></a></li>
                    			
                </ul>
            </div>
            <div class="pm-staff-profile-details">
                <a href="https://wp.microthemes.ca/quantum/staff-member/lenny-davis/"><p class="pm-staff-profile-name" style="color:#2c5e83;">Lenny Davis</p></a>
                <p class="pm-staff-profile-title" style="color:#4b4b4b;">Front-end Developer</p>
                <p class="pm-staff-profile-bio" style="color:#4b4b4b;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt.  <a href="https://wp.microthemes.ca/quantum/staff-member/lenny-davis/">[...]</a></p>
            </div>
        </div>
        
        <!-- Element Code / END -->

        </div></div></div></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.5" data-vc-parallax-image="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/stats-background.jpg" class="vc_row wpb_row vc_row-fluid pm-containerPadding-top-120 pm-containerPadding-bottom-120 pm-column-border vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving" style="border-top: 5px solid white; position: relative; left: -371.5px; box-sizing: border-box; width: 1903px; padding-left: 371.5px; padding-right: 371.5px;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-cta-container ">
            <div class="pm-cta-divider" style="background-color:#dbc164;"></div>
            <p class="pm-cta-text">Our proven track record speaks for itself</p>
            <div class="pm-cta-divider" style="background-color:#dbc164;"></div>
        </div>
        
        <!-- Element Code / END -->

        <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-statistic-box wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="50" data-wow-duration="1s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <div class="pm-statistic-box-triangle" style="background-image:url(https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/stats-triangle.png);">
                <p class="pm-statistic-text1">10</p>
                <p class="pm-statistic-text2">years</p>
            </div>
            <div class="pm-statistic-box-desc">
                <span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum at interdum.</span>            </div>                           
        </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-statistic-box wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="50" data-wow-duration="1s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
            <div class="pm-statistic-box-triangle" style="background-image:url(https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/stats-triangle.png);">
                <p class="pm-statistic-text1">2M</p>
                <p class="pm-statistic-text2">engineers</p>
            </div>
            <div class="pm-statistic-box-desc">
                <span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum at interdum.</span>            </div>                           
        </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-statistic-box wow fadeInUp" data-wow-delay="0.9s" data-wow-offset="50" data-wow-duration="1s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.9s; -moz-animation-delay: 0.9s; animation-delay: 0.9s;">
            <div class="pm-statistic-box-triangle" style="background-image:url(https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/stats-triangle.png);">
                <p class="pm-statistic-text1">4K</p>
                <p class="pm-statistic-text2">resources</p>
            </div>
            <div class="pm-statistic-box-desc">
                <span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum at interdum.</span>            </div>                           
        </div>
        
        <!-- Element Code / END -->

        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <div class="pm-statistic-box wow fadeInUp" data-wow-delay="1.2s" data-wow-offset="50" data-wow-duration="1s" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
            <div class="pm-statistic-box-triangle" style="background-image:url(https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/stats-triangle.png);">
                <p class="pm-statistic-text1">1</p>
                <p class="pm-statistic-text2">process</p>
            </div>
            <div class="pm-statistic-box-desc">
                <span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum at interdum.</span>            </div>                           
        </div>
        
        <!-- Element Code / END -->

        </div></div></div></div></div></div></div><div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(&quot;https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/stats-background.jpg&quot;); top: -50%;"></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="pm-containerPadding-top-100 wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h5 style="text-align: center;">Companies that partner with us for training</h5>

		</div>
	</div>

        <!-- Element Code start -->
        
        <div class="pm-divider" style="height:1px; background-color:#ffffff; margin:20px 0px;"></div>
        
        <!-- Element Code / END -->

                
        
        <!-- Element Code start -->
        
        <ul class="pm-partners-carousel-posts owl-carousel owl-theme" id="pm-partners-carousel-owl" style="opacity: 1; display: block;">
        
        	<div class="owl-wrapper-outer autoHeight" style="height: 148px;"><div class="owl-wrapper" style="width: 2830px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 283px;"><li><div class="pm-parnters-post-container"><div class="pm-parnters-post-url"><a href="http://www.microthemes.ca" target="_self">www.microthemes.ca</a></div><div class="pm-parnters-post-featured">Featured Member</div><img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/11/micro-themes.jpg" class="img-responsive" alt="Micro Themes"></div></li></div><div class="owl-item" style="width: 283px;"><li><div class="pm-parnters-post-container"><div class="pm-parnters-post-url"><a href="http://www.citrix.com" target="_self">www.citrix.com</a></div><img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/02_partner.jpg" class="img-responsive" alt="Citrix"></div></li></div><div class="owl-item" style="width: 283px;"><li><div class="pm-parnters-post-container"><div class="pm-parnters-post-url"><a href="http://www.pitneybowes.com" target="_self">www.pitneybowes.com</a></div><div class="pm-parnters-post-featured">Gold Member</div><img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/03_partner.jpg" class="img-responsive" alt="PitneyBowes"></div></li></div><div class="owl-item" style="width: 283px;"><li><div class="pm-parnters-post-container"><div class="pm-parnters-post-url"><a href="http://www.plantronics.com" target="_self">www.plantronics.com</a></div><img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/04_partner.jpg" class="img-responsive" alt="Plantronics"></div></li></div><div class="owl-item" style="width: 283px;"><li><div class="pm-parnters-post-container"><div class="pm-parnters-post-url"><a href="http://www.capgemini.com" target="_self">www.capgemini.com</a></div><div class="pm-parnters-post-featured">Featured Member</div><img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/05_partner.jpg" class="img-responsive" alt="Capgemini"></div></li></div></div></div>        
        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-chevron-left"></i></div><div class="owl-next"><i class="fa fa-chevron-right"></i></div></div></div></ul>
        
        <!-- Element Code / END -->

        </div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="pm-medium-font pm-medium-link pm-containerPadding-bottom-90 pm-containerPadding-top-60 wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="text-align: center;"><strong>Want your entire team to get training?</strong><br>
We’ll create a custom program or workshop just for your company.<br>
<a href="#">Register today</a> and get started with QUANTUM.</p>

		</div>
	</div>
</div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid pm-containerPadding-top-60 vc_custom_1441128653427 vc_row-has-fill" style="position: relative; left: -371.5px; box-sizing: border-box; width: 1903px; padding-left: 371.5px; padding-right: 371.5px;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">        
        
        <!-- Element Code start -->
        
        <ul class="pm-testimonials-carousel owl-carousel owl-theme" id="pm-testimonials-carousel-owl" style="opacity: 1; display: block;"><div class="owl-wrapper-outer autoHeight" style="height: 400px;"><div class="owl-wrapper" style="width: 4520px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 1130px;"><li><div class="col-lg-5 col-md-5 col-sm-5 pm-center"><img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/02_profile.jpg" class="img-responsive" alt="Joe Jackson"> </div><div class="col-lg-7 col-md-7 col-sm-7"><div class="pm-testimonial-container"><div class="pm-testimonial-quote-box"><i class="fa fa-quote-left"></i></div><div class="pm-testimonial-text-box"><p>"Quantum has helped me in reaching my business goals. There open minded approach to software development and design combined with years of experience really shows throughout their work." </p><p class="pm-testimonial-name">Joe Jackson</p><p class="pm-testimonial-title">Owner of MediaWorks Software | Toronto, Ontario</p></div></div></div></li></div><div class="owl-item" style="width: 1130px;"><li><div class="col-lg-5 col-md-5 col-sm-5 pm-center"><img src="https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/01_profile.jpg" class="img-responsive" alt="Daniel Johnson"> </div><div class="col-lg-7 col-md-7 col-sm-7"><div class="pm-testimonial-container"><div class="pm-testimonial-quote-box"><i class="fa fa-quote-left"></i></div><div class="pm-testimonial-text-box"><p>"The team over Quantum was great. They helped get me up to speed with new programming technologies in very little time. I highly recommend Quantum to anyone looking for quality training." </p><p class="pm-testimonial-name">Daniel Johnson</p><p class="pm-testimonial-title">Software engineer at Loophole Media | Waterloo, Ontario</p></div></div></div></li></div></div></div><div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-chevron-left"></i></div><div class="owl-next"><i class="fa fa-chevron-right"></i></div></div></div></ul>        
        <!-- Element Code / END -->

        </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>
                                                
                                                                        
                    </div>
                </div>
            </div>
        
        




		            
            <div class="pm-fat-footer">
                
                <div class="container">
                    <div class="row">
                    
                    	<!-- Widget layouts -->   
                        
                                                
                                                
                                                
                                            
                                                
                                                                                
                                <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
                                    <div id="pm_recentposts_widget-2" class="widget pm_recentposts_widget"><h6><i class="fa fa-pencil pm-sidebar-icon"></i> Recent Posts</h6><ul class="pm-recent-blog-posts"><li><div class="pm-recent-blog-post-thumb" style="background-image:url(https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/02_post.jpg);"></div><div class="pm-recent-blog-post-details"><a href="https://wp.microthemes.ca/quantum/protected-posts/">Messages protégés</a><p class="pm-date-published">Nov 21 2016 by micro_themes </p></div></li><li><div class="pm-recent-blog-post-thumb" style="background-image:url(https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/07_post.jpg);"></div><div class="pm-recent-blog-post-details"><a href="https://wp.microthemes.ca/quantum/private-members-area/">Espace privé</a><p class="pm-date-published">Nov 21 2016 by micro_themes </p></div></li><li><div class="pm-recent-blog-post-thumb" style="background-image:url(https://wp.microthemes.ca/quantum/wp-content/uploads/2016/09/06_post.jpg);"></div><div class="pm-recent-blog-post-details"><a href="https://wp.microthemes.ca/quantum/e-commerce-support/">Support e-commerce</a><p class="pm-date-published">Nov 21 2016 by micro_themes </p></div></li></ul></div>                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
                                    <div id="pm_careersposts_widget-2" class="widget pm_careersposts_widget"><h6><i class="fa fa-users pm-sidebar-icon"></i> Careers</h6><ul class="pm-career-opening-widget-posts"><li class="pm-career-opening-widget-post"><i class="fa fa-laptop"></i><div class="pm-career-opening-widget-post-info"><p>Course Instructor</p><a href="https://wp.microthemes.ca/quantum/career/course-instructor/">Read More <i class="fa fa-angle-right"></i></a></div></li><li class="pm-career-opening-widget-post"><i class="fa fa-tablet"></i><div class="pm-career-opening-widget-post-info"><p>Java Developer</p><a href="https://wp.microthemes.ca/quantum/career/java-developer/">Read More <i class="fa fa-angle-right"></i></a></div></li><li class="pm-career-opening-widget-post"><i class="fa fa-android"></i><div class="pm-career-opening-widget-post-info"><p>Technical Analyst</p><a href="https://wp.microthemes.ca/quantum/career/technical-analyst/">Read More <i class="fa fa-angle-right"></i></a></div></li></ul></div>                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
                                    <div id="tag_cloud-2" class="widget widget_tag_cloud"><h6>Tags</h6><div class="tagcloud"><a href="https://wp.microthemes.ca/quantum/tag/business-2/" class="tag-link-80 tag-link-position-1" title="4 topics" style="font-size: 22pt;">business</a>
<a href="https://wp.microthemes.ca/quantum/tag/commerce/" class="tag-link-89 tag-link-position-2" title="1 topic" style="font-size: 8pt;">commerce</a>
<a href="https://wp.microthemes.ca/quantum/tag/corporate/" class="tag-link-91 tag-link-position-3" title="3 topics" style="font-size: 18.5pt;">corporate</a>
<a href="https://wp.microthemes.ca/quantum/tag/cross-browser/" class="tag-link-92 tag-link-position-4" title="1 topic" style="font-size: 8pt;">cross-browser</a>
<a href="https://wp.microthemes.ca/quantum/tag/fontawesome/" class="tag-link-109 tag-link-position-5" title="1 topic" style="font-size: 8pt;">Fontawesome</a>
<a href="https://wp.microthemes.ca/quantum/tag/privacy/" class="tag-link-150 tag-link-position-6" title="2 topics" style="font-size: 14.3pt;">privacy</a>
<a href="https://wp.microthemes.ca/quantum/tag/responsive/" class="tag-link-160 tag-link-position-7" title="1 topic" style="font-size: 8pt;">responsive</a>
<a href="https://wp.microthemes.ca/quantum/tag/security/" class="tag-link-162 tag-link-position-8" title="2 topics" style="font-size: 14.3pt;">security</a>
<a href="https://wp.microthemes.ca/quantum/tag/shopping/" class="tag-link-163 tag-link-position-9" title="1 topic" style="font-size: 8pt;">shopping</a>
<a href="https://wp.microthemes.ca/quantum/tag/typicons/" class="tag-link-186 tag-link-position-10" title="1 topic" style="font-size: 8pt;">Typicons</a></div>
</div>                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
                                    <div id="latest-tweets-2" class="widget tweets"><h6><i class="fa fa-twitter pm-sidebar-icon"></i> Twitter</h6>
			<div id="pm-twitter-news" class="pm-tweet-list"><ul><li><div class="tweet_container"><p class="tweet">What You Need To Know About OAuth2 And Logging In With Facebook <a href="https://t.co/cLGC3MtpWH" data-expanded-url="http://flip.it/Q9pk_w" target="_blank" title="http://flip.it/Q9pk_w" data-scribe="element:url"><span>http://</span>flip.it/Q9pk_w<span>&nbsp;</span></a></p><p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to=859428450611982338" class="twitter_reply_icon" target="_blank">Reply</a><a href="https://twitter.com/intent/retweet?tweet_id=859428450611982338" class="twitter_retweet_icon" target="_blank">Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id=859428450611982338" class="twitter_fav_icon" target="_blank">Favorite</a></p></div></li><li><div class="tweet_container"><p class="tweet">Medical-Link version 1.3.9 is now live. Check out the full changelog here: <a href="https://t.co/WIcGaOsboj" data-expanded-url="https://www.microthemes.ca/change-logs/medical-link-v1-3-9-apr-25-2017/" target="_blank" title="https://www.microthemes.ca/change-logs/medical-link-v1-3-9-apr-25-2017/" data-scribe="element:url"><span>https://www.</span>microthemes.ca/change-logs/me<span>dical-link-v1-3-9-apr-25-2017/&nbsp;</span>…</a></p><p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to=857000752354643968" class="twitter_reply_icon" target="_blank">Reply</a><a href="https://twitter.com/intent/retweet?tweet_id=857000752354643968" class="twitter_retweet_icon" target="_blank">Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id=857000752354643968" class="twitter_fav_icon" target="_blank">Favorite</a></p></div></li></ul></div> 
            
			
</div>                                </div>
                        
                                                
                        <!-- Widget layouts end -->                    
                        
                    </div>	
                </div>
                
            </div>
        
            
		        
        	        
            <footer>
            
                <div class="container">
                    <div class="row">
                    
                    	
                                              
                       	   <div class="col-lg-6 col-md-6 col-sm-6">
                                
<div class="pm-footer-social-info-container">
	
		
        <h6>Join the conversation</h6>
        <p>Follow us on social media and stay up to date.</p>
        
                                
    <ul class="pm-footer-social-icons">
    
                    <li title="Twitter" class="pm_tip_static_top"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter tw"></i></a></li>
                            <li title="Facebook" class="pm_tip_static_top"><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook fb"></i></a></li>
                            <li title="Google Plus" class="pm_tip_static_top"><a href="http://www.googleplus.com" target="_blank"><i class="fa fa-google-plus gp"></i></a></li>
                            <li title="Linkedin" class="pm_tip_static_top"><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin linked"></i></a></li>
                            <li title="YouTube" class="pm_tip_static_top"><a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube yt"></i></a></li>
                                                                                                    <li title="Email us" class="pm_tip_static_top"><a href="mailto:info@quantum.com" target="_blank"><i class="fa fa-envelope envelope"></i></a></li>
                            <li title="RSS Feed" class="pm_tip_static_top"><a href="/rss" target="_blank"><i class="fa fa-rss rss"></i></a></li>
                
        
    </ul>
</div><!-- /.pm-footer-social-info-container -->                           </div>
                           <!-- /.col-lg-6 -->
                           
                       	 
                       
                       
                                              
                       	   <div class="col-lg-6 col-md-6 col-sm-6">
                                
<div class="pm-footer-subscribe-container">
	
		
        <h6>Subscribe to our newsletter</h6>
        <p>Sign up for our newsletter and stay up to date</p>
        
                                    
    <div class="pm-footer-subscribe-form-container">
    
            
        <form action="http://pulsarmedia.us4.list-manage2.com/subscribe?u=2aa9334fc1bc18c8d05500b41&amp;id=dbcb577c4d" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
            <input name="MERGE0" type="email" class="pm-footer-subscribe-field" id="MERGE3" placeholder="Email Address">
            <input name="subscribe" type="submit" value="" class="pm-footer-subscribe-submit-btn">
        </form>
    </div>
</div>
<!-- /.pm-footer-subscribe-container -->                           </div>
                           <!-- /.col-lg-6 -->
                           
                       	 
                                                   
                        
                    </div>
                </div>	
    
                    
            </footer>
        
            
		        
            <div class="pm-footer-copyright">
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12 pm-footer-copyright-col">
                                                                           
                            
                                                                <p class="pm-footer-copyright-info">© 2017 Quantum. Produced by <a href="http://www.microthemes.ca" target="_blank">Micro Themes</a></p>
                                 
                            
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 pm-footer-navigation-col">
                        	<ul id="pm-footer-nav" class="pm-footer-navigation l_tinynav1"><li id="menu-item-2011" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2011"><a href="https://wp.microthemes.ca/quantum/who-we-are/">Who we are</a></li>
<li id="menu-item-2019" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2019"><a href="https://wp.microthemes.ca/quantum/gallery/">Gallery</a></li>
<li id="menu-item-2009" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2009"><a href="https://wp.microthemes.ca/quantum/shop/">Courses</a></li>
<li id="menu-item-2006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2006"><a href="https://wp.microthemes.ca/quantum/careers/">Careers</a></li>
<li id="menu-item-1997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1997"><a href="https://wp.microthemes.ca/quantum/workshops/">Workshops</a></li>
<li id="menu-item-389" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389"><a href="https://wp.microthemes.ca/quantum/blog/">Blog</a></li>
<li id="menu-item-2017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2017"><a href="https://wp.microthemes.ca/quantum/contact-us/">Contact Us</a></li>
</ul><select id="tinynav1" class="tinynav tinynav1"><option value="GO">MENU</option><option value="https://wp.microthemes.ca/quantum/who-we-are/">Who we are</option><option value="https://wp.microthemes.ca/quantum/gallery/">Gallery</option><option value="https://wp.microthemes.ca/quantum/shop/">Courses</option><option value="https://wp.microthemes.ca/quantum/careers/">Careers</option><option value="https://wp.microthemes.ca/quantum/workshops/">Workshops</option><option value="https://wp.microthemes.ca/quantum/blog/">Blog</option><option value="https://wp.microthemes.ca/quantum/contact-us/">Contact Us</option></select>                        </div>
                    </div>
                </div>
                
            </div>
        
               
        
    
	</div>
    </body>
<?php get_footer(); ?>