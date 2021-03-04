<?php
/**
 * Template Name: Página Sobre
 *
 **/
	get_header();

?>
	<div class="content sobre">
		<div class="container">
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

			<div class="row sobre-content">
				<?php echo apply_filters('the_content', $post->post_content); ?>
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