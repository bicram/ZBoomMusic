<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				
				<?php while(have_posts()) : the_post(); ?>
				
					
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[<?php the_author(); ?> on <?php the_time('F d Y'); ?> with <a href="#"><?php comments_popup_link('empty comment', 'only one comment', '% comments', '', ''); ?></a>]</div>
						<?php read_more(20); ?>... <a href="<?php the_permalink(); ?>">Read More</a>
					</article>
					
					<?php endwhile; ?>
					
					<div id="pagi">
					<?php the_posts_pagination(array(
					'prev_text'=>'prev',
					'next_text'=>'next',
					'screen_reader_text'=>' ',
					)); 
					?>
					</div>
									
					
					
					
					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>