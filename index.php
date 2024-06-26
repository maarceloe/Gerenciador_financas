<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/scrollbar.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <title>Gerenciamento de Finanças</title>
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Gerenciamento de Finanças</h1>
        <button id="toggleModal">+ Nova Transação</button>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="total">
          <h2>SALDO</h2>
          <p id="saldo">R$ 0,00</p>
        </div>
        <div class="entradas-saidas">
          <div class="card entradas">
            <h3>Entradas</h3>
            <p id="entradas">R$ 0,00</p>
          </div>
          <div class="card saidas">
            <h3>Saídas</h3>
            <p id="saidas">R$ 0,00</p>
          </div>
        </div>
        <div class="historico">
          <h2>Histórico</h2>
          <ul id="historico-list"></ul>
        </div>
      </div>
    </main>
    <div class="modal-overlay" id="modal">
      <div class="modal">
        <h2>Nova Transação</h2>
        <input type="text" id="descricao" placeholder="Descrição" />
        <input type="number" id="valor" placeholder="Valor" />
        <input type="date" id="data" />
        <div class="botoes">
          <button class="cancelar" id="fecharModal">Cancelar</button>
          <button class="confirmar" onclick="adicionarTransacao()">
            Salvar
          </button>
        </div>
      </div>
    </div>

    <!-- Modal de confirmação de exclusão -->
    <div id="modalConfirmarExclusao" class="modal">
      <div class="modal-content">
        <p>Tem certeza de que deseja excluir esta nota?</p>
        <button id="confirmarExcluirNota">Confirmar</button>
        <button id="cancelarExcluirNota">Cancelar</button>
      </div>
    </div>

    <script src="assets/js/main.js"></script>
  </body>
</html>
