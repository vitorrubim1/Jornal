<!doctype html>
<html lang="pt-br">

<head>
    <title>CADASTRO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!--NAVBAR-->
    <?php require_once 'include/navbar2.php' ?>
    <!---------->
    <div class="container">
        <div class="fundo">
            <h1 class="text-center">Formulário de Cadastro</h1>
            <br>
            <form action="php/processaCadastro.php" method="post" enctype="multipart/form-data">
                <label>Nome:</label>
                <input type="text" placeholder="Nos informe seu nome:" name="nome" class="form-control form-control-sm"> <br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" placeholder="Digite um Email válido">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Senha</label>
                        <input type="password" class="form-control form-control-sm" name="senha" placeholder="Digite uma boa Senha">
                        <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
                    </div>
                </div>

                <label>CPF</label>
                <input type="number" placeholder="Qual seu CPF:" name="cpf" class="form-control form-control-sm"><br>

                <label>Foto</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <label class="custom-file-label">Escolha uma foto :)</label>
                        <input type="file" name="imagem" class="custom-file-input form-control-sm">
                    </div>
                </div>

                <label> O que você será?</label>
                <select class="form-control form-control-sm" name="nivel">
                    <option value="JORNALISTA">JORNALISTA</option>
                    <option value="USUARIO">USUÁRIO</option>
                </select>

                <input type="submit" class="btn btn-primary btn-sm " value="Cadastrar" style="margin-left: 450px; position:relative; top: 10px;">
            </form>
        </div>
    </div><br>

    <?php require_once 'include/footer.php' ?>


    <!--pra mostrar a senha-->
    <script>
          document.getElementById('olho').addEventListener('mousedown', function() {
            document.getElementById('pass').type = 'text';
        });

        document.getElementById('olho').addEventListener('mouseup', function() {
            document.getElementById('pass').type = 'password';
        });

        // Para que o password não fique exposto apos mover a imagem.
        document.getElementById('olho').addEventListener('mousemove', function() {
            document.getElementById('pass').type = 'password';
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</body>

</html>