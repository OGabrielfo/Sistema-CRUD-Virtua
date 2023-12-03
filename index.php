<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Produtos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=novo">Novo Produto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Listar Produtos</a>
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-produto.php");
                    break;
                    case "listar":
                        include("listar-produtos.php");
                    break;
                    case "editar":
                        include("editar-produtos.php");
                    break;
                    case "actions":
                        include("actions.php");
                    break;
                    default:
                        print "<h1 class='align-middle text-center'>Olá, seja bem vindo!</h1>";
                        print "<div class='btn-group mt-4 d-flex justify-content-center' role='group'><button onclick=\" location.href='?page=novo' \"  class=\"btn btn-primary\">Cadastrar</button>";
                        print "<button onclick=\" location.href='?page=listar' \"  class=\"btn btn-secondary\">Listar produtos</button></div>";
                }
            ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>