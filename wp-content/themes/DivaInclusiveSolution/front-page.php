<?php 
/**
 * Template Name: Home
 *
 **/
	get_header();
?>
	<div class="slider-home">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php

					// Check rows exists.
					if( have_rows('slider_home') ):

						// Loop through rows.
						while( have_rows('slider_home') ) : the_row();

							$titulo_do_slider = get_sub_field('titulo_do_slider');
							$svg_titulo = get_sub_field('svg_titulo');
							$imagem_mobile = get_sub_field('imagem_mobile');
							$cor_background = get_sub_field('cor_background');
							$cor_do_texto = get_sub_field('cor_do_texto');
							$header_cor = get_sub_field('header_cor');
							$texto_cor = get_sub_field('texto_cor');
							$header_cor_mobile = get_sub_field('header_cor_mobile');
							$background_mobile = get_sub_field('background_mobile');
						?>
							<div class="swiper-slide <?php echo $texto_cor ?> header-<?php echo $header_cor ?> header_cor_mobile-<?php echo $header_cor_mobile ?> <?php if ($background_mobile != "" || $background_mobile != null ): echo 'bg-mobile-flex'; endif ?>" style="<?php if ($cor_do_texto != "" || $cor_do_texto != null ): ?> color: <?php echo $cor_do_texto?>; <?php endif ?> <?php if ($cor_background != "" || $cor_background != null ): ?> background-color: <?php echo $cor_background?>; <?php endif ?>">
								<img src="<?php echo get_sub_field('imagem-desktop'); ?>" class="only-desktop">

								<?php if ($background_mobile != "" || $background_mobile != null ): ?> 
									<img src="<?php echo get_sub_field('background_mobile'); ?>" class="only-mobile-bg">
								<?php endif ?>
								
								
								<div class="overlay-slider <?php if ($background_mobile != "" || $background_mobile != null ): echo 'bg-mobile'; endif ?>">
									<h6 class="subtitle"><?php echo get_sub_field('titulo') ?></h6>
									
									<div class="title container">
										<?php 
											if ($titulo_do_slider != "" || $titulo_do_slider != null) {
												echo $titulo_do_slider;
											}
											else {
												echo $svg_titulo;
											}
										?>
									</div>
									

									<?php 
										if ($imagem_mobile != "" || $imagem_mobile != null) {
											?>
											<img src="<?php echo get_sub_field('imagem_mobile'); ?>" class="only-mobile">
											<?php
										}
									?>

									<h6 class="subtitle container"><?php echo get_sub_field('subtitulo') ?></h6>
								</div>
							</div>
						<?php
						// End loop.
						endwhile;

					// No value.
					else :
						// Do something...
					endif;
				?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>
	</div>

	<div class="content home">
		<div class="home-edicao">
			<div class="container">
				<div class="row m-0 justify-content-center">
					<?php echo apply_filters('the_content', $post->post_content); ?>
				</div>
			</div>
		</div>

		<div class="home-manifesto" style="background-image: url('<?php the_field('background_imagem_manifesto'); ?>');">
			<a href="<?php the_field('link_manifesto'); ?>" class="link-manifesto" title="Manifesto">
				<p class="subtitle"><?php the_field('subtitulo_manisfesto'); ?></p>

				<h1 class="title">
					<?php the_field('svg_titulo_manifesto'); ?>
				</h1>
			</a>
		</div>
	</div>

	<?php 
		$args = array(
			'post_type' => 'post',
			'status' => 'publish',
			'showposts' => 5
		);
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) :
		?>
			<div class="slider-journal">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
						?>
							<div class="swiper-slide">
								<div class="row h-100">
									<div class="col-lg-6 left">
										<p class="subtitle">diva*journal</p>

										<div class="post_content">
											<h1 class="title"><?php echo get_the_title(); ?></h1>

											<p><?php echo $post->post_excerpt; ?></p>

											<?php 
												$image = get_field('featured_image');

												if( !empty( $image ) ): ?>
													<img src="<?php echo esc_url($image); ?>" alt="<?php echo get_the_title(); ?>" />
												<?php 
												endif; 
											?>
											
											<a href="<?php echo get_the_permalink(get_the_ID()); ?>" title="" class="btn-leia-mais">entenda o assunto ></a>
										</div>
									</div>
									<div class="col-lg-6 right" style="<?php if(!empty( $image )){?>background-image: url('<?php echo esc_url($image); ?>')<?php }?>"></div>
								</div>
							</div>
						<?php
							endwhile;
						?>
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>

					<!-- Add Pagination -->
					<div class="swiper-pagination pagination-journal"></div>
				</div>
			</div>
		<?php
		endif;

		wp_reset_query();
	?>

	<?php
		if( get_field('tem_newsletter') ) {
			get_template_part( 'newsletter' );
		}
	?>
<?php
	get_footer();
?>