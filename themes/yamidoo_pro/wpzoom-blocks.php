<div id="blocks">
	
	<?php 
		$catid1 = $wpzoom_featured_category_1;
		$catid2 = $wpzoom_featured_category_2;
		$catid3 = $wpzoom_featured_category_3;
		$catid4 = $wpzoom_featured_category_4;
		
		$cat1 = get_category($catid1,false);
		$cat2 = get_category($catid2,false);
		$cat3 = get_category($catid3,false);
		$cat4 = get_category($catid4,false);
		
		$catlink1 = get_category_link($catid1);
		$catlink2 = get_category_link($catid2);
		$catlink3 = get_category_link($catid3);
		$catlink4 = get_category_link($catid4);
		
		$breaking_cat1 = "cat=$catid1";
		$breaking_cat2 = "cat=$catid2";
		$breaking_cat3 = "cat=$catid3";
		$breaking_cat4 = "cat=$catid4";
		
		$height = $wpzoom_thumb_height_px;
	 ?>
        
	<div class="colart">
		<?php 			
		query_posts('showposts=1&' . $breaking_cat1 );
			 while (have_posts()) : the_post(); ?>
		
		<h3><?php echo"<a href=\"$catlink1\">$cat1->name</a>";?></h3>
		
		<div class="thumb">
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
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=240<?php if ($wpzoom_thumb_height == 'Yes') { echo "&amp;h=$wpzoom_thumb_height_px"; } ?>&amp;zc=1" alt="<?php the_title(); ?>" /></a> <?php } ?>
 		</div>
 		
		
		<div class="entry">
		
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	  
			<?php the_excerpt(); ?>
			
			<a class="more" href="<?php the_permalink() ?>"><?php _e('continue reading', 'wpzoom');?></a>
			
		  
		  <?php endwhile; ?>   
		 
		</div>
		  
	</div>  <!-- /#column-1 -->
	
	
	<div class="colart">
		<?php 			
		query_posts('showposts=1&' . $breaking_cat2 );
			 while (have_posts()) : the_post(); ?>
		
		<h3><?php echo"<a href=\"$catlink2\">$cat2->name</a>";?></h3>
		
		<div class="thumb">
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
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=240<?php if ($wpzoom_thumb_height == 'Yes') { echo "&amp;h=$wpzoom_thumb_height_px"; } ?>&amp;zc=1" alt="<?php the_title(); ?>" /></a> <?php } ?>
 		</div>
		
		<div class="entry">
		
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	  
			<?php the_excerpt(); ?>
			
			<a class="more" href="<?php the_permalink() ?>"><?php _e('continue reading', 'wpzoom');?></a>
			
		  
		  <?php endwhile; ?>   
		 
		</div>
		  
	</div>  <!-- /#column-2 -->
	
	
	<div class="colart">
		<?php 			
		query_posts('showposts=1&' . $breaking_cat3 );
			 while (have_posts()) : the_post(); ?>
		
		<h3><?php echo"<a href=\"$catlink3\">$cat3->name</a>";?></h3>
		
		<div class="thumb">
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
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=240<?php if ($wpzoom_thumb_height == 'Yes') { echo "&amp;h=$wpzoom_thumb_height_px"; } ?>&amp;zc=1" alt="<?php the_title(); ?>" /></a> <?php } ?>
 		</div>
		
		<div class="entry">
		
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	  
			<?php the_excerpt(); ?>
			
			<a class="more" href="<?php the_permalink() ?>"><?php _e('continue reading', 'wpzoom');?></a>
			
		  
		  <?php endwhile; ?>   
		 
		</div>
		  
	</div>  <!-- /#column-3 -->
	
	
	<div class="colart">
		<?php 			
		query_posts('showposts=1&' . $breaking_cat4 );
			 while (have_posts()) : the_post(); ?>
		
		<h3><?php echo"<a href=\"$catlink4\">$cat4->name</a>";?></h3>
		
		<div class="thumb">
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
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=240<?php if ($wpzoom_thumb_height == 'Yes') { echo "&amp;h=$wpzoom_thumb_height_px"; } ?>&amp;zc=1" alt="<?php the_title(); ?>" /></a> <?php } ?>
 		</div>
		
		<div class="entry">
		
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	  
			<?php the_excerpt(); ?>
			
			<a class="more" href="<?php the_permalink() ?>"><?php _e('continue reading', 'wpzoom');?></a>
			
		  
		  <?php endwhile; ?>   
		 
		</div>
		  
	</div>  <!-- /#column-4 -->
	
 	
 </div> <!-- end blocks -->
  
 <?php wp_reset_query(); ?>	