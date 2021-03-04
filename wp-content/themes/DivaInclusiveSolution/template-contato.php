<?php
/**
 * Template Name: Página de Contato
 *
 **/
	get_header();

?>
	<div class="content contato">
		<div class="header-text">
			<p class="subtitle"><?php echo get_the_title(); ?></p>
			<h1 class="title" id="tituloForm"></h1>
		</div>

		<div class="row m-0">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="form-tabs">
					<?php
						// Check rows exists.
						if( have_rows('formularios') ):
							$cont = 0;

							// Loop through rows.
							while( have_rows('formularios') ) : the_row();
								$identificador_formulario = get_sub_field('identificador_formulario');
							?>
								<input type="radio" id="<?php echo $identificador_formulario ?>" class="rd__tab" name="tab" <?php if($cont==0) { ?> checked <?php } ?>>
							<?php
								$cont++;
							// End loop.
							endwhile;
							?>
								<div class="menu">
									<?php
										while( have_rows('formularios') ) : the_row();
											$titulo_formulario = get_sub_field('titulo_formulario');
											$identificador_formulario = get_sub_field('identificador_formulario');
										?>
											<label for="<?php echo $identificador_formulario ?>" class="tab__label"><span><?php echo $titulo_formulario ?></span></label>
										<?php
										endwhile;
										?>
								</div>
							<?php
							// Loop through rows.
							while( have_rows('formularios') ) : the_row();
								$texto_formulario = get_sub_field('texto_formulario');
								$identificador_formulario = get_sub_field('identificador_formulario');
								$shortcode_formulario = get_sub_field('shortcode_formulario');
							?>
								<div class="tab <?php echo $identificador_formulario ?>">
									<?php if ($texto_formulario != "" || $texto_formulario != null) {?>
										<p class="container"><?php echo $texto_formulario ?></p>
									<?php }?>

									<div class="form-email">
										<?php
										    if (get_sub_field('shortcode_formulario')):
										        echo do_shortcode(get_sub_field('shortcode_formulario'));
										    endif; 
										 ?>
									</div>
								</div>
							<?php
							endwhile;
						// No value.
						else : ?>
							<h1 class="title">Nenhum formulário encontrado.</h1>
						<?php endif;
					?>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
<?php
	get_footer();
?>

<script type="text/javascript">
	$( document ).ready(function() {
		$("#files").attr('multiple', true);

		// Checked input by URL HASH
		var id = window.location.hash;
		console.log(id);

		$(id).prop('checked', true);

		// Change text title from CHECKED OPTION 
		$("input[type='radio']:checked").each(function() {
			var idVal = $(this).attr("id");
			$("#tituloForm").html($("label[for='"+idVal+"']").text());
		});

		// After click, CHANGE text title from CHECKED OPTION 
		$("input[type='radio']").click(function() {
			$("input[type='radio']:checked").each(function() {
				var idVal = $(this).attr("id");
				$("#tituloForm").html($("label[for='"+idVal+"']").text());
			});
		});
	});
	
	// Verifica se as APIs de arquivo são suportadas pelo navegador.
	if (window.File && window.FileReader && window.FileList && window.Blob) {
		// Todas as APIs são suportadas!
	} else {
		alert('A APIs de arquivos não é totalmente suportada neste navegador.');
	}


	function handleFileSelect(evt) {
		var files = evt.target.files; // Objeto FileList guarda todos os arquivos.
		var output = [];
		//Intera sobre os arquivos e lista esses objetos no output.
		for (var i = 0, f; f = files[i]; i++) {
			// console.log('Objeto do arquivo', f);
			// Informação adicional se for imagem:
			if (f.type.match('image.*')) {
				var reader = new FileReader();
				//A leitura do arquivo é assíncrona 
				reader.onload = (function(theFile) {
					return function(e) {
						// console.log('Img info', e, theFile);
						// Gera a miniatura:
						var img = document.createElement('img');
						img.src = e.target.result;
						img.title = escape(theFile.name);

						var span = document.createElement('span');
						//Obtém o tamanho:
						//Só é possível obter o tamanho do arquivo após o carregamento dele na miniatura, como o src é um base64 gerado à partir do arquivo local não terá custo de carregamento através da rede.
						img.onload = function(){
							var i = document.createElement('i');
						i.innerHTML = "<br>Tamanho Miniatura: " + img.width + "px Largura - " + img.height + "px Altura <br> Tamanho original:"+ img.naturalWidth+ "px Largura - " + img.naturalWidth+ "px Altura";
						span.appendChild(i);

						//Esse método retorna o tamanho calculado: Resultado esperado ((proporcional)x75) 

						//var width = img.clientWidth;
						//var height = img.clientHeight;
						}
						
						span.appendChild(img);
						document.getElementById('list').insertBefore(span, null);
					};
				})(f);

				// Read in the image file as a data URL.
				reader.readAsDataURL(f);
			}

			// output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
			// 	f.size, ' bytes,  última modificação: ',
			// 	f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
			// 	'</li>');
			output.push('<li><strong>', escape(f.name), '</strong></li>');
		}
		document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
	}

	document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>