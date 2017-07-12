<?php get_header(); ?>
		<?php if(brunelleschi_option('sidebar') === 'both'){ get_sidebar('secondary'); } ?>
		<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">

<h1 class="page-title">
<?php if (is_page('About')) { ?>
<img src="<?php echo home_url(); ?>/wp-content/themes/leadusdown_brunelleschi_child/images/about.png" />
<?php } else {
	printf( __( '%s', 'brunelleschi' ), '<span>' . the_title( '', false ) . '</span>' );
} ?>
</h1>

			<?php get_template_part( 'loop', 'page' ); ?>

		</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
