<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" ">
    <title>Consulta de Usuários</title>
  </head>
  <body>
    <?php

    if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
    } else {
        $pesquisa = '';
    }
    //atribuindo à $pesquisa o POST['busca], senao exisitir, recebe vazio 

    include "cnx.php";
    //chamando a cnx com o banco

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
    //buscando os dados do banco de dados. LIKE é utilizado para buscar por uma determinada string 
    //dentro de um campo com valores textuais. podemos buscar os registros cujo 
    //NOME inicia com uma determinada palavra, ou contém um certo texto.

    $dados = mysqli_query($con, $sql);
    //recebe as tuplas que foram encontradas no banco de dados.
    ?>

    
    <div class=" container">
    <div class="linha">
        <div class="coluna">
            <h1>Consultar</h1>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex" action="consulta.php" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($linha = mysqli_fetch_assoc($dados)) {
                        //mysqli_fetch percorre o vetor e marca o proximo
                        $id = $linha['id'];
                        $nome = $linha['nome'];
                        $endereco = $linha['endereco'];
                        $telefone = $linha['telefone'];
                        $email = $linha['email'];
                        $dtnascimento = $linha['dtnascimento'];
                        //cada linha isso sera sobrescrito

                        echo "<tr>
                                <th scope='row'>$nome</th>
                                <td>$endereco</td>
                                <td>$telefone</td>
                                <td>$email</td>
                                <td>$dtnascimento</td>
                                <td><a href='editar.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
                                    <a href='#' class='btn btn-danger btn-sm'>Deletar</a>
                                </td>
                              </tr>";
                    };
                    ?>

                </tbody>
            </table>
            <a href="index.php" class="btn btn-info">Voltar para Tela Inicial</a>
        </div>
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