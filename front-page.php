<?php get_header(); ?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				<article class="content_sentence">
					<?php if(have_posts()):while(have_posts()):the_post();?>
						
						<h2 class="content_title"><?php the_title(); ?></h2>					
						<div class="content_detail"><?php the_content(); ?></div>
							
					<?php endwhile; endif; ?>
		
				</article>		

			</section>

			<?php get_sidebar('top'); ?>

		</div>
		<section class="content_fullwidth clearfix">
			<h2 class="contnt_title">新着記事</h2>
			<ul>
			<?php 
			$args=array(
			'posts_per_page'=>4			
			//'category_name'=>'web'カテゴリーで絞り込みたかったら
			);	
			$posts=get_posts($args);			
			foreach($posts as $post):
				setup_postdata($post);?>
				<li class="post_prev">
					<a href="<?php the_permalink(); ?>"><h3 class="new_post_title"><?php the_title();?></h3></a>
					<?php 
						if ( has_post_thumbnail() ) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
							the_post_thumbnail(array(100,100));
						} 
					?>
					<div class="new_post_content"><?php the_excerpt();?></div>				
				</li>	
		
			<?php endforeach;?>

			</ul>
		</section>
		<section class="content_fullwidth">
	
			<article class="content_sentence_fullwidth">
				<?php $mid=get_post(77);?>
				<h2 class="contnt_sub_title"><?php echo $mid->post_title; ?></h2>
				<div class="content_sub_detail"><?php echo $mid->post_content; ?></div>
				
			</article>			
		</section>
	</main>
<?php get_footer(); ?>

