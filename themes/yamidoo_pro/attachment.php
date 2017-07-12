<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
$dateformat = get_option('date_format');
$timeformat = get_option('time_format');
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
   
 
    <div id="content" class="single">
   
		
	<?php the_post(); ?>		
	
		<h3 class="topcat"><a href="<?php echo get_permalink( $post->post_parent ); ?>" title="<?php printf( esc_attr__( 'Return to %s', 'wpzoom' ), esc_html( get_the_title( $post->post_parent ), 1 ) ); ?>" rel="gallery">&larr; <?php _e('Back', 'wpzoom');?></a></h3>
		
		<div class="post" id="single">
			
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			
			
			<div class="entry">
				<?php if ( wp_attachment_is_image() ) : ?>
				
				
				<p class="attachment"><a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php
							echo wp_get_attachment_image( $post->ID, $size='large' ); // max $content_width wide or high.
						?></a></p>
				
				
				<?php else : ?>
						<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php echo basename( get_permalink() ); ?></a>
<?php endif; ?>


			</div>
			
		 
		</div>
		 
		 
		<div class="prevnext">
		
  				<div class="previous"><h3><?php _e('Previous Image', 'wpzoom');?></h3>
					<?php previous_image_link( false ); ?>
				</div>
 				
				
 				<div class="next"><h3><?php _e('Next Image', 'wpzoom');?></h3>
					<?php next_image_link( false ); ?>
				</div>
 	 	</div><!-- /.nextprev -->
		 
		<div class="share">
			<h3><?php _e('Share this Image', 'wpzoom');?></h3>
				<ul>
					<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" rel="external,nofollow" target="_blank">Facebook</a></li>
					<li class="twitter"><a href="http://twitter.com/home?status=Reading on <?php bloginfo('name') ?> - <?php the_title(); ?> <?php the_permalink(); ?>" rel="external,nofollow" target="_blank">Twitter</a></li>
					<li class="delicious"><a href="http://del.icio.us/post?url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>" rel="external,nofollow" target="_blank">Delicious</a></li>
					<li class="digg"><a href="http://digg.com/submit?phase=2&url=<?php the_permalink();?>&title=<?php the_title();?>" rel="external,nofollow" target="_blank">Digg</a></li>
				</ul>
 			 
		</div><!-- /#share -->
		
		
	 	
 
 </div> <!-- /#content -->

<?php get_footer(); ?> 