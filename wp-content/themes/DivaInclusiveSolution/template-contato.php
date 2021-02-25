<?php
/**
 * Template Name: Página de Contato
 *
 **/
	get_header();

?>
	<div class="content contato">
		<div class="header-text">
			<p class="subtitle">contatos</p>
			<h1 class="title">Mande um email</h1>
		</div>

		<div class="row m-0">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="form-tabs">
					<input type="radio" id="email" class="rd__tab" name="tab" checked>
					<input type="radio" id="investidor" class="rd__tab" name="tab">
					<input type="radio" id="historia" class="rd__tab" name="tab">

					<div class="menu">
						<label for="email" class="tab__label"><span>mande um email</span></label>
						<label for="investidor" class="tab__label"><span>seja um investidor</span></label>
						<label for="historia" class="tab__label"><span>conte sua história</span></label>
					</div>
					
					<div class="tab email">
						<form class="form-email">
							<div class="row">
								<div class="col-md-5">
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Nome</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="Nome">
										</div>
									</div>
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Email</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="example@example.com">
										</div>
									</div>
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Assunto</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="Assunto">
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<textarea placeholder="Sua mensagem"></textarea>

									<div class="d-flex justify-content-end">
										<button type="submit" class="btn-enviar">
											Enviar 
											<span><svg xmlns="http://www.w3.org/2000/svg" width="16.56" height="40.32" viewBox="0 0 16.56 40.32"><path id="Caminho_157" data-name="Caminho 157" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(-101.28 22.56) rotate(90)" fill="#f7f4f2"/></svg></span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab investidor">
						<p class="container">Se você acredita no poder de transformação da diversidade e no trabalho que nós da Diva realizamos, invista em nossas ideias. São vários projetos potentes esperando o combustível do seu investimento.</p>
						
						<form class="form-email">
							<div class="row">
								<div class="col-md-5">
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Nome</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="Nome">
										</div>
									</div>
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Email</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="example@example.com">
										</div>
									</div>
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Empresa</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="Empresa">
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<textarea placeholder="Sua mensagem"></textarea>

									<div class="d-flex justify-content-end">
										<button type="submit" class="btn-enviar">
											Enviar 
											<span><svg xmlns="http://www.w3.org/2000/svg" width="16.56" height="40.32" viewBox="0 0 16.56 40.32"><path id="Caminho_157" data-name="Caminho 157" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(-101.28 22.56) rotate(90)" fill="#f7f4f2"/></svg></span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab historia">
						<p class="container">Amplificar vozes fadadas ao silêncio é um passo importante no combate à desigualdade. Se você sente essa dor, compartilhe sua história com a gente. Seja protagonista desta luta.</p>

						<form class="form-email">
							<div class="row">
								<div class="col-md-5">
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Nome</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="Nome">
										</div>
									</div>
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Email</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="example@example.com">
										</div>
									</div>
									<div class="row align-items-center border-bottom">
										<div class="label-width">
											<label>Assunto</label>
										</div>
										<div class="input-width">
											<input type="text" name="" placeholder="Assunto">
										</div>
									</div>

									<div class="row enviar-arquivo">
										<label for="arquivo">
											<svg xmlns="http://www.w3.org/2000/svg" width="16.67" height="37.194" viewBox="0 0 16.67 37.194"><path id="Caminho_340" data-name="Caminho 340" d="M18261.063,1267.115v14.226l3.906,3.9,3.9-3.9v-20.149h-11.24v27.444l7.336,7.335,7.334-7.335V1267.81" transform="translate(-18256.633 -1260.191)" fill="none" stroke="#e05555" stroke-width="2"/></svg>
											<span>Enviar arquivo</span>
										</label>
										<input type="file" name="arquivo" id="arquivo">
									</div>
								</div>
								<div class="col-md-7">
									<textarea placeholder="Sua mensagem"></textarea>

									<div class="d-flex justify-content-end">
										<button type="submit" class="btn-enviar">
											Enviar 
											<span><svg xmlns="http://www.w3.org/2000/svg" width="16.56" height="40.32" viewBox="0 0 16.56 40.32"><path id="Caminho_157" data-name="Caminho 157" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(-101.28 22.56) rotate(90)" fill="#f7f4f2"/></svg></span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
<?php
	get_footer();
?>