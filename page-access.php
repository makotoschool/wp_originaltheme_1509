<?php get_header('noimage'); ?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				
					<?php if(have_posts()):while(have_posts()):the_post();?>
						<article class="content_sentence">	
							<h2 class="content_title"><?php the_title(); ?></h2>					
							<div class="content_detail"><?php the_content(); ?></div>
						</article>		
					<?php endwhile; endif; ?>
		
						

			</section>

			<?php get_sidebar('access'); ?>

		</div>

	</main>
<?php get_footer(); ?>

