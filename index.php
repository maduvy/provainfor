<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col">
           <h1>Cadastre-se</h1>
           <form action="cad.php" method="post">
             <div class="mb-3">
    <label for="nome" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" name="nome">
    
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control"name="email">
    
    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha"><br>

    <input type="submit" class="btn btn-success">
    
             </div>
        </div>
    </div>
  </div>
</body>
</html>