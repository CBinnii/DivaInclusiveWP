		<footer class="footer">
			<div class="row m-0">
				<div class="col-lg-6 pl-0 left">
					<h1>
						<?php if(get_field('svg_logo_footer', 'option')) : ?>
							<?php echo the_field('svg_logo_footer', 'option'); ?>
						<?php endif; ?>
					</h1>
				</div>	
				<div class="col-lg-6 right">
					<div class="row">
						<div class="col-md-6">
							<?php
								wp_nav_menu(
									array(
										'theme_location'	=> '',
										'menu'				=> 'Menu Footer',
										'echo'				=> true,
										'fallback_cb'		=> 'wp_page_menu',
										'items_wrap'		=> '<ul>%3$s</ul>',
										'depth'				=> 0
									)
								);
							?>
						</div>	
						<div class="col-md-6 midia-social-desktop">
							<ul>
								<li>
									<?php if(get_field('email', 'option')) : ?>
										<a href="mailto:<?php echo the_field('email', 'option'); ?>" target="_blank" title="se conecte">se conecte</a>
									<?php endif; ?>
								</li>
								<li>
									<?php if(get_field('link_instagram', 'option')) : ?>
										<a href="<?php echo the_field('link_instagram', 'option'); ?>" target="_blank" title="instagram ">instagram </a>
									<?php endif; ?>
								</li>
								<li>
									<?php if(get_field('link_youtube', 'option')) : ?>
										<a href="<?php echo the_field('link_youtube', 'option'); ?>" target="_blank" title="youtube">youtube</a>
									<?php endif; ?>
								</li>
								<li>
									<?php if(get_field('link_facebook', 'option')) : ?>
										<a href="<?php echo the_field('link_facebook', 'option'); ?>" target="_blank" title="facebook">facebook</a>
									<?php endif; ?>
								</li>
								<li>
									<?php if(get_field('link_linkedin', 'option')) : ?>
										<a href="<?php echo the_field('link_linkedin', 'option'); ?>" target="_blank" title="linkedin">linkedin</a>
									<?php endif; ?>
								</li>
								<li>
									<?php if(get_field('link_twitter', 'option')) : ?>
										<a href="<?php echo the_field('link_twitter', 'option'); ?>" target="_blank" title="twitter">twitter</a>
									<?php endif; ?>
								</li>
							</ul>
						</div>
						<div class="col-12 p-0 midia-social-mobile">
							<p class="subtitle">se conecte</p>
							<ul>
								<?php if(get_field('link_instagram', 'option')) : ?>
									<li>
										<a href="<?php echo the_field('link_instagram', 'option'); ?>" target="_blank" title="instagram ">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram.svg">
										</a>
									</li>
								<?php endif; ?>
								<?php if(get_field('link_linkedin', 'option')) : ?>
									<li>
										<a href="<?php echo the_field('link_linkedin', 'option'); ?>" target="_blank" title="linkedin">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/LinkedIn.svg">
										</a>
									</li>
								<?php endif; ?>
								<?php if(get_field('link_facebook', 'option')) : ?>
									<li>
										<a href="<?php echo the_field('link_facebook', 'option'); ?>" target="_blank" title="facebook">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Facebook.svg">
										</a>
									</li>
								<?php endif; ?>
								<?php if(get_field('link_youtube', 'option')) : ?>
									<li>
										<a href="<?php echo the_field('link_youtube', 'option'); ?>" target="_blank" title="youtube">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/YouTube.svg">
										</a>
									</li>
								<?php endif; ?>
								<?php if(get_field('link_pinterest', 'option')) : ?>
									<li>
										<a href="<?php echo the_field('link_pinterest', 'option'); ?>" target="_blank" title="Pinterest">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pinteres.svg">
										</a>
									</li>
								<?php endif; ?>
								<?php if(get_field('link_twitter', 'option')) : ?>
									<li>
										<a href="<?php echo the_field('link_twitter', 'option'); ?>" target="_blank" title="twitter">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Twitter.svg">
										</a>
									</li>
								<?php endif; ?>
							</ul>

							<div class="d-flex justify-content-center">
								<svg id="Grupo_116" data-name="Grupo 116" xmlns="http://www.w3.org/2000/svg" width="94.462" height="28.067" viewBox="0 0 94.462 28.067">
									<g id="Grupo_4" data-name="Grupo 4" transform="translate(83.727)">
										<g id="Grupo_1" data-name="Grupo 1" transform="translate(4.447)">
											<path id="Caminho_1" data-name="Caminho 1" d="M50.2,0h0a17.878,17.878,0,0,1-.875,5.541l-.036.128-.036-.128A18.433,18.433,0,0,1,48.38,0H50.2Z" transform="translate(-48.38)" fill="#253825"/>
											<path id="Caminho_2" data-name="Caminho 2" d="M48.38,8.788h0a17.877,17.877,0,0,1,.875-5.541l.036-.128.036.128A18.433,18.433,0,0,1,50.2,8.788H48.38Z" transform="translate(-48.38 2.566)" fill="#253825"/>
										</g>
										<g id="Grupo_2" data-name="Grupo 2" transform="translate(0 2.059)">
											<path id="Caminho_3" data-name="Caminho 3" d="M45.94,5.169h0a17.915,17.915,0,0,1,5.231-2.023l.146-.036-.091.109a17.764,17.764,0,0,1-4.374,3.517h0Z" transform="translate(-45.94 0.499)" fill="#253825"/>
											<path id="Caminho_4" data-name="Caminho 4" d="M54.256,2.7h0A17.915,17.915,0,0,1,49.026,4.72l-.146.036.091-.109A17.764,17.764,0,0,1,53.345,1.13h0Z" transform="translate(-43.522 -1.13)" fill="#253825"/>
										</g>
										<g id="Grupo_3" data-name="Grupo 3" transform="translate(0 2.059)">
											<path id="Caminho_5" data-name="Caminho 5" d="M46.851,1.13h0a18.929,18.929,0,0,1,4.374,3.517l.091.109-.146-.036A17.915,17.915,0,0,1,45.94,2.7h0Z" transform="translate(-45.94 -1.13)" fill="#253825"/>
											<path id="Caminho_6" data-name="Caminho 6" d="M53.345,6.737h0a18.929,18.929,0,0,1-4.374-3.517L48.88,3.11l.146.036a17.915,17.915,0,0,1,5.231,2.023h0Z" transform="translate(-43.522 0.499)" fill="#253825"/>
										</g>
									</g>
									<g id="Grupo_5" data-name="Grupo 5" transform="translate(0 1.021)">
										<path id="Caminho_7" data-name="Caminho 7" d="M19.446,4.333a11.9,11.9,0,0,0-4.192-2.788A14.477,14.477,0,0,0,9.823.56H0V27.606H9.823a13.98,13.98,0,0,0,5.376-1A12.451,12.451,0,0,0,19.41,23.8a12.867,12.867,0,0,0,2.734-4.283,14.985,14.985,0,0,0,.966-5.431,15.041,15.041,0,0,0-.948-5.468A12.824,12.824,0,0,0,19.446,4.333Zm-.383,14.8A10.54,10.54,0,0,1,17.2,23.2a9.1,9.1,0,0,1-3.536,2.734,13.3,13.3,0,0,1-5.522,1H2.788V1.234H8.147a12.96,12.96,0,0,1,5.686,1.094,9.112,9.112,0,0,1,3.517,2.9,10.987,10.987,0,0,1,1.786,4.137,23.118,23.118,0,0,1,.492,4.793A22.72,22.72,0,0,1,19.064,19.132Z" transform="translate(0 -0.56)" fill="#253825"/>
										<rect id="Retângulo_1" data-name="Retângulo 1" width="2.788" height="27.046" transform="translate(27.848)" fill="#253825"/>
										<path id="Caminho_8" data-name="Caminho 8" d="M40.9.56H37.837l2.424,7a7.94,7.94,0,0,1,.255,4.374A12.053,12.053,0,0,1,38.8,16.052l-5.85,8.8a1.071,1.071,0,0,1-.875.419,1.318,1.318,0,0,1-.674-.2,1.036,1.036,0,0,1-.456-.547L22.728.56H19.32l9.587,27.046h3.281L42.43,13.482a6.872,6.872,0,0,0,1.148-2.861,6.789,6.789,0,0,0-.255-3.08Z" transform="translate(15.891 -0.56)" fill="#253825"/>
										<path id="Caminho_9" data-name="Caminho 9" d="M54.023,27.606h2.953L45.074.56h-.419L32.79,27.606h3.171c.109-.656.237-1.294.346-1.877.109-.6.255-1.221.419-1.859s.346-1.33.529-2.059c.091-.4.2-.784.31-1.148H50.979C52.291,23.652,54.023,27.606,54.023,27.606ZM37.747,19.97c.456-1.567.948-2.843,1.2-3.517.346-.929.784-2.023,1.294-3.262s1.075-2.588,1.713-4.046C42.6,7.668,43.27,6.155,44,4.588L49.63,17.51c.164.383.565,1.312,1.057,2.46Z" transform="translate(26.971 -0.56)" fill="#253825"/>
									</g>
								</svg>
							</div>
						</div>

						<div class="col-12 copyright">
							<?php if(get_field('copyright', 'option')) : ?>
								<p><?php echo the_field('copyright', 'option'); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
		<!-- Swiper JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper/swiper.js"></script>
		<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit' async defer></script>
		<!-- Initialize Swiper -->
		<script>
			var swiper = new Swiper('.slider-home > .swiper-container', {
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
					renderBullet: function (index, className) {
						return '<span class="' + className + '">' + (index + 1) + '</span>';
					},
				},
				loop: true,
			});
			var swiper2 = new Swiper('.slider-journal > .swiper-container', {
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
					renderBullet: function (index, className) {
						return '<span class="' + className + '">' + (index + 1) + '</span>';
					},
				},
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				loop: true,
			});

			swiper.on('slideChange', function () {
				var a = swiper.activeIndex;
				var atual = swiper.slides[a];

				console.log($(atual).hasClass("header_cor_mobile-Claro"));

				var pagination = swiper.pagination.el;
				var menu = $(".header-menu");
				var brand = $(".header-brand");

				console.log(menu);
				
				if ($(atual).hasClass("Escuro")) {
					$(pagination).addClass("Escuro");
				} else {
					$(pagination).removeClass("Escuro");
				}

				if ($(atual).hasClass("header-Escuro") || $(atual).hasClass("Escuro")) {
					$(menu).addClass("Escuro");
					$(brand).addClass("Escuro");
					document.getElementById("Caminho_1").setAttribute("fill", "#253825")
					document.getElementById("Caminho_2").setAttribute("fill", "#253825")
					document.getElementById("Caminho_3").setAttribute("fill", "#253825")
					document.getElementById("Caminho_4").setAttribute("fill", "#253825")
					document.getElementById("Caminho_5").setAttribute("fill", "#253825")
					document.getElementById("Caminho_6").setAttribute("fill", "#253825")
				} else {
					$(menu).removeClass("Escuro");
					$(brand).removeClass("Escuro");
					document.getElementById("Caminho_1").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_2").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_3").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_4").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_5").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_6").setAttribute("fill", "#E05555")
				}

				if ($(atual).hasClass("header_cor_mobile-Claro")) {
					$(menu).removeClass("Escuro");
					$(brand).removeClass("Escuro");
					$(menu).addClass("Claro");
					$(brand).addClass("Claro");
					document.getElementById("Caminho_1").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_2").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_3").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_4").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_5").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_6").setAttribute("fill", "#E05555")
				}
			});
			
			$( document ).ready(function() {
				var header = $(".header");

				if ($(header).hasClass("black")) {
					document.getElementById("Caminho_1").setAttribute("fill", "#253825")
					document.getElementById("Caminho_2").setAttribute("fill", "#253825")
					document.getElementById("Caminho_3").setAttribute("fill", "#253825")
					document.getElementById("Caminho_4").setAttribute("fill", "#253825")
					document.getElementById("Caminho_5").setAttribute("fill", "#253825")
					document.getElementById("Caminho_6").setAttribute("fill", "#253825")
				} else {
					document.getElementById("Caminho_1").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_2").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_3").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_4").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_5").setAttribute("fill", "#E05555")
					document.getElementById("Caminho_6").setAttribute("fill", "#E05555")
				}
			});
		</script>
	</body>
</html>