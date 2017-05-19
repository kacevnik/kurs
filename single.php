<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
<div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="95" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/01_panel-bg.jpg&quot;); background-position: 0px 49px;">
<!-- Breadcrumbs -->
    <div class="pm-sub-header-breadcrumbs">
        <div class="pm-sub-header-breadcrumbs-ul">
        	<?php the_breadcrumb(single_cat_title('', 0)); ?>
        </div>                        
    </div>
<!-- Header Page Title --> 
        
    <div class="pm-sub-header-title-container">
        <h5><?php the_title(); // заголовок поста ?></h5>
    </div>
<!-- Header Message -->
</div>
<section>

<div class="container pm-containerPadding60 pm-single-post-container" style="padding-bottom:90px;">
    <div class="row">
      	<div class="col-lg-12 col-md-12 col-sm-12 kdv-single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="pm-single-blog-post-img-container" style="background-image:url(<?php if ( has_post_thumbnail() ) the_post_thumbnail_url('full');?>);">
                 <div class="pm-single-blog-post-date">
                    <p class="pm-month"><?php the_time('M'); ?></p>
                    <p class="pm-day"><?php the_time('d'); ?></p>
                 </div>
                 <div class="pm-single-blog-post-title">
                    <p class="pm-post-title"><?php the_title(); // заголовок поста ?></p>
                 </div>
            </div>
    		
            <?php the_content(); // контент ?>
<!-- Cats and Tags -->
	    	<div class="pm-single-blog-post-categories-container">
	    		<ul class="pm-single-blog-post-categories">
	                <li class="icon"><i class="fa fa-folder-open"></i></li>
	                <li><?php the_category(', ') ?></li>
	            </ul>
	             <?php $posttags = get_the_tags(); if($posttags){ ?>       
	            <ul class="pm-single-blog-post-tags">
	                <li class="icon"><i class="fa fa-tags"></i></li>
	                <?php the_tags('<li>', ', </li><li>', '</li>'); ?>
	            </ul>
	            <?php } ?>
			</div>
<!-- Cats and Tags end -->
    	</div>
    </div>
</div>
            
<?php if (comments_open() || get_comments_number()) comments_template('', true); // если комментирование открыто - мы покажем список комментариев и форму, если закрыто, но кол-во комментов > 0 - покажем только список комментариев ?>
</section>
<?php endwhile; // конец цикла ?>

<?php get_footer(); ?>