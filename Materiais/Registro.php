<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/auth-admin.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Cadastro</h2>
    <form>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
      </div>
      <div class="mb-3">
        <label for="senha2" class="form-label">Repita a senha</label>
        <input type="password" class="form-control" id="senha2" placeholder="Repita sua senha">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="termos">
        <label class="form-check-label" for="termos">Aceito os <a href="#">termos de uso</a></label>
      </div>
      <button type="submit" class="btn btn-success w-100 mb-2">Cadastrar</button>
      <div class="text-center mt-3">
  <a href="/ProjetoVitrine-main/Materiais/Login.php" class="small">Já tem conta? Faça login</a>
      </div>
      <div class="text-center mt-3">
  <a href="/ProjetoVitrine-main/Materiais/Carrossel/index.php" class="btn btn-secondary">Voltar ao Início</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

