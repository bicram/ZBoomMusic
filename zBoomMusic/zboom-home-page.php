<?php get_header(); ?>

<?php 
/* 
Template Name: Home Page
 */
?>



<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
				
				<?php 
				$args = array('post_type' => 'zboomslider', 'posts_per_page' => 1);
				$query = new WP_Query($args);				
				while($query->have_posts()) : $query-> the_post();
				?>
				
					<li><?php the_post_thumbnail(); ?></li>
					
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
		
		<?php 
		$args = array('post_type'=> 'zboomfeature', 'posts_per_page' => 3 );
		$query = new WP_Query($args);
		while ($query->have_posts()) : $query->the_post();
		?>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title(); ?></h2>
					<?php read_more(10); ?>
					<div class="more"><a href="<?php the_permalink(); ?>">[...]</a></div>
				</div>
			</div>
			
			<?php endwhile; ?>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					
					<?php 
					$args = array('post_type' => 'post'); 
					$query = new WP_Query($args);
					while ($query->have_posts()) : $query->the_post();					
					?>
					
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="info">By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <a href="<?php the_permalink(); ?>"><?php comments_popup_link(); ?></a></div>
								<?php read_more(12); ?>
							</div>
						</div>
					</article>
					
					<?php endwhile; ?>
					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
				
				
					<?php dynamic_sidebar('right-sidebar'); ?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>