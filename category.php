<?php get_header(); ?>
<div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="95" style="background-image: url(<?php if ( has_post_thumbnail() ) the_post_thumbnail_url('full');?>);">
<!-- Breadcrumbs -->
    <div class="pm-sub-header-breadcrumbs">
        <div class="pm-sub-header-breadcrumbs-ul">
        	<?php the_breadcrumb(single_cat_title('', 0)); ?>
        </div>                        
    </div>
<!-- Header Page Title --> 
        
    <div class="pm-sub-header-title-container">
        <h5><?php single_cat_title(); // название категории ?></h5>
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