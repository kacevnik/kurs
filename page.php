<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>

<div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="95" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/01_panel-bg.jpg&quot;); background-position: 0px 49px;">
<!-- Breadcrumbs -->
    <div class="pm-sub-header-breadcrumbs">
        <div class="pm-sub-header-breadcrumbs-ul">
        	<?php the_breadcrumb(); ?>
        </div>                        
    </div>
<!-- Header Page Title --> 
        
    <div class="pm-sub-header-title-container">
        <h5><?php the_title(); // заголовок ?></h5>
    </div>
<!-- Header Message -->
</div>
<section>
	<div class="container pm-containerPadding-top-80 pm-containerPadding-bottom-80">
		<div class="row">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
				<?php the_content(); // контент ?>
			</article>
		</div>
	</div>
</section>
<?php endwhile; // конец цикла ?>

<?php get_footer(); ?>