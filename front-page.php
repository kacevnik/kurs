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
<!-- section Content -->        
    
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
    
        <?php the_content(); // контент ?>

<?php endwhile; // конец цикла ?>

<!-- section end  Content-->



   </div>
</div>
                                                
                                                    
</div>
</div>
</div>
        
<?php get_footer(); ?>