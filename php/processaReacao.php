<?php

    //futuramente busca o id da noticia........

    $positivo = $_POST ['positivo'];
    $negativo = $_POST ['negativo'];

    //print_r($_POST);exit();

    if(isset ($positivo)){
        echo "O botão positivo foi pressionado";

        $sql = " ";
    }
    if(isset ($negativo)){
        echo "O botão negativo foi pressionado";
    }
?>