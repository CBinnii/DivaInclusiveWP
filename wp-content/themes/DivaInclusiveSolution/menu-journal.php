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