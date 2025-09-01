<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Monster Hunter World</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/ProjetoVitrine-main/Materiais/Carrossel/index.php">Jogos</a>
                <a class="navbar-brand" href="/ProjetoVitrine-main/Materiais/Biblioteca/index.php" style="margin-left: 20px;">Biblioteca</a>
            </div>
        </nav>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../Carrossel/ImagensBiblioteca/MhWorldSlider2.0.jfif" alt="Monster Hunter World" /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">Monster Hunter World</h1>
                        <p class="lead">Explore ambientes vastos e cace monstros gigantes em missões solo ou cooperativas neste sucesso da franquia Monster Hunter.</p>
                        <div class="d-flex">
                            <a class="btn btn-outline-dark flex-shrink-0" href="#" onclick="openSteamApp('582010', 'https://store.steampowered.com/app/582010/'); return false;">
                                <i class="bi-cart-fill me-1"></i>
                                Ver na Steam
                            </a>
                            <script>
                            function openSteamApp(appId, webUrl) {
                                var steamUrl = 'steam://store/' + appId;
                                var opened = false;
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
                            <img class="card-img-top" src="../Carrossel/ImagensBiblioteca/MhRise.jpg" alt="Monster Hunter Rise" height="180"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Monster Hunter Rise</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/ProjetoVitrine-main/Materiais/Descrição Game/mhrise.php">Ver Mais</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="../Carrossel/ImagensBiblioteca/MhWildsSlider2.0.jpg" alt="Monster Hunter Wilds" height="180"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Monster Hunter Wilds</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/ProjetoVitrine-main/Materiais/Descrição Game/mhwilds.php">Ver Mais</a></div>
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
