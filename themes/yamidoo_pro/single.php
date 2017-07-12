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
 		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php if ($wpzoom_singlepost_cat == 'Show') { ?>
			<h3 class="topcat"><?php the_category('') ?></h3>
		<?php } ?>
		
		<div class="post" id="single">
			
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			
			<ul class="post-meta">
            
				<?php if ($wpzoom_singlepost_date == 'Show') { ?><li class="date"><?php the_time("$dateformat $timeformat"); ?> </li> <?php } ?>
								
				<?php if ($wpzoom_singlepost_author == 'Show') { ?><li class="author"><?php the_author_posts_link(); ?></li>  <?php } ?>	
				
				<?php if ($wpzoom_singlepost_comm == 'Show') { ?><li class="comments"> <?php comments_popup_link( __('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom')); ?></li>  <?php } ?>	
				
  				<?php edit_post_link( __('EDIT', 'wpzoom'), ' ', ''); ?>
			
			</ul> 	
			
			<div class="entry">
				<?php the_content(''); ?>
			</div>
			
			<div class="nextpage"><?php wp_link_pages(); ?></div> 
 			
			<?php if ($wpzoom_singlepost_tag == 'Show') { ?>
				
				<?php the_tags( __( '<span class="tag-links"><strong>TAGS</strong>: ', 'wpzoom' ), ", ", "</span>\n" ) ?>
			
			<?php } ?>	
			
		</div>
		 
		 
		<?php if ($wpzoom_singlepost_share == 'Show') { ?>
		
			<div class="share">
				<h3><?php _e('Share this Article', 'wpzoom');?></h3>
					<ul>
						<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" rel="external,nofollow" target="_blank">Facebook</a></li>
						<li class="twitter"><a href="http://twitter.com/home?status=Reading on <?php bloginfo('name') ?> - <?php the_title(); ?> <?php the_permalink(); ?>" rel="external,nofollow" target="_blank">Twitter</a></li>
						<li class="delicious"><a href="http://del.icio.us/post?url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>" rel="external,nofollow" target="_blank">Delicious</a></li>
						<li class="digg"><a href="http://digg.com/submit?phase=2&url=<?php the_permalink();?>&title=<?php the_title();?>" rel="external,nofollow" target="_blank">Digg</a></li>
					</ul>
				 
			</div><!-- /#share -->
		
		<?php } ?>	
		
		
		<?php if ($wpzoom_singlepost_next == 'Show') { ?>
			<div class="prevnext">
			
			<?php
			$previous_post = get_previous_post();
			$next_post = get_next_post();
			?>
	  
					<?php if ($previous_post != NULL) { ?>
					<div class="previous">
						<h3><?php _e('Previous Article', 'wpzoom');?></h3>
						
						<a href="<?php echo get_permalink($previous_post->ID); ?>" title="<?php echo $previous_post->post_title; ?>">&larr; <?php echo $previous_post->post_title; ?></a>
					</div>
					<?php } ?>
					
					
					<?php if ($next_post != NULL) { ?>
					<div class="next">
						<h3><?php _e('Next Article', 'wpzoom');?></h3>
						
						<a href="<?php echo get_permalink($next_post->ID); ?>" title="<?php echo $next_post->post_title; ?>"><?php echo $next_post->post_title; ?> &rarr;</a> 
						
					</div>
					<?php } ?>
			</div><!-- /.nextprev -->
	 	<?php } ?>	
	 	
		
		<div id="comments">
 
 		<?php comments_template(); ?>
		
		</div> <!-- end #comments -->
  
  
  
		<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.', 'wpzoom');?></p>

		<?php endif; ?>
		
</div> <!-- /#content -->

<?php get_footer(); ?> 