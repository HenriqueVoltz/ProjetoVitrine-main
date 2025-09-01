<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
							<a href="/ProjetoVitrine-main/Materiais/Biblioteca/index.php" class="button small" style="float:right;margin-top:10px;" id="biblioteca-btn">Biblioteca</a>
							<script>
							// Corrige o caminho do botão Biblioteca para funcionar em qualquer subpasta
							(function() {
							  var btn = document.getElementById('biblioteca-btn');
							  if (!btn) return;
							  var testPaths = [
								'../Biblioteca/index.php',
								'../../Biblioteca/index.php',
								'Biblioteca/index.php',
								'/Materiais/Biblioteca/index.php'
							  ];
							  function testNext(i) {
								if (i >= testPaths.length) return;
								var xhr = new XMLHttpRequest();
								xhr.open('HEAD', testPaths[i], true);
								xhr.onload = function() {
								  if (xhr.status >= 200 && xhr.status < 400) {
									btn.href = testPaths[i];
								  } else {
									testNext(i+1);
								  }
								};
								xhr.onerror = function() { testNext(i+1); };
								xhr.send();
							  }
							  testNext(0);
							})();
							</script>
						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="/ProjetoVitrine-main/Materiais/Carrossel/index.php">Home</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1 id="dynamic-title">Kingdom Hearts 1.5</h1>
							<span class="image main" id="dynamic-image"></span>
							<p id="dynamic-desc-1"></p>
							<p id="dynamic-desc-2"></p>
							<script>
							// Exibe a imagem da pasta images conforme o parâmetro ?img= na URL, define o título e descrição dinâmicos
							(function() {
							  var params = new URLSearchParams(window.location.search);
							  var img = params.get('img');
							  var imgEl = document.createElement('img');
							  var imgSrc;
  							   var title = '';
							  var desc1 = '';
							  var desc2 = '';
							if (img === 'Kh1.5.png') {
								imgSrc = 'images/Kh1.5.png';
								title = 'Kingdom Hearts 1.5';
								desc1 = 'Lançamento na Steam: 13 de junho de 2024';
								desc2 = 'Inclui Kingdom Hearts HD 1.5 + 2.5 ReMIX.';
							} else if (img === 'Kh3.png') {
								imgSrc = 'images/Kh3Slider2.0.jpg';
								title = 'Kingdom Hearts 3';
								desc1 = 'Lançamento na Steam: 13 de junho de 2024';
								desc2 = 'A conclusão da saga de Xehanort.';
							} else if (img && (img.toLowerCase() === 'khfcp.png' || img.toLowerCase() === 'khfcp.jpg')) {
								imgSrc = 'images/KhFcPSlider2.0.jpg';
								title = 'Kingdom Hearts Final Chapter Prologue';
								desc1 = 'Lançamento na Steam: 13 de junho de 2024';
								desc2 = 'Coleção especial com capítulos essenciais.';
							} else if (img === 'MhRise2.0.jpg') {
								imgSrc = 'images/MhRise2.0.jpg';
								title = 'Monster Hunter Rise';
								desc1 = 'Lançamento na Steam: 12 de janeiro de 2022';
								desc2 = 'Aventure-se em Kamura Village.';
							} else if (img === 'Stories1.jpg') {
								imgSrc = 'images/Stories1.jpg';
								title = 'Monster Hunter Stories';
								desc1 = 'Lançamento na Steam: 14 de junho de 2024';
								desc2 = 'RPG de turnos no universo Monster Hunter.';
							} else if (img === 'Stories2.jpg') {
								imgSrc = 'Zona de Update/images/Stories2.jpg';
								   imgSrc = 'images/Stories2.jpg';
								title = 'Monster Hunter Stories 2';
								desc1 = 'Lançamento na Steam: 8 de julho de 2021';
								desc2 = 'Wings of Ruin, continuação da saga.';
							} else if (img === 'MhWildsSlider2.0.jpg') {
								imgSrc = 'images/MhWildsSlider2.0.jpg';
								title = 'Monster Hunter Wilds';
								desc1 = 'Lançamento na Steam: Previsto para 2025';
								desc2 = 'Nova geração da franquia Monster Hunter.';
							} else if (img === 'MhWorldSlider2.0.jfif' || img === 'MhWorldSlider2.0.jpg') {
								imgSrc = 'images/MhWorldSlider2.0.jfif';
								title = 'Monster Hunter World';
								desc1 = 'Lançamento na Steam: 9 de agosto de 2018';
								desc2 = 'Explore o Novo Mundo e enfrente monstros épicos.';
							} else if (img === 'KhFcPSlider.jpg') {
								imgSrc = 'images/KhFcPSlider.jpg';
								title = 'Kingdom Hearts Final Chapter Prologue';
								desc1 = 'Lançamento na Steam: 13 de junho de 2024';
								desc2 = 'Coleção especial com capítulos essenciais.';
							} else {
								imgSrc = img ? ('images/' + img) : 'images/Kh1.5Slider.png';
								title = 'Jogo não identificado';
								desc1 = 'Selecione um jogo para ver a data de lançamento na Steam.';
							  }
							  document.getElementById('dynamic-title').textContent = title;
							  document.getElementById('dynamic-desc-1').textContent = desc1;
							  document.getElementById('dynamic-desc-2').textContent = desc2;
							  imgEl.src = imgSrc;
							  imgEl.alt = '';
											imgEl.style.width = '100%';
											imgEl.style.maxWidth = '700px';
											imgEl.style.height = 'auto';
											imgEl.style.maxHeight = '350px';
											imgEl.style.objectFit = 'contain';
											imgEl.style.display = 'block';
											imgEl.style.margin = '0 auto 24px auto';
											imgEl.style.borderRadius = '10px';
											imgEl.style.boxShadow = '0 2px 10px rgba(0,0,0,0.2)';
							  imgEl.onerror = function() {
								this.style.display = 'none';
								var msg = document.createElement('div');
								msg.textContent = 'Imagem não encontrada: ' + imgSrc;
								msg.style.color = 'red';
								msg.style.textAlign = 'center';
								msg.style.margin = '0 auto 24px auto';
								document.getElementById('dynamic-image').appendChild(msg);
							  };
							  document.getElementById('dynamic-image').appendChild(imgEl);
							})();
							</script>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<footer class="footer mt-auto py-4 bg-dark text-white" style="background-color:#212529;color:#fff;">
	<div class="container text-center">
		<div class="row align-items-center">
			<div class="col-md-4 mb-2 mb-md-0 d-flex flex-column align-items-md-start align-items-center">
				<h6 class="mb-1">Projeto Vitrine</h6>
				<small>&copy; 2025 P.E Corp. Todos os direitos reservados.</small>
			</div>
			<div class="col-md-4 mb-2 mb-md-0 d-flex justify-content-center align-items-center">
				<a href="/ProjetoVitrine-main/Materiais/Login.php" class="text-white me-3">Entrar</a>
				<a href="/ProjetoVitrine-main/Materiais/Registro.php" class="text-white">Criar Conta</a>
			</div>
			<div class="col-md-4 d-flex justify-content-md-end justify-content-center align-items-center">
				<span>Contato institucional: <a href="mailto:henriquevoltz01@gmail.com" class="text-white">henriquevoltz01@gmail.com</a></span>
			</div>
		</div>
	</div>
</footer>
	</body>
								
</html>