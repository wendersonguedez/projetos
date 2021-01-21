<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "test";
//parametros para fazer cnx com o banco de dados.

if ($con = mysqli_connect($server, $user, $pass, $bd)) {
    // echo "Conectado!";
} else
    echo "Erro!";
//mysqli_connect abre uma nova conexão com o servidor MySQL e recebe os parametros que fazem cnx com o banco.
//$con esta recebendo a cnx do banco e vai ser chamada na função mysqli_query para assim enviar os dados para a base.


function msg($texto, $tipo){
    echo "<div class='alert alert-$tipo' role='alert'>
                $texto
              </div>";
}
//função para exibir uma mensagem de aviso para o usuario
