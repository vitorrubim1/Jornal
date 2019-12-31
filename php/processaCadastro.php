<?php
//INCLUINDO A CONEXÃO 
require_once 'conexao.php';

//BUSCANDO AS INFORMAÇÕES DO FORMULÁRIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$nivel = $_POST['nivel'];
$situacao  = "ativo";  //aqui eu já cadastro ele ativo, e com if vejo se permanece, só na hora de sair q altero


/*
    //PARA VER SE EXISTE USUARIO COM EMAIL EXISTENTE.
    $sql = "SELECT COUNT (*) FROM usuario WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($resultado);  //AQUI VAI RETORNAR 0 = Ñ EXISTE e 1 = EXISTE

    print_r($row) ; exit();

    if($row == 1){
       echo "
            <script>
                alert ('já exite Usuário com estas informações.');
                location.href = 'processaCadastro.php';
            </script>
            ";
    } 
    */


// Conexão com o banco de dados
require_once 'conexao.php';
// Se o usuário clicou no botão cadastrar efetua as ações	
$imagem = $_FILES["imagem"];
//print_r($imagem);exit;
//abaixo faço uma checagem para ver se o usuário não está enviando o campo file em branco, a chave "error" serve para sabermos os niveis de erros
if ($imagem["error"] == 4) { ?>
    <script>
        alert('Não envie em branco');
        location.href = '../index.php';
    </script>
<?php }
if ($imagem["error"] == 1) { ?>
    <script>
        alert('O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini'); //Ai teremos que alterar lá no php.ini meus camaradas, pesquisem e deem seus pulos
        location.href = '../index.php';
    </script>
    <?php }
//print_r($imagem);exit;
// Se a imagem estiver sido selecionada
if ($imagem["name"]) {
    // Largura máxima em pixels
    $largura = 2000;
    // Altura máxima em pixels
    $altura = 3000;
    // Tamanho máximo do arquivo em bytes
    $tamanho = 1000000; // coloquei 1 megabyte
    // Verifica se o arquivo é uma imagem através de uma função nativa do PHP preg_match, através de expressões regulares
    if (!preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext)) { ?>
        <script>
            alert('Ops! Isso não é uma imagem.');
            location.href = '../index.php';
        </script>
        <?php
    }

    // Pega as dimensões da imagem, criando um novo vetor através da função nativa getimagesize
    $dimensoes = getimagesize($imagem["tmp_name"]);
    //print_r($dimensoes);exit;
    //echo $dimensoes[0];exit;
    // Verifica se a largura da imagem é maior que a largura permitida
    if ($dimensoes[0] > $largura) {
        echo "A largura da imagem não deve ultrapassar " . $largura . " pixels";
    }
    // Verifica se a altura da imagem é maior que a altura permitida
    if ($dimensoes[1] > $altura) {
        echo "Altura da imagem não deve ultrapassar " . $altura . " pixels";
    }

    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if ($imagem["size"] > $tamanho) {
        echo "A imagem deve ter no máximo " . $tamanho . " bytes";
    } else {

        // Pega extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
        // Gera um nome único para a imagem, esse nome será criptografado em md5 (assim como poderia ser em sha1, preferi md5 porque não requer tanta segurança e o número de caracteres é menor que sha1), juntamente com o milesegundos que estou upando a imagem
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        // Caminho de onde ficará a imagem
        $caminho = "../imagensUpadas/" . $nome_imagem;
        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($imagem["tmp_name"], $caminho);

        $sql = "INSERT INTO usuario (nomeUsuario, email, senha, cpf, imagem, nivel, situacao) 
                VALUES ('$nome', '$email', '$senha', '$cpf', '$nome_imagem', '$nivel', '$situacao')";
        $upa = mysqli_query($conexao, $sql);

        //print_r($sql); exit();

        // Se os dados forem inseridos com sucesso, retorna essa mensagem
        if ($upa) { ?>
            <script>
                alert('Dados inseridos com sucesso.');
                location.href = '../index.php'; //e redireciono o usuario para a pagina inicial, se quiserem mandar pra listagem fiquem a vontade
            </script>
        <?php
        } else { ?>
            <script>
                alert('Deu merda!!!');
                location.href = '../index.php';
            </script>
<?php
        }
    }
}
?>