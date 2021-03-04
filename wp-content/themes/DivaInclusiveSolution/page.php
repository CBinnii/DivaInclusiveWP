<?php 
	get_header();
?>
	<div class="page">
		<div class="header-text">
			<p class="subtitle p-0"><?php echo get_the_title(); ?></p>
		</div>
		
		<div class="content-page">
			<div class="container">
				<div class="post-text">
					<?php echo apply_filters('the_content', $post->post_content); ?>
				</div>
			</div>
		</div>
	</div>

	<?php
		if( get_field('tem_newsletter') ) {
			get_template_part( 'newsletter-escuro' );
		}
	?>
<?php
	get_footer();
?>