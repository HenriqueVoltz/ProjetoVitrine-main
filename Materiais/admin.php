<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/auth-admin.css">
  <style>
    .hidden { display: none; }
    .preview-img { max-width: 120px; max-height: 120px; margin-bottom: 10px; }
  </style>
</head>
<body>
  <div class="container mt-5">
  <a href="/ProjetoVitrine-main/Materiais/Carrossel/index.php" class="btn btn-secondary mb-3 w-100" style="font-weight:600;letter-spacing:0.5px;">Voltar ao início</a>
    <div id="login-section">
      <h2 class="mb-4">Login Admin</h2>
      <form id="admin-login">
        <div class="mb-3">
          <label for="admin-user" class="form-label">Usuário</label>
          <input type="text" class="form-control" id="admin-user" placeholder="Admin001">
        </div>
        <div class="mb-3">
          <label for="admin-pass" class="form-label">Senha</label>
          <input type="password" class="form-control" id="admin-pass" placeholder="123456">
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
        <div id="login-error" class="text-danger mt-2 hidden">Usuário ou senha incorretos.</div>
      </form>
    </div>
    <div id="admin-panel" class="hidden">
      <h2 class="mb-4">Painel do Administrador</h2>
      <ul class="nav nav-tabs mb-3" id="adminTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="atualizacoes-tab" data-bs-toggle="tab" data-bs-target="#atualizacoes" type="button" role="tab">Adicionar Atualização</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="jogo-tab" data-bs-toggle="tab" data-bs-target="#jogo" type="button" role="tab">Adicionar Jogo</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="editar-tab" data-bs-toggle="tab" data-bs-target="#editar" type="button" role="tab">Editar Jogo</button>
        </li>
      </ul>
      <div class="tab-content" id="adminTabsContent">
        <!-- Adicionar Atualização -->
        <div class="tab-pane fade show active" id="atualizacoes" role="tabpanel">
          <form id="form-atualizacao">
            <div class="mb-3">
              <label for="atualizacao-img" class="form-label">Imagem</label>
              <input type="file" class="form-control" id="atualizacao-img" accept="image/*">
              <img id="preview-atualizacao" class="preview-img hidden" />
            </div>
            <div class="mb-3">
              <label for="atualizacao-desc" class="form-label">Descrição</label>
              <textarea class="form-control" id="atualizacao-desc" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Adicionar Atualização</button>
          </form>
          <div id="atualizacoes-list" class="mt-4"></div>
        </div>
        <!-- Adicionar Jogo -->
        <div class="tab-pane fade" id="jogo" role="tabpanel">
          <form id="form-jogo">
            <div class="mb-3">
              <label for="jogo-img" class="form-label">Imagem</label>
              <input type="file" class="form-control" id="jogo-img" accept="image/*">
              <img id="preview-jogo" class="preview-img hidden" />
            </div>
            <div class="mb-3">
              <label for="jogo-desc" class="form-label">Descrição</label>
              <textarea class="form-control" id="jogo-desc" rows="2"></textarea>
            </div>
            <div class="mb-3">
              <label for="jogo-steam" class="form-label">Link Steam</label>
              <input type="url" class="form-control" id="jogo-steam" placeholder="https://store.steampowered.com/app/...">
            </div>
            <button type="submit" class="btn btn-success">Adicionar Jogo</button>
          </form>
          <div id="jogos-list" class="mt-4"></div>
        </div>
        <!-- Editar Jogo -->
        <div class="tab-pane fade" id="editar" role="tabpanel">
          <div id="edit-jogos-list" class="mb-3"></div>
          <form id="form-editar-jogo" class="hidden">
            <div class="mb-3">
              <label for="edit-jogo-img" class="form-label">Nova Imagem</label>
              <input type="file" class="form-control" id="edit-jogo-img" accept="image/*">
              <img id="preview-edit-jogo" class="preview-img hidden" />
            </div>
            <div class="mb-3">
              <label for="edit-jogo-desc" class="form-label">Nova Descrição</label>
              <textarea class="form-control" id="edit-jogo-desc" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <button type="button" class="btn btn-secondary ms-2" id="cancel-edit">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Login simples
    document.getElementById('admin-login').onsubmit = function(e) {
      e.preventDefault();
      var user = document.getElementById('admin-user').value;
      var pass = document.getElementById('admin-pass').value;
      if (user === 'Admin001' && pass === '123456') {
        document.getElementById('login-section').classList.add('hidden');
        document.getElementById('admin-panel').classList.remove('hidden');
      } else {
        document.getElementById('login-error').classList.remove('hidden');
      }
      // Renderizar jogos na aba editar assim que logar
      renderJogos();
    };

    // Preview de imagem para atualização
    document.getElementById('atualizacao-img').onchange = function(e) {
      var img = e.target.files[0];
      var preview = document.getElementById('preview-atualizacao');
      if (img) {
        preview.src = URL.createObjectURL(img);
        preview.classList.remove('hidden');
      } else {
        preview.classList.add('hidden');
      }
    };
    // Preview de imagem para jogo
    document.getElementById('jogo-img').onchange = function(e) {
      var img = e.target.files[0];
      var preview = document.getElementById('preview-jogo');
      if (img) {
        preview.src = URL.createObjectURL(img);
        preview.classList.remove('hidden');
      } else {
        preview.classList.add('hidden');
      }
    };
    // Preview de imagem para edição
    document.getElementById('edit-jogo-img').onchange = function(e) {
      var img = e.target.files[0];
      var preview = document.getElementById('preview-edit-jogo');
      if (img) {
        preview.src = URL.createObjectURL(img);
        preview.classList.remove('hidden');
      } else {
        preview.classList.add('hidden');
      }
    };

    // Dados superficiais
    var atualizacoes = [];
    var jogos = [
      {
        img: '../Zona de Update/images/Kh1.5Slider.png',
        desc: 'Kh1.5+2.5',
        steam: 'https://store.steampowered.com/app/2398000/KINGDOM_HEARTS_HD_15_25_ReMIX/'
      },
      {
        img: '../Zona de Update/images/KhFcPSlider.jpg',
        desc: 'Kh Final charpter prologue',
        steam: 'https://store.steampowered.com/app/2552440/KINGDOM_HEARTS_HD_28_Final_Chapter_Prologue/'
      },
      {
        img: '../Zona de Update/images/Kh3Slider.jpg',
        desc: 'Kingdom hearts 3',
        steam: 'https://store.steampowered.com/app/1446780/KINGDOM_HEARTS_III/'
      },
      {
        img: '../Zona de Update/images/MhWorld.jpg',
        desc: 'Monster Hunter World',
        steam: 'https://store.steampowered.com/app/582010/Monster_Hunter_World/'
      },
      {
        img: '../Zona de Update/images/MhRise.jpg',
        desc: 'Monster Hunter Rise',
        steam: 'https://store.steampowered.com/app/1446780/Monster_Hunter_Rise/'
      },
      {
        img: '../Zona de Update/images/MhStories.jpg',
        desc: 'Monster Hunter Stories',
        steam: 'https://store.steampowered.com/app/2356560/Monster_Hunter_Stories/'
      },
      {
        img: '../Zona de Update/images/MhStories2.jpg',
        desc: 'Monster Hunter Stories 2',
        steam: 'https://store.steampowered.com/app/1277400/Monster_Hunter_Stories_2_Wings_of_Ruin/'
      },
      {
        img: '../Zona de Update/images/MhWilds.jpg',
        desc: 'Monster Hunter Wilds',
        steam: 'https://store.steampowered.com/app/2246340/Monster_Hunter_Wilds/'
      }
    ];
    var editIndex = null;

    // Adicionar atualização
    document.getElementById('form-atualizacao').onsubmit = function(e) {
      e.preventDefault();
      var desc = document.getElementById('atualizacao-desc').value;
      var imgInput = document.getElementById('atualizacao-img');
      var img = imgInput.files[0] ? URL.createObjectURL(imgInput.files[0]) : '';
      atualizacoes.push({ img, desc });
      renderAtualizacoes();
      this.reset();
      document.getElementById('preview-atualizacao').classList.add('hidden');
    };
    function renderAtualizacoes() {
      var list = document.getElementById('atualizacoes-list');
      list.innerHTML = '';
      atualizacoes.forEach(function(a, i) {
        list.innerHTML += `<div class='border rounded p-2 mb-2'><img src='${a.img}' class='preview-img'/>${a.desc}</div>`;
      });
    }

    // Adicionar jogo
    document.getElementById('form-jogo').onsubmit = function(e) {
      e.preventDefault();
      var desc = document.getElementById('jogo-desc').value;
      var imgInput = document.getElementById('jogo-img');
      var img = imgInput.files[0] ? URL.createObjectURL(imgInput.files[0]) : '';
      var steam = document.getElementById('jogo-steam').value;
      jogos.push({ img, desc, steam });
      renderJogos();
      this.reset();
      document.getElementById('preview-jogo').classList.add('hidden');
    };
    function renderJogos() {
      var list = document.getElementById('jogos-list');
      list.innerHTML = '';
      jogos.forEach(function(j, i) {
        list.innerHTML += `<div class='border rounded p-2 mb-2'><img src='${j.img}' class='preview-img'/><div>${j.desc}</div><a href='${j.steam}' target='_blank'>Ver na Steam</a></div>`;
      });
      renderEditJogos();
    }

    // Editar jogo
    function renderEditJogos() {
      var list = document.getElementById('edit-jogos-list');
      list.innerHTML = '';
      jogos.forEach(function(j, i) {
        list.innerHTML += `<div class='border rounded p-2 mb-2'><img src='${j.img}' class='preview-img'/><div>${j.desc}</div><a href='${j.steam}' target='_blank'>Ver na Steam</a> <button class='btn btn-sm btn-warning ms-2' onclick='editJogo(${i})'>Editar</button></div>`;
      });
    }
    window.editJogo = function(i) {
      editIndex = i;
      var j = jogos[i];
      document.getElementById('form-editar-jogo').classList.remove('hidden');
      document.getElementById('edit-jogo-desc').value = j.desc;
      document.getElementById('preview-edit-jogo').src = j.img;
      document.getElementById('preview-edit-jogo').classList.remove('hidden');
    };
    document.getElementById('form-editar-jogo').onsubmit = function(e) {
      e.preventDefault();
      if (editIndex !== null) {
        var desc = document.getElementById('edit-jogo-desc').value;
        var imgInput = document.getElementById('edit-jogo-img');
        var img = imgInput.files[0] ? URL.createObjectURL(imgInput.files[0]) : jogos[editIndex].img;
        jogos[editIndex].desc = desc;
        jogos[editIndex].img = img;
        renderJogos();
        this.classList.add('hidden');
        editIndex = null;
      }
    };
    document.getElementById('cancel-edit').onclick = function() {
      document.getElementById('form-editar-jogo').classList.add('hidden');
      editIndex = null;
    };
  </script>
</body>
</html>
