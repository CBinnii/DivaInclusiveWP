<?php

	get_header();

?>
	<div class="content journal">
		<div class="header-text">
			<h1 class="title">
				<?php
					global $post;
					global $s;
				?>
				<h1 class="title"><?php echo "Pesquisa por: '" . $s ."'"; ?></h1>
			</h1>
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
			if(isset($s)) {
				$args = array(
					'post_type' => 'post',
					'status' => 'publish',
					'showposts' => -1,
					's' => $s
				);

				$more = new WP_Query( $args );
				
				if (!empty($more->posts)):  ?>

					<div class="posts-journal">
						<div class="row adjust-margin-journal">
							<?php foreach ( $more->posts as $post ): ?>
								<div class="col-md-4 adjust-padding-journal">
									<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title($post->ID); ?>">

										<?php if(has_post_thumbnail()){?>
											<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>">
										<?php }?>
										
										<div class="journal-text">
											<?php $cat = get_the_category();?>
											<p><?php echo $cat[0]->name; ?></p>
											
											<h1 class="title"><?php echo get_the_title($post->ID); ?></h1>
											<div class="hr"></div>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<?php 
					echo paginatorNews($more);
				else : ?>
					<div class="posts-journal">
						<div class="header-text">
							<h1 class="seach-none">Nada encontrado</h1>
						</div>
						<div class="excerpt">
							<p>Desculpe, mas nada corresponde aos seus termos de pesquisa.</p>
							<p>Por favor, tente novamente com algumas palavras-chave diferentes.</p>
						</div>
					</div>
				<?php
				endif;
				wp_reset_query();
			} ?>
	</div>
<?php
	get_footer();
?>

<script type="text/javascript">
	$("ul#dropdownMenuButton").append("<li class='last'><svg xmlns='http://www.w3.org/2000/svg' width='40.32' height='16.56' viewBox='0 0 40.32 16.56'><path id='Caminho_157' data-name='Caminho 157' d='M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z' transform='translate(22.56 117.84)' fill='#f7f4f2'></path></svg></li>");
</script>