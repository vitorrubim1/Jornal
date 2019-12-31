<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="postar.php">Postar</span></a>
                </li>

                <li class="nav-item">
                    <!--BOTÃO QUE ABRE O MODAL-->
                    <a class="nav-link" id="Login" data-toggle="modal" data-target="#modal">
                        Login
                    </a>
                    <!-------------------------->

                    <!--MODAL DE LOGIN-->
                    <?php require_once 'include/modalLogin.php' ?>
                    <!------------------>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Noticías
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropDown">
                        <a class="dropdown-item" href="#">Futebol</a>
                        <a class="dropdown-item" href="#">Política</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Geral</a>
                    </div>
                </li>

            </ul>
                <button class="btn btn-dark rounded-circle" id="btPerfil">EU</button>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown"></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="atualizaUsuario.php">Atualizar perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Sair</a>
                    </div>
                </li>


        </div>
    </nav>
    <hr>

    <script src="jquery/jquery.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="css/bootstrap.css" />
</body>

</html>