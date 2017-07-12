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
 <div id="content">
          
		<?php if ( have_posts() ) the_post(); ?>
  
		<h3 class="title">
			<?php /* category archive */ if (is_category()) { ?> <?php _e('Archive for Category:', 'wpzoom'); ?> <strong>"<?php single_cat_title(); ?>"</strong>
			<?php /* tag archive */ } elseif( is_tag() ) { ?><?php _e('Post Tagged with:', 'wpzoom'); ?> <strong>"<?php single_tag_title(); ?>"</strong>
			<?php /* daily archive */ } elseif (is_day()) { ?><?php _e('Archive for', 'wpzoom'); ?> <strong><?php the_time('F jS, Y'); ?></strong>
			<?php /* monthly archive */ } elseif (is_month()) { ?><?php _e('Archive for', 'wpzoom'); ?> <strong><?php the_time('F, Y'); ?></strong>
			<?php /* yearly archive */ } elseif (is_year()) { ?><?php _e('Archive for', 'wpzoom'); ?> <strong><?php the_time('Y'); ?></strong>
			<?php /* author archive */ } elseif (is_author()) { ?><?php printf( __( 'Articles By: %s', 'wpzoom' ), "<strong><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></strong>" ); ?><?php /* paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<?php _e('Archives', 'wpzoom'); ?><?php } ?>
			
		</h3>
 
 		<?php rewind_posts(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
 		
        <div <?php post_class(); ?>>
  			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>	
			
			
			<?php if ($wpzoom_homepost_thumb == 'Show') { ?>
			<?php unset($img); 
				if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
				$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
				$img = $thumbURL[0];  }
				else { 
					unset($img);
					if ($wpzoom_cf_use == 'Yes')  { $img = get_post_meta($post->ID, $wpzoom_cf_photo, true); }
				else {  
					if (!$img)  {  $img = catch_that_image($post->ID);  } }
				}
				if ($img) { $img = wpzoom_wpmu($img); ?>
				<div class="thumb"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=170&amp;h=120&amp;zc=1" alt="<?php the_title(); ?>" /></a> </div><?php } ?>
					
			<?php } ?>
			
			
            <ul class="post-meta">
            
				<?php if ($wpzoom_homepost_date == 'Show') { ?><li class="date"><?php the_time("$dateformat $timeformat"); ?> </li> <?php } ?>
				
				<?php if ($wpzoom_homepost_cat == 'Show') { ?><li class="category"><?php the_category(', ') ?></li>  <?php } ?>
				
				<?php if ($wpzoom_homepost_comm == 'Show') { ?><li class="comments"> <?php comments_popup_link( __('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom')); ?></li>  <?php } ?>	
				
				<?php if ($wpzoom_homepost_author == 'Show') { ?><li class="author"><?php the_author_posts_link(); ?></li>  <?php } ?>	
						
				<?php edit_post_link( __('EDIT', 'wpzoom'), ' ', ''); ?>
			
			</ul> 	
			
            
            <div class="entry">
				<?php if ($wpzoom_homepost_type == 'Post Excerpts') {  the_excerpt(); } ?>
				<?php if ($wpzoom_homepost_type == 'Full Content') {  the_content(); } ?>
            </div>
            
            
            <?php if ($wpzoom_homepost_more == 'Show') { ?>
            
				<a class="more" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php _e('read more', 'wpzoom');?></a>
			<?php } ?>
			
			
		</div> <!-- /.post -->
            
            
		<?php endwhile; ?>
         	
         	
 		<div class="pagenav">
		
			<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
			
				<div class="floatleft"><?php next_posts_link( __('<strong>Older</strong> Entries', 'wpzoom') ); ?></div>
				<div class="floatright"><?php previous_posts_link( __('<strong>Newer</strong> Entries', 'wpzoom') ); ?></div>
			
			<?php } ?>
			
		</div> 
 	 
	</div> <!-- /#content -->
 
<?php get_footer(); ?>