<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<div id="featured-image" data-background="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="pre-load"></div>
		<div id="single-page">
			<div id="content-area" class="page">
			    <div class="post">
			        <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
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
			<div id="content-sidebar" class="page">
				<?php get_sidebar( $name ); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>