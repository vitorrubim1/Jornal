<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <h2>
        AQUI A NOTÍCIA VAI TER UM TITULO COM TEXTO MAÍUSCULO, COM NÚMERO DE CARACTERS LIMITADO E UMA FONTE
        ESTILO NEW YORK TIMES :)
    </h2>
    <div class="noticias"><br>
        <div class="card border-primary mb-3 " id="card" style="max-width: 70rem;">

            <!--TÍTULO DA POSTAGEM EM SI, TEMA-->
            <div class="card-header text-dark">
                <h4 class="card-title"> Paulista terá queima de fogos de artifício silenciosos </h4>
            </div>
            <!----------------------------------->

            <!--CORPO DA NOTICÍA, IMAGEM..-->
            <div class="card-body text-dark">

                <img src="img/fogos.jpg" class="img-fluid">

                <small>
                    <caption>Autor: Vitor Rubim Passos</caption><br>
                    <caption>Data de postagem: 15/12/2019</caption>
                </small>
            </div>

        </div>

        <!-- REACTION AND COMMENT -->
        <div class="btnscoment">
            <!--LIKE E DESLIKE-->
            <div class="btn-group btn-group-md" id="reaction" role="group">
                <form action="php/processaReacao.php" method="post">
                    <button type="submit" name="positivo" id="like" class="btn btn-outline-primary my-2 ">Gostei :)</button>
                    <button type="submit" name="negativo" id="dislike" class="btn btn-outline-danger my-2 ">Não Gostei :(</button>
                </form>
                    <button class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="top:-46px; left: 215px">
                        Comentar ...
                    </button>

            </div>
       
            <!--ARÉA DE COMENTÁRIO-->
            <div class="collapse" id="collapseExample">
                <div class="card-body">
                    <form action="php/processaComentario.php" method="post">
                        <h5 style="position:relative; left: 20px;">Faça um comentário sobre a noticía..</h5>
                        <textarea name="comentario" id="textearea" rows="3" style="resize:none;"></textarea>
                        <input type="submit" value="Comentar" style="position:relative; left:520px" class="btn btn-primary"><br>
                    </form>
                </div>
            </div>


        </div>
        


    </div>
    <!--o clear:both obrigamos o #NOTICIAS a se estender até este div-->
    <div class="clear"></div>
   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>