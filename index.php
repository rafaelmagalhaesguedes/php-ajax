<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Controle Usuários</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Info -->
    <meta name="keywords" content="HTML5, CSS3, PHP, Javascript, Jquery, AJAX, Bootstrap 4, CRUD">
    <meta name="description" content="CRUD PHP AJAX JQUERY MYSQL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael M.">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">CRUD</a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cadastrar</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>
    
    <div class="container">
        <div class="row m-3">

            <div class="col-sm-3 mb-4">
                <!-- Formulário de criação/atualização -->
                <h2>Cadastrar</h2>
                <form>
                    <div class="form-group">
                        <input type="hidden" id="id" class="form-control">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control">
                    </div>
                    
                    <button class="btn btn-primary" type="button" onclick="salvarUsuario()">Salvar</button>
                    <button class="btn btn-primary"  type="button" onclick="limparFormulario()">Limpar</button>
                </form>
            </div>
            <div class="col-sm-8">
                <!-- Lista de usuários -->
                <h2>Lista de Usuários</h2>
                <table class="table table-sm table-bordered" id="tabela-usuarios">
                    <!-- Os usuários serão carregados aqui via AJAX -->
                </table>
            </div>

        </div><!-- fim row -->
    </div><!-- fim container-fluid -->

    <!-- Scripts JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
