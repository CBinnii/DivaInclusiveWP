<?php 
	get_header('dark');

	$category = get_queried_object();
	$catID = $category->term_id;
?>
	<div class="content journal">
		<div class="header-text">
			<h1 class="title"><?php echo $category->name ?></h1>
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
				'showposts' => -1,
				'category__in' => $catID,
				'post__not_in' => $postsID,
				's' => $s,
				'paged' => $paged
			);

			$more = new WP_Query( $args );

			if (!empty($more->posts)): ?>
				<div class="posts-journal">
					<div class="row adjust-margin-journal">
						<?php foreach ( $more->posts as $post ): ?>
							<div class="col-md-4 adjust-padding-journal">
								<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title($post->ID); ?>">
									<?php 
										$image = get_field('featured_image');
										if( !empty( $image ) ): ?>
											<div class="imagem" style="background-image: url('<?php echo esc_url($image); ?>');">
											</div>
									<?php endif; ?>
									
									<div class="journal-text">
										<?php $cat = get_the_category();?>
										<p><?php echo $cat[0]->name; ?></p>
										
										<h1 class="title"><?php echo get_the_title($post->ID); ?></h1>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<?php echo paginatorNews($more);
			else :
				wp_reset_query();
			?>
				<div>
					<h1 class="title">Nenhum post foi encontrado nessa categoria.</h1>
				</div>
		<?php
			endif;
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
	
</script>