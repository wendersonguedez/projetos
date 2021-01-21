<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" ">
    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <div class=" container">
    <div class="linha">
        <div class="coluna">
            <h1>Edição de Cadastro</h1>
            <form action="script-cadastro.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">NOME COMPLETO</label>
                    <input type="text" class="form-control" placeholder="" name="nome" required value="">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">ENDEREÇO</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">TELEFONE</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="dtnascimento" class="form-label">DATA DE NASCIMENTO</label>
                    <input type="date" class="form-control" name="dtnascimento">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" value="Salvar Alterações">
                </div>
            </form>
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