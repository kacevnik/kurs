	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="pm-blog-post-container">
        	<div class="pm-blog-post-img-container" style="background-image:url(<?php if ( has_post_thumbnail() ) the_post_thumbnail_url('full');?>);">
                <div class="pm-blog-post-date" style="top: 205px;">
                    <p class="pm-month"><?php the_time('M'); ?></p>
                    <p class="pm-day"><?php the_time('d'); ?></p>                   
                    <div class="pm-blog-post-comment-count">
                        <p><?php echo get_comments_number(); ?></p>
                    </div>                                                   
                    </div>
                    <div class="pm-blog-post-title" style="top: 230px;">
                        <h2 class="pm-post-title"><?php the_title(); ?></h2>
                        <p class="pm-post-hover-excerpt" style="opacity: 0;"><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Читать далее →</a>
                    </div>                    
                </div>                   
        		<div class="pm-blog-post-details-container">
        			<div class="pm-blog-post-divider"></div>
    				<p class="pm-blog-post-published">Опубликованно <?php the_author(); ?>, <?php the_time('F j, Y'); ?> в <?php the_category(', ') ?> | <?php comments_number('0 комментариев', '1 комментарий', '% комментариев'); ?></p>
        			<div class="pm-blog-post-divider"></div>
			        <p><?php the_content(''); // пост превью, до more ?></p>
					<div class="pm-blog-post-divider"></div>
        			<div class="pm-rounded-btn pm-blog-post-btn">
            			<a href="<?php the_permalink(); ?>">Подробнее</a>
        			</div>
		        </div>
        	</div>
	</article>