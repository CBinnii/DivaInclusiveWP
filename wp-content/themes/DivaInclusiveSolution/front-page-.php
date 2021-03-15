<?php 
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
						?>

							<div class="swiper-slide <?php echo $texto_cor ?> header-<?php echo $header_cor ?>" style="<?php if ($cor_do_texto != "" || $cor_do_texto != null ): ?> color: <?php echo $cor_do_texto?>; <?php endif ?> <?php if ($cor_background != "" || $cor_background != null ): ?> background-color: <?php echo $cor_background?>; <?php endif ?>">
								<img src="<?php echo get_sub_field('imagem-desktop'); ?>" class="only-desktop">
								
								<div class="overlay-slider">
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

		<div class="home-manifesto">
			<a href="" class="link-manifesto" title="">
				<p class="subtitle">NOSSAS CRENÇAS</p>

				<h1 class="title">
					<svg xmlns="http://www.w3.org/2000/svg" width="1010" height="412.736" viewBox="0 0 1010 412.736">
						<g id="Grupo_340" data-name="Grupo 340" transform="translate(-455 -4050.264)">
							<text id="manifesto" transform="translate(455 4210)" fill="#e05555" font-size="120" font-family="Monarch"><tspan x="130.6" y="80">MANIFESTO</tspan></text>
							<g id="Grupo_91" data-name="Grupo 91" transform="translate(0 352)">
								<path id="Caminho_157" data-name="Caminho 157" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(853.72 4052.56) rotate(90)" fill="#e05555"/>
								<g id="Elipse_1" data-name="Elipse 1" transform="translate(899 3989)" fill="none" stroke="#e05555" stroke-width="4">
									<circle cx="61" cy="61" r="61" stroke="none"/>
									<circle cx="61" cy="61" r="59" fill="none"/>
								</g>
							</g>
							<g id="Grupo_112" data-name="Grupo 112" transform="translate(818 4050.264)">
								<g id="Grupo_4" data-name="Grupo 4" transform="translate(285.591)">
									<g id="Grupo_1" data-name="Grupo 1" transform="translate(15.169)">
										<path id="Caminho_1" data-name="Caminho 1" d="M54.6,0h0a60.98,60.98,0,0,1-2.984,18.9l-.124.435-.124-.435A62.875,62.875,0,0,1,48.38,0H54.6Z" transform="translate(-48.38)" fill="#e05555"/>
										<path id="Caminho_2" data-name="Caminho 2" d="M48.38,22.454h0a60.979,60.979,0,0,1,2.984-18.9l.124-.435.124.435a62.875,62.875,0,0,1,2.984,18.9H48.38Z" transform="translate(-48.38 16.276)" fill="#e05555"/>
									</g>
									<g id="Grupo_2" data-name="Grupo 2" transform="translate(0 7.025)">
										<path id="Caminho_3" data-name="Caminho 3" d="M45.94,10.135h0a61.108,61.108,0,0,1,17.842-6.9l.5-.124-.311.373a60.593,60.593,0,0,1-14.92,12h0Z" transform="translate(-45.94 9.199)" fill="#e05555"/>
										<path id="Caminho_4" data-name="Caminho 4" d="M67.219,6.476h0a61.108,61.108,0,0,1-17.842,6.9l-.5.124.311-.373a60.592,60.592,0,0,1,14.92-12h0Z" transform="translate(-30.603 -1.13)" fill="#e05555"/>
									</g>
									<g id="Grupo_3" data-name="Grupo 3" transform="translate(0 7.025)">
										<path id="Caminho_5" data-name="Caminho 5" d="M49.048,1.13h0a64.568,64.568,0,0,1,14.92,12l.311.373-.5-.124a61.108,61.108,0,0,1-17.842-6.9h0Z" transform="translate(-45.94 -1.13)" fill="#e05555"/>
										<path id="Caminho_6" data-name="Caminho 6" d="M64.111,15.481h0a64.568,64.568,0,0,1-14.92-12L48.88,3.11l.5.124a61.108,61.108,0,0,1,17.842,6.9h0Z" transform="translate(-30.603 9.199)" fill="#e05555"/>
									</g>
								</g>
								<g id="Grupo_5" data-name="Grupo 5" transform="translate(0 3.481)">
									<path id="Caminho_7" data-name="Caminho 7" d="M66.331,13.428a40.607,40.607,0,0,0-14.3-9.511A49.379,49.379,0,0,0,33.508.56H0V92.815H33.508A47.686,47.686,0,0,0,51.847,89.4a42.471,42.471,0,0,0,14.36-9.574,43.889,43.889,0,0,0,9.325-14.609,51.113,51.113,0,0,0,3.295-18.526,51.3,51.3,0,0,0-3.233-18.65A43.742,43.742,0,0,0,66.331,13.428ZM65.026,63.907A35.952,35.952,0,0,1,58.685,77.77,31.023,31.023,0,0,1,46.625,87.1c-5.035,2.3-11.314,3.419-18.836,3.419H9.511V2.86H27.788q11.749,0,19.4,3.73a31.081,31.081,0,0,1,12,9.884,37.475,37.475,0,0,1,6.092,14.112,78.856,78.856,0,0,1,1.678,16.35A77.5,77.5,0,0,1,65.026,63.907Z" transform="translate(0 -0.56)" fill="#e05555"/>
									<rect id="Retângulo_1" data-name="Retângulo 1" width="9.511" height="92.255" transform="translate(94.99)" fill="#e05555"/>
									<path id="Caminho_8" data-name="Caminho 8" d="M92.925.56H82.481l8.268,23.872a27.082,27.082,0,0,1,.87,14.92A41.112,41.112,0,0,1,85.776,53.4L65.82,83.427a3.654,3.654,0,0,1-2.984,1.43,4.494,4.494,0,0,1-2.3-.684,3.535,3.535,0,0,1-1.554-1.865L30.945.56H19.32l32.7,92.255h11.19L98.147,44.636a23.441,23.441,0,0,0,3.916-9.76,23.156,23.156,0,0,0-.87-10.506Z" transform="translate(100.785 -0.56)" fill="#e05555"/>
									<path id="Caminho_9" data-name="Caminho 9" d="M105.214,92.815h10.071L74.69.56H73.26L32.79,92.815H43.607c.373-2.238.808-4.414,1.181-6.4.373-2.051.87-4.165,1.43-6.341s1.181-4.538,1.8-7.025c.311-1.368.684-2.673,1.057-3.916H94.832C99.308,79.324,105.214,92.815,105.214,92.815ZM49.7,66.767c1.554-5.346,3.233-9.7,4.1-12,1.181-3.17,2.673-6.9,4.414-11.128s3.668-8.828,5.844-13.8c2.176-5.035,4.476-10.2,6.963-15.542L90.231,58.374c.559,1.305,1.927,4.476,3.606,8.392Z" transform="translate(171.053 -0.56)" fill="#e05555"/>
								</g>
							</g>
						</g>
					</svg>
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
			get_template_part( 'newsletter-escuro' );
		}
	?>
<?php
	get_footer();
?>