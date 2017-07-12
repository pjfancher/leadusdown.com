<?php
 global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
 
 	<div id="footer">
 	
  	<?php if ($wpzoom_info_show == 'Yes') { ?>
  
		<div id="infowidget">
			
			<span><?php bloginfo('name'); ?></span>
			
			<ul>
				<li class="rss"><a href="<?php if (strlen($wpzoom_misc_feedburner) < 10) { bloginfo('rss2_url');} else {echo"$wpzoom_misc_feedburner";} ?>"><?php _e('Subscribe by RSS', 'wpzoom');?></a></li>
				<?php if (strlen($wpzoom_phone) > 0) { ?><li class="phone"><?php echo $wpzoom_phone; ?></li><?php }?>
 				<?php if (strlen($wpzoom_twitter) > 0) { ?><li class="twitter"><a href="http://twitter.com/<?php echo $wpzoom_twitter; ?>"><?php echo"$wpzoom_twitter_heading"; ?></a></li><?php }?>
				<?php if (strlen($wpzoom_email) > 0) { ?><li class="email"><a href="mailto:<?php echo $wpzoom_email; ?>"><?php echo $wpzoom_email; ?></a></li><?php }?>
				<?php if (strlen($wpzoom_facebook) > 0) { ?><li class="facebook"><a href="<?php echo $wpzoom_facebook; ?>"><?php echo"$wpzoom_facebook_heading"; ?></a></li><?php }?>
 			</ul>
		</div>
		
	<?php } ?>
	
	
	<div id="footer_search">
		SEARCH:
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
		
		
		<div class="hr"></div>
 	 
 	 
		<div id="copyright">
			&copy; <?php _e('Copyright', 'wpzoom');?> <?php echo date("Y"); ?> &mdash; <a href="<?php echo get_option('home'); ?>/" class="on"><?php bloginfo('name'); ?></a>. <?php _e('All Rights Reserved', 'wpzoom');?>
		</div>
		
		
		<div id="designed">
			<?php _e('Designed by', 'wpzoom');?> <a href="http://www.wpzoom.com" target="_blank" title="WPZOOM WordPress Themes"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/wpzoom.png" align="right" alt="WPZOOM" /></a>
		</div>
 	
 	</div> <!-- end footer -->
 </div><!-- /#content-wrap -->

</div><!-- /#page-wrap -->
	
 
<?php if ($wpzoom_misc_analytics != '' && $wpzoom_misc_analytics_select == 'Yes')
{
  echo stripslashes($wpzoom_misc_analytics);
} ?>

<?php wpzoom_js("tabs", "dropdown"); ?>

<script type="text/javascript">
$(function() {
  	$("#navi ul").tabs("#panes > div", {
  	effect: 'fade', 
  	fadeOutSpeed: 500, 
   	rotate: true
    	}).slideshow({ 
		clickable: false,
         autoplay: <?php if ($wpzoom_slideshow_auto == 'Yes') { ?>true<?php } ?> <?php if ($wpzoom_slideshow_auto == 'No') { ?>false<?php } ?>, 
         interval: <?php echo "$wpzoom_slideshow_speed"; ?> 
    }); 
 });  
</script> 

<?php wp_footer(); ?>

</body>
</html>