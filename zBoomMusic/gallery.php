
<?php get_header(); ?>
<?php
/* 
Template Name: Gallery 
*/
?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid"> 
		<div class="row block03">
		
		<?php 
			$args = array(
			'post_type' => 'zboomgallery',
			'posts_per_page' => -1,
			); 
			$query = new WP_Query($args);
			while ($query->have_posts()) : $query->the_post();					
		?>	
		
			<div class="col-1-4">
				<div class="wrap-col">
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><? the_title(); ?></a></h2>
					</article>
					
				</div>
			</div>
			
			<?php endwhile; ?>
		</div>
	</div>
</section>
<!--------------Footer--------------->

<?php get_footer(); ?>
