<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
</head>
<body>

<div class="container">

<h1>Cadastrar Autores</h1>

<form class="row g-3" action="cadastrar_autores_script.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>

  <div class="col-12">
    <a href="listar_autores.php" button type="submit" class="btn btn-primary">Listar</button></a>
  </div>
</form>

</div>
    
</body>
</html>