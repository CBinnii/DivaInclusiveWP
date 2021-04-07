<div class="newsletter">
	<div class="row m-0 h-100">
		<div class="col-lg-6 left">
			<p class="subtitle">newsletter</p>
			<?php 
				if ( is_active_sidebar( 'contact-newsletter' ) ) :
					dynamic_sidebar( 'contact-newsletter' );
				endif; 
			?>
		</div>
		<div class="col-lg-6 right">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mandala.svg" alt="Mandala">
			<p class="subtitle">diva* united by difference</p>
		</div>
	</div>
</div>