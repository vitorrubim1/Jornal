<!doctype html>
<html lang="pt-br">

<head>
    <title>ATUALIZAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
require_once 'php/conexao.php';

//QUERY DE SELECT, PARA MOSTRAR INFORMAÇOES PARA PODER ATUALIZA-LA
$sql = "SELECT * FROM usuario where idUsuario = 1";
$buscar = mysqli_query($conexao, $sql);
while ($listar = mysqli_fetch_array($buscar)) {
    $nome = $listar['nomeUsuario'];
    $email = $listar['email'];
    $cpf = $listar['cpf'];
    $senha = $listar['senha'];
    $imagem = $listar['imagem'];
}
?>

<body>
    <div class="container">
        <br>
        <h3>
            Olá <?php echo $nome ?>, faça as alterações que você ache necessária
            <small class="text-muted">(algumas serão visíveis) </small>
        </h3>
        <br>

        <div>
            <!--FOTO ATUAL-->
            <img id="imagemUpdate" class="rounded-circle" src="imagensUpadas/<?php echo $imagem ?>">
        </div> <br>
        <ul class="list-group">
            <form action="php/processaAtualiza.php" method="post">
                <li class="list-group-item">
                    <label>SEU NOME</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $nome  ?>">
                </li>
                <li class="list-group-item">
                    <label>SEU EMAIL</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </li>
                <li class="list-group-item">
                    <label>SUA SENHA</label>
                    <input type="text" class="form-control" name="senha" value="<?php echo $senha ?>">
                </li>
                <li class="list-group-item">
                    <label>CPF</label>
                    <input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>">
                </li>
                <li class="list-group-item">

                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <label class="custom-file-label">ALTERE TAMBÉM, A FOTO </label>
                            <input type="file" name="imagem" class="custom-file-input">
                        </div>
                    </div>

                </li>
        </ul><br>
        <button type="submit" class="btn btn-outline-primary block" id="btnAtualizar"> Atualizar</button> <br>

        </form>

        <a class="btn btn-outline-secondary" id="btnVoltar" href="index.php"> Voltar</a> <br><br>

    </div>


    <!-- Bootstrap JS -->]
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/script.js">

    </script>
</body>

</html>