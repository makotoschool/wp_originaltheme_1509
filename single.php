<?php get_header('noimage'); ?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				
					<?php if(have_posts()):while(have_posts()):the_post();?>
						<article class="content_sentence">	
							<h2 class="content_title"><?php the_title(); ?></h2>					
							<p class="align-right">投稿日時<?php the_date('Y-m-d'); the_time(); ?></p>
							<div class="content_detail"><?php the_content(); ?></div>
							<div class="cat">
								<?php the_category(); ?>
							</div>
								<?php previous_post_link('≪ %link', '%title', TRUE, ''); ?>
<?php next_post_link('%link ≫', '%title', TRUE, ''); ?>
						</article>		
					<?php endwhile; endif; ?>
		
						

			</section>

			<?php
				if(in_category('web')){
					get_sidebar('web');
				}
				if(in_category('dtp')){
					get_sidebar('dtp');
				}
				if(in_category('blog')){
					get_sidebar('blog');
				}				
		
	 
			 ?>

		</div>

	</main>
<?php get_footer(); ?>

