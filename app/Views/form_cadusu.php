<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>BBB os Big dos big</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url('UsuarioController')?>">BBB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('UsuarioController/telalogar')?>">Logar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('UsuarioController/cadastrar')?>">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('UsuarioController/recuperasenha')?>">Recupera Senha</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  

<div class="container">
<form  method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="login_usu" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Insira seu e-mail pessoal.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" name="senha_usu" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
</body>
</html>