<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

		<div id="slider-wrapper">
			<div id="more-arrow">^</div>
			<div id="landing-slider">
				<video width="100%" height="auto" autoplay muted id="landing-video">
					<source src="<?php echo get_template_directory_uri(); ?>/videos/landing_video.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<div id="slider-info">
				<div id="slider-cotainer">
					<div id="slider-left" class="slider-section">
						<span>REDEFINING eSports<br/><span>IN SRI LANKA</span></span>
					</div>
					<div id="slider-right" class="slider-section">
						<div class="slider-games"><span id="slider-days"></span><br/>Days</div>
						<div class="slider-games"><span id="slider-hours"></span><br/>Hours</div>
					</div>
				</div>
			</div>
		</div>
		<div id="main-info" class="content-wrapper page">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
		    <div class="post">
		    	<h1>GET NAILED 2015</h1>
		        <!-- <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1> -->
		        <div class="entrytext">
		            <?php
		                global $more;	// hack to use Read More in Pages
		                $more = 0;
		                the_content('<p class="serif">Read the rest of this page »</p>'); 
		            ?>
		        </div>
		    </div>
		    <?php endwhile; endif; ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
		<!-- <div class="content-wrapper">
			<div class="content-section">
				<div class="content-area content-block">
					<h1>E-SPORTS</h1>
					<p>Computer gaming and e-Sports have rapidly become the most popular choice of interactive entertainment among both teenagers and adults over the world. Gamers have formed competitive leagues and today’s computer and console gaming is considered a professional sport (e-Sport) in many countries, with millions of dollars being invested in tournaments by sponsors, and IT companies rushing to put their name on tournaments featuring these cyber athletes. </p>
				</div>
				<div class="content-image-wrapper content-block">
					<div class="content-image pre-load" data-background="<?php echo get_template_directory_uri(); ?>/images/esports.jpg"></div>
				</div>
				
			</div>
		</div> -->

		<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
		<?php $i=1; ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="content-wrapper">
			<div class="content-section">
				<?php if($i%2 == 1){
						echo '<div class="content-image-wrapper content-block">
						<div class="content-image pre-load" data-background="';
						echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						echo '"></div>
					</div>';
				}

				?>
				<div class="content-area content-block">
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<?php the_excerpt(__('(more…)')); ?>
				</div>
				<?php if($i%2 == 0){
						echo '<div class="content-image-wrapper content-block">
						<div class="content-image pre-load" data-background="';
						echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						echo '"></div>
					</div>';
				}
				
				$i++;
				?>
			</div>
		</div>
		<?php endwhile;?>
		
		<!-- <div class="content-wrapper">
			<div class="pagination">
				
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</div>
		</div> -->
	</div>

<?php get_footer(); ?>