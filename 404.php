<?php get_header(); ?>
<div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="95" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/02_panel-bg.jpg&quot;); background-position: 0px 49px;">
<!-- Breadcrumbs -->
    <div class="pm-sub-header-breadcrumbs">
        <div class="pm-sub-header-breadcrumbs-ul">
        	<p>
        		<a href="<?php echo home_url(); ?>">Главная</a>
        	</p>
        	<p>
        		<i class="fa fa-angle-right"></i>
        	</p>
        	<p>Ошибка 404</p>
        </div>                        
    </div>
    <div class="pm-sub-header-message">
        <p>Страница не существует</p>
    </div>
<!-- Header Page Title --> 
        
    <div class="pm-sub-header-title-container">
        <h5>Ошибка 404</h5>
    </div>
<!-- Header Message -->
</div>
<section>
	<div class="container pm-containerPadding80">
    	<div class="row">		
        	<div class="col-lg-12"> 
        		<p class="pm-404-error pm-secondary" style="font-family: 'Open sans';">Страница, которую вы ищете, не найдена</p>
            	<p style="font-family: 'Open sans';">Проверьте введенный URL-адрес и убедитесь, что он правильный.</p>            
	            <div class="pm-rounded-btn">
	                <a href="<?php echo home_url(); ?>">На главную</a>
	            </div>      
			</div>
        
		</div>
	</div>
</section>
<?php get_footer(); ?>