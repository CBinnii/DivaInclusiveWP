<?php
/**
 * Template Name: Journal
 *
 **/
	get_header('dark');

?>
	<div class="content journal">
		<div class="header-text">
			<?php
				$svg_titulo = get_field('svg_titulo');

				if( $svg_titulo != "" || $svg_titulo != null ) { ?>
					<h1 class="title"><?php echo $svg_titulo; ?></h1>
				<?php } else { ?>
					<h1 class="title"><?php echo get_the_title(); ?></h1>
				<?php } 
			?>
		</div>
		
		<div class="menu-journal">
			<div class="row adjust-margin-journal">
				<div class="col-md-4 adjust-padding-journal busca">
					<?php get_search_form(); ?>
				</div>

				<div class="col-md-4 adjust-padding-journal menu-dropdown">
					<button class="dropdown-button dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
						Navegue por assunto
					</button>
					<?php
						wp_nav_menu(
							array(
								'menu'				   => 'Menu Journal',
								'container'            => 'ul',
								'menu_class'           => 'dropdown-menu',
								'menu_id'              => 'dropdownMenuButton',
								'echo'                 => true,
								'fallback_cb'          => 'wp_page_menu'
							)
						);
					?>
				</div>

				<div class="col-md-4 adjust-padding-journal envie">
					<a href="/contato/#historia" title="">envie sua história</a>
				</div>
			</div>
		</div>

		<?php
			$args = array(
				'post_type' => 'post',
				'status' => 'publish',
				'showposts' => 9,
				'paged' => $paged
			);

			$more = new WP_Query( $args );

			if (!empty($more->posts)): ?>
				<div class="posts-journal">
					<div class="row adjust-margin-journal">
						<?php 
							$cont = 0;

							foreach ( $more->posts as $post ): 
						?>
							<div class="col-md-4 adjust-padding-journal">
								<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title($post->ID); ?>">

									<?php if(has_post_thumbnail()){?>
										<img id="img-<?php echo $cont; ?>" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>">
									<?php }?>
									
									<div class="journal-text">
										<?php $cat = get_the_category();?>
										<p class="categoria"><?php echo $cat[0]->name; ?></p>
										
										<h1 class="title"><?php echo get_the_title($post->ID); ?></h1>
									</div>
								</a>
							</div>
						<?php 
						$cont++;
						endforeach; ?>
					</div>
				</div>
				<?php echo paginatorNews($more);
			endif;
			wp_reset_query();
		?>
	</div>

	<?php
		if( get_field('tem_newsletter') ) {
			get_template_part( 'newsletter-escuro' );
		}
	?>
<?php
	get_footer();
?>

<script type="text/javascript">
	$("ul#dropdownMenuButton").append("<li class='last'><svg xmlns='http://www.w3.org/2000/svg' width='40.32' height='16.56' viewBox='0 0 40.32 16.56'><path id='Caminho_157' data-name='Caminho 157' d='M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z' transform='translate(22.56 117.84)' fill='#f7f4f2'></path></svg></li>");

	$( document ).ready(function() {
		var img = $("img").height();
		console.log(img);

		$(".journal-text").css("height", img + "px");

		$(window).resize(function () {
			var footer = $("img").height();
			
			$(".journal-text").css("height", img + "px");
		});
	});
</script>