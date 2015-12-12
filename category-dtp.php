<?php get_header('noimage'); ?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				
					<?php if(have_posts()):while(have_posts()):the_post();?>
						<article class="content_sentence">	
							<a  class="single_link" href="<?php the_permalink( )?>"><h2 class="content_title"><?php the_title(); ?></h2></a>
												
							<div class="content_detail"><?php the_content(); ?></div>
							<p class="align-right">【投稿日】<?php the_time('Y.n/j'); ?> &nbsp;&nbsp;<?php the_time('G:i'); ?></p>
						</article>		
					<?php endwhile; endif; ?>
		
						

			</section>

			<?php get_sidebar('dtp'); ?>

		</div>

	</main>
<?php get_footer(); ?>

