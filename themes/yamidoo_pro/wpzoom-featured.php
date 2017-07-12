<div id="feature">

	<?php 
		$catid5 = $wpzoom_featured_category_5;
		$cat5 = get_category($catid5,false);
		$catlink5 = get_category_link($catid5);
		$breaking_cat5 = "cat=$catid5";
	?>
        
        
 <!-- tab panes -->
<div id="panes">
	
<?php $headline = new WP_Query('showposts=5&' . $breaking_cat5 ); while($headline->have_posts()) : $headline->the_post();  unset($videocode);
	$videocode = get_post_meta($post->ID, 'wpzoom_post_embed_code', true);?>
	<?php $AE = new AutoEmbed(); // loading the AutoEmbed PHP Class ?>
	<div>
		<?php
		if ($videocode && $AE->parseUrl($videocode)) {
			$AE->setParam('wmode','transparent');
			$AE->setParam('autoplay','false');
			$AE->setHeight(280);
			$AE->setWidth(520);

			?><span class="cover"><?php echo $AE->getEmbedCode(); ?></span><?php 
		} else {
		?>

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
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $img ?>" height="280" width="520" alt="<?php the_title(); ?>" /></a><?php } else { echo"<img src=\""; bloginfo('template_directory'); echo"/images/blank.jpg\" />"; } 
			} // if a video does not exist ?>
		  
			
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<ul class="post-meta"><li class="date"><?php the_time("$dateformat $timeformat"); ?></li> <li class="category"><?php the_category(', ') ?></li> <li class="comments"> <?php comments_popup_link('0', '1', '%'); ?></li>  <?php edit_post_link( __('Edit', 'wpzoom'), ' ', ''); ?></ul> 	
		
		<?php the_excerpt(); ?>
		
		 
	</div>
 <?php endwhile; ?>

</div>

<br clear="all" />


<!-- navigator -->
<div id="navi">
	<ul>
	
		<?php $teaser_small = new WP_Query('showposts=5&' . $breaking_cat5 ); while($teaser_small->have_posts()) : $teaser_small->the_post(); ?>

 		<li>
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
			<a href="#"><img src="<?php echo $img ?>" height="50" width="60" alt="<?php the_title(); ?>" /></a><?php } else { echo"<img src=\""; bloginfo('template_directory'); echo"/images/blank2.jpg\" />"; } ?>	
		</li>
		
		<?php endwhile;  wp_reset_query();  ?>
		
	</ul>
</div>
 
</div>