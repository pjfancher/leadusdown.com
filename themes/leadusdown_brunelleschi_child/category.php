<?php get_header(); ?>
		<?php if(brunelleschi_option('sidebar') === 'both'){ get_sidebar('secondary'); } ?>
		<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">
			<h1 class="page-title">
<?php if (is_category('Featured')) { ?>
<img src="<?php echo home_url(); ?>/wp-content/themes/leadusdown_brunelleschi_child/images/features.png" />
<?php } elseif (is_category('News')) { ?>
<img src="<?php echo home_url(); ?>/wp-content/themes/leadusdown_brunelleschi_child/images/news.png" />
<?php } elseif (is_category('Bands')) { ?>
<img src="<?php echo home_url(); ?>/wp-content/themes/leadusdown_brunelleschi_child/images/bands.png" />
<?php } elseif (is_category('Lead us down live')) { ?>
<img src="<?php echo home_url(); ?>/wp-content/themes/leadusdown_brunelleschi_child/images/leadusdownlive.png" />
<?php } elseif (is_category('Album reviews')) { ?>
<img src="<?php echo home_url(); ?>/wp-content/themes/leadusdown_brunelleschi_child/images/albumreviews.png" />
<?php } else {
	printf( __( '%s', 'brunelleschi' ), '<span>' . single_cat_title( '', false ) . '</span>' );
} ?>
			</h1>
			<?php
				$category_description = category_description();
				if ( ! empty( $category_description ) )
					echo '<div class="archive-meta">' . $category_description . '</div>';
			get_template_part( 'loop', 'category' );
			?>
		</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
