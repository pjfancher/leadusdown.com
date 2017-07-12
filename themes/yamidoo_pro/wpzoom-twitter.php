 <?php if (strlen($wpzoom_twitter) > 0) { ?>
 
	 <div id="twitter_carousel">
 		<div id="twitter_div"><ul id="twitter_update_list"><li>&nbsp;</li></ul></div>
	</div>
	
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo "$wpzoom_twitter"; ?>.json?callback=twitterCallback2&count=1"></script>
	
<?php }?>
