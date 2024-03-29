<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="imagens/icons-carro.png">

    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <header>
        <div class="content">
            <nav>
                <div class="topo-site">
                    <a class="titulo" href="index.php">AudiCar</a>
                </div>
                <ul>
                    <li><a href="index.php" class="nav-link" ></a></li>
                    <li><a href="?page=catalogo" class="nav-link" >Catálogo completo</a></li>
                    <li><a href="?page=vercarros" class="nav-link">Editar catálogo</a></li>
                    <li><a href="?page=cadastro" class="nav-link">Cadastrar novo veículo</a></li>

                    <button><a href="?page=acesso" class="nav-link" >Login</a></button>
                    <button><a href="logout.php" class="nav-link" >Sair</a></button>
                </ul>
            </nav>
            <div class="header-block">
                <div class="text">
                    <h2>O carro perfeito para você</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia,
                        asperiores?
                    </p>
                </div>
                <img src="imagens/car-header.png" alt="Car" />
            </div>
        </div>
    </header>

    <div class="container custom-mt">
        <div class="row">
            <div class="col mt-4">
                <?php
                $paginaParaCarregar = $_GET["page"] ?? "nada em page";

                include("config.php");
                switch ($paginaParaCarregar) {
                    case "atuarNoBanco":
                        include("atuarNoBanco.php");
                        break;
                    case "cadastro":
                        include("cadastro.php");
                        break;
                    case "vercarros":
                        include("vercarros.php");
                        break;
                    case "edicao":
                        include("edicao.php");
                        break;
                    case "exclusao":
                        include("exclusao.php");
                        break;
                    case "politicacookies":
                        include("politicacookies.php");
                        break;
                    case "catalogo":
                        include("catalogo.php");
                        break;
                    case "acesso":
                        include("acesso.php");
                        break;
                        case "logout":
                            include("logout.php");
                            break;
                    default:
                        include("boasvindas.php");
                }
                ?>
            </div>
        </div>
    </div>

</body>

<footer>
    <div class="main">
        <div class="content footer-links">
            <div class="footer-social">
                <h4>Redes Sociais</h4>
                <div class="social-icons">
                    <img src="imagens/instagram.png" alt="Instagram" />
                    <img src="imagens/facebook.png" alt="Facebook" />
                </div>
            </div>
            <div class="footer-contact">
                <h4>Contatos</h4>
                <h6>+55 71 999999999</h6>
                <h6>audicar@caroline.martins.senai.com.br</h6>
                <h6>Nome da Rua, Salvador BA</h6>
            </div>
        </div>
    </div>
    <div class="last"><a class="last nav-link" href="?page=politicacookies">Audicar 2024 - Política de Cookies</a>
    </div>
</footer>

</html>