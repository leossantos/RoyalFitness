<html>
<head>
<title>Lembrar Senha</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/estilo.css">
<meta name="viewport" content="width=device-width">
</head>
<body>
<div class="container">
<div class="jumbotron">
<h2>Esqueceu a senha?</h2>
<h4>Não tem problema apenas digite seu login</h4>
<form action="pergunta_secreta.php" method="post" enctype="multipart/form-data" name="formlembrar" class="formlembrar">
<div class="form-group">
<label for="login">Login</label>
<input type="text" class="form-control" id="login" name="login">
</div>
       
         <button type="submit" id="lembrar" name="lembrar" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-ok"></span>
</button>
<a href="../index.php" class="">Voltar</a> 
         
</form>
</div>
</div>
</body>
</html>
