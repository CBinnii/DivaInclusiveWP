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
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">diversidade</a></li>
						<li><a class="dropdown-item" href="#">empatia</a></li>
						<li><a class="dropdown-item" href="#">ativismo</a></li>
						<li><a class="dropdown-item" href="#">tecnologia</a></li>
						<li class="last">
							<svg xmlns="http://www.w3.org/2000/svg" width="40.32" height="16.56" viewBox="0 0 40.32 16.56">
								<path id="Caminho_157" data-name="Caminho 157" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(22.56 117.84)" fill="#f7f4f2"/>
							</svg>

						</li>
					</ul>
				</div>

				<div class="col-md-4 adjust-padding-journal envie">
					<a href="#" title="">envie sua história</a>
				</div>
			</div>
		</div>

		<div class="posts-journal">
			<div>
				<a href="single-journal.html" title="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal/1.png">
					
					<div class="journal-text">
						<p>Ativismo</p>
						
						<h1 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
					</div>
				</a>
			</div>
			<div>
				<a href="single-journal.html" title="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal/2.png">
					
					<div class="journal-text">
						<p>Ativismo</p>
						
						<h1 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</h1>
					</div>
				</a>
			</div>
			<div>
				<a href="single-journal.html" title="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal/3.png">
					
					<div class="journal-text">
						<p>Ativismo</p>
						
						<h1 class="title">Lorem ipsum dolor sit amet, labore et dolore magna aliqua.</h1>
					</div>
				</a>
			</div>
			<div>
				<a href="single-journal.html" title="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal/4.png">
					
					<div class="journal-text">
						<p>Ativismo</p>
						
						<h1 class="title">Lorem ipsum dolor sit amet.</h1>
					</div>
				</a>
			</div>
			<div>
				<a href="single-journal.html" title="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal/5.png">
					
					<div class="journal-text">
						<p>Ativismo</p>
						
						<h1 class="title">Lorem ipsum dolor sit amet,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
					</div>
				</a>
			</div>
			<div>
				<a href="single-journal.html" title="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal/6.png">
					
					<div class="journal-text">
						<p>Ativismo</p>
						
						<h1 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
					</div>
				</a>
			</div>
			<div>
				<a href="single-journal.html" title="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journal/7.png">
					
					<div class="journal-text">
						<p>Ativismo</p>
						
						<h1 class="title">Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
					</div>
				</a>
			</div>
		</div>

		<nav aria-label="Page navigation example">
			<ul class="pagination pagination-journal">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="16.56" height="40.32" viewBox="0 0 16.56 40.32">
								<path id="Previous" data-name="Previous" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(117.84 17.76) rotate(-90)" fill="#253825"/>
							</svg>
						</span>
					</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="16.56" height="40.32" viewBox="0 0 16.56 40.32">
								<path id="Next" data-name="Next" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(-101.28 22.56) rotate(90)" fill="#253825"/>
							</svg>
						</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
<?php
	get_footer();
?>