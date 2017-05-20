<?php get_header(); ?>
<div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="95" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/01_panel-bg.jpg&quot;); background-position: 0px 49px;">
<!-- Breadcrumbs -->
    <div class="pm-sub-header-breadcrumbs">
        <div class="pm-sub-header-breadcrumbs-ul">
        	<?php the_breadcrumb('страница поиска'); ?>
        </div>                        
    </div>
    <div class="pm-sub-header-message">
        <p><?php echo get_search_query(); ?></p>
    </div>
<!-- Header Page Title --> 
        
    <div class="pm-sub-header-title-container">
        <h5>результаты поиска по:</h5>
    </div>
<!-- Header Message -->
</div>
<section>
	<div class="container pm-containerPadding60 ">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 pm-main-posts">
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
			<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
			<?php endwhile; // конец цикла
			else: echo '<h2>Нет записей.</h2>'; endif; // если записей нет, напишим "простите" ?>	 
			<?php pagination(); // пагинация, функция нах-ся в function.php ?>

			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>