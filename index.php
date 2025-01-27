<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Cadastro</title>
  </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">CADASTRO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="nurse.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Usuarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        include_once 'C:\xampp\htdocs\ProjectPHP\DAL\conexao.php';
                        switch(@$_REQUEST["page"])
                        {
                            case "novo":
                                include("novo-usuario.php");
                            break;
                            case "listar":
                                include("listar-usuario.php");
                            break;
                            case "salvar":
                                include("salvar-usuario.php");
                            break;
                            case"editar";
                                include("editar-usuario.php");
                            default:
                            print "<h1>Cadastro concluído com sucesso!</h1>";
                        }
                    ?>


                </div>

            </div>

        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>