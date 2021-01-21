<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" ">
    <title>Cadastro</title>
  </head>
  <body>
    <div class=" container">
    <div class="linha">
        <?php
        include "cnx.php";

        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $dtnascimento = $_POST['dtnascimento'];
        //recebendo as variaveis vindo do formulario atraves do metodo POST

        $sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `dtnascimento`) VALUES 
        ('$nome','$endereco','$telefone','$email','$dtnascimento')";
        //inserindo os dados para dentro do banco de dados

        if (mysqli_query($con, $sql)) {
            //enviando os dados para o banco de dados. requer os parametros de cnx e qual instrusão deseja passar.
            //$sql esta passando os valores inseridos e enviando para o banco de dados.
            msg("$nome foi cadastrado com sucesso!!", 'success');
        } else
            msg("$nome NÃO foi cadastrado!!", 'danger');


        ?>
        <a href="index.php" class="btn btn-primary">VOLTAR</a>
    </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    </body>

</html>