<?php
/**
 * Template Name: Página Sobre
 *
 **/
	get_header();

?>

	<div class="content sobre">
		<div class="header-text">
			<p class="subtitle"><?php echo get_the_title(); ?></p>
				<?php
					$titulo_1 = get_field('titulo_1');
					$titulo_2 = get_field('titulo_2');

					if( $titulo_1 != "" || $titulo_1 != null ) { ?>
							<h1 class="title"><?php the_field('titulo_1');  ?></h1>
					<?php } 
					if( $titulo_2 != "" || $titulo_2 != null ) { ?>
							<h1 class="title"><?php the_field('titulo_2');  ?></h1>
					<?php } 
				?>
		</div>

		<div class="container">
			<div class="row sobre-content">
				<?php echo apply_filters('the_content', $post->post_content); ?>
			</div>
		</div>
	</div>
	
	<div class="newsletter">
		<div class="row m-0 h-100">
			<div class="col-md-6 left">
				<?php 
					if ( is_active_sidebar( 'contact-newsletter' ) ) :
						dynamic_sidebar( 'contact-newsletter' );
					endif; 
				?>
			</div>
			<div class="col-md-6 right escuro">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mandala.png" alt="Mandala">
				<p class="subtitle">diva* united by difference</p>
			</div>
		</div>
	</div>

<?php
	get_footer();
?>