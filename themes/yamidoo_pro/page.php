<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
 
 <div id="content" class="page">
 
 	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="post" id="page">

		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		
		<ul class="post-meta"><?php edit_post_link( __('EDIT', 'wpzoom'), ' ', ''); ?></ul>
		
		<div class="entry">
				<?php the_content(''); ?>
		</div>
		
 		<div class="nextpage"><?php wp_link_pages(); ?></div> 
	 

	 
 </div>
 
 <div id="comments">
 
 		<?php comments_template(); ?>
		
		</div> <!-- end #comments -->
  
  
	<?php endwhile; else: ?>

	<p><?php _e('Sorry, no posts matched your criteria.', 'wpzoom');?></p>

	<?php endif; ?>
	
</div> <!-- /#content -->
<?php get_footer(); ?> 