<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <!--TINYMCE-->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: "textarea", // change this value according to your HTML
      plugins: "autoresize",
      autoresize_on_init: false,
      max_height: 500,
    });
  </script>
</head>
<?php

  require_once 'php/conexao.php';

  $sql = "SELECT * FROM usuario where idUsuario = 3";
  $buscar = mysqli_query($conexao, $sql);
  while ($listar = mysqli_fetch_array($buscar)) {
    //aq vai ter q pegar o id do jornalista
    $nome = $listar['nomeUsuario'];
  }
?>

<body>

  <div class="container">
    <?php require_once 'include/navbar2.php' ?>


    <div class="jumbotron">
      <h1 class="display-4 text-center">Olá, Jornalista <?php echo $nome; echo "!"; ?></h1>
      <p class="lead text-center">Para fazer publicação de uma notícia é simples, bastar preencher todos os campos corretamente. </p>
      <hr class="my-4">

      <form action="php/processaNoticia.php" method="post">
        <div class="container">
          <div class="form-group">

            <h5>NOS INFORME SOBRE O TÍTULO DA NOTÍCIA</h5>
            <textarea name="titulo" cols="10" rows="10"></textarea>
            <br>

            <h5>AGORA, O SUBTÍTULO :)</h5>
            <textarea name="subtitulo" cols="30" rows="5"></textarea> <br>
            <hr class="my-4">


            <h5>SELECIONE O ASSUNTO DA NOTÍCIA</h5>
            <select class="form-control" name="assunto">
              <option value="futebol">FUTEBOL</option>
              <option value="politica">POLÍTICA</option>
              <option value="outros">OUTROS</option>
            </select>
          </div> <br>

          <h5>FOTO DA NOTÍCIA</h5>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" name="imagem" class="custom-file-input">
              <label class="custom-file-label">Escolha uma foto :)</label>
            </div>
          </div>

        </div>
        <hr class="my-5">
        <div style="margin-top: 10px; margin-left: 85%;">
          <input type="submit" class="btn btn-primary btn-lg" value="PUBLICAR">
        </div>
    </div> <br><br>
    </form>
  </div>
  <?php require_once 'include/footer.php' ?>



  <script>
    tinymce.init({

    });
  </script>
  <!--  Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>