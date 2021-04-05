<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, initial-scale=1, user-scalable=no,maximum-scale=1,minimum-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Diversicon</title>
		<meta property='og:title' content='Diversicon'/>
		<meta property='og:description' content='✲ Um espaço para respirar diversidade ✲ Vamos juntes imaginar um mundo mais acolhedor e menos desigual?'/>
		<meta property='og:image' content='<?php echo get_template_directory_uri(); ?>/images/diversicon-central.gif'/>
		<meta property='og:url' content='<?php echo get_the_permalink(); ?>' />
		<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	</head>

	<body>
		<div class="content landing">
			<div class="landing_about">
				<div class="landing_when">
					<h1>9 — 10 — 11 <br> abril <br> online</h1>
				</div>

				<div class="landing_what">
					<ul>
						<li>Debates</li>
						<li>Performances</li>
						<li>Stands profissionais</li>
						<li>Música</li>
					</ul>

					<p>Acompanhe no <br> <a href="https://www.instagram.com/diversicon.oficial/" target="_blank" title="Instagram Diversicon">Instagram</a> e <a href="https://www.facebook.com/DiversiCon.Oficial/" target="_blank" title="Facebook Diversicon">Facebook</a></p>
				</div>
			</div>

			<div class="landing_image-logo onlydesk">
				<img src="<?php echo get_template_directory_uri(); ?>/images/diversicon-logo.png" alt="Logo Diversicon">
			</div>

			<div class="landing_img-central">
				<div>
					<div class="landing_image-logo onlymobi">
						<img src="<?php echo get_template_directory_uri(); ?>/images/diversicon-logo.png" alt="Logo Diversicon">
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/diversicon-central.gif" alt="Diversicon">
				</div>
			</div>

			<div class="footer">
				<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo">
				</div>

				<div class="footer-secretaria">
					<img src="<?php echo get_template_directory_uri(); ?>/images/footer-evento.png" alt="Governo do Estado de São Paulo">
				</div>
			</div>
		</div>

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
		
		<script type="text/javascript">
			$( document ).ready(function() {
				var footer = $(".footer-secretaria").height() + 10;
				console.log(footer);

				$(".landing").css("height", "calc(100vh + " + footer + "px");

				$(window).resize(function () {
					var footer = $(".footer-secretaria").height() + 10;
					
					$(".landing").css("height", "calc(100vh + " + footer + "px");

					if ($(window).width() < 768) {
						$(".landing").css("height", "100vh");
					}
				});
			});
		</script>
	</body>
</html>