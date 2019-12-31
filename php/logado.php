<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

<?php
    require_once 'php/conexao.php';

    //vendo se existe no BD
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT email, senha FROM usuario WHERE email = '$email' AND situacao = 'ativo' ";
    $buscar = mysqli_query($conexao, $sql);

    //para fazer a verificação de linhas existentes
    $total = mysqli_num_rows($buscar);

    while ($array = mysqli_fetch_array($buscar)) {

        if ($total > 0) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: ./index.php');
    }
    else {
        header('Location:../erro.php');
    }
    }
    ?>

</body>

</html>