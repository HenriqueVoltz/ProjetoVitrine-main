<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/auth-admin.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Login</h2>
    <form id="login-form">
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" class="form-control" id="usuario" placeholder="Digite seu usuário">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Lembrar de mim</label>
      </div>
      <button type="submit" class="btn btn-primary w-100">Entrar</button>
      <div class="text-center mt-3">
  <a href="/ProjetoVitrine-main/Materiais/Esqueceu_Senha.php" class="small">Esqueceu a senha?</a>
      </div>
      <div class="text-center mt-2">
  <a href="/ProjetoVitrine-main/Materiais/admin.php" class="small text-danger">Logar como admin</a>
      </div>
      <hr>
      <div class="text-center">
  <span>Não tem conta?</span> <a href="/ProjetoVitrine-main/Materiais/Registro.php">Cadastre-se</a>
      </div>
      <div class="text-center mt-3">
  <a href="/ProjetoVitrine-main/Materiais/Carrossel/index.php" class="btn btn-secondary">Voltar ao Início</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('login-form').onsubmit = function(e) {
      e.preventDefault();
      var usuario = document.getElementById('usuario').value;
      var senha = document.getElementById('password').value;
      if (usuario === 'Admin001' && senha === '123456') {
        window.location.href = 'admin.php';
      } else {
        // Aqui pode mostrar um erro ou seguir o fluxo normal
        alert('Usuário ou senha incorretos para admin.');
      }
    };
  </script>
</body>
</html>