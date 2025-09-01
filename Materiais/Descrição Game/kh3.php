<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kingdom Hearts 3</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/ProjetoVitrine-main/Materiais/Descrição Game/index.php">Jogos</a>
                <a class="navbar-brand" href="/ProjetoVitrine-main/Materiais/Biblioteca/index.php" style="margin-left: 20px;">Biblioteca</a>
                <div class="d-flex ms-auto">
                    <a class="btn me-2" href="/ProjetoVitrine-main/Materiais/Login.php" style="border:none;color:#212529;background:none;">Login</a>
                    <a class="btn" href="/ProjetoVitrine-main/Materiais/Registro.php" style="border:none;color:#212529;background:none;">Cadastrar</a>
                </div>
            </div>
        </nav>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../Carrossel/ImagensBiblioteca/Kh3Slider2.0.jpg" alt="Kingdom Hearts 3" /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">Kingdom Hearts 3</h1>
                        <p class="lead">Acompanhe Sora e seus amigos em uma jornada épica para salvar mundos Disney e Pixar, com gráficos modernos e batalhas emocionantes.</p>
                        <div class="d-flex">
                            <a class="btn btn-outline-dark flex-shrink-0" href="https://store.steampowered.com/app/2552450/KINGDOM_HEARTS_III__Re_Mind_DLC/?curator_clanid=45029091" target="_blank">
                                <i class="bi-cart-fill me-1"></i>
                                Ver na Steam
                            </a>
                            <script>
                            function openSteamApp(appId, webUrl) {
                                var steamUrl = 'steam://store/' + appId;
                                var opened = false;
                                // Tenta abrir o app da Steam
                                var iframe = document.createElement('iframe');
                                iframe.style.display = 'none';
                                iframe.src = steamUrl;
                                document.body.appendChild(iframe);
                                setTimeout(function() {
                                    if (!opened) {
                                        window.open(webUrl, '_blank');
                                    }
                                    document.body.removeChild(iframe);
                                }, 1000);
                            }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Seção de Itens Semelhantes -->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h3 class="mb-4">Itens semelhantes</h3>
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-2 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="../Biblioteca/ImagensBiblioteca/Kh1.5.png" alt="Kingdom Hearts 1.5 + 2.5" height="180"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">KH 1.5 + 2.5</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/ProjetoVitrine-main/Materiais/Descrição Game/kh1_5.php">Ver Mais</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="../Biblioteca/ImagensBiblioteca/KhFcPSlider.jpg" alt="Kingdom Hearts Final Chapter Prologue" height="180"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">KH Final Chapter Prologue</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/ProjetoVitrine-main/Materiais/Descrição Game/khfcp.php">Ver Mais</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
                <div id="footer-container"></div>
                <script>
                fetch('../footer.php')
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('footer-container').innerHTML = html;
                    });
                </script>
</html>
