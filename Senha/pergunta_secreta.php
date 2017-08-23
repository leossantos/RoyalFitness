<html>
<head>
<title>Pergunta Secreta</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/estilo.css">
<meta name="viewport" content="width=device-width">
</head>
<body>
<div class="container">
<div class="jumbotron">
<h3>Responda sua pergunta secreta</h3>
<form action="mostrar_senha.php" method="post" enctype="multipart/form-data" name="formmostar">
<?php
// inclui o arquivo de configuração do sistema
include "../Config/config_sistema.php";

// recebe dados do formulario
$login = ($_POST['login']);

// faz consulta no banco de dados
$consulta = mysql_query("select * from usuarios where login = '$login'");

// imprime a pergunta do usuario
while($linha = mysql_fetch_object($consulta)) {
	

?>
       <fieldset>
<legend><?php echo "<h4>".$linha->pergunta."?</h4>";
}?></legend>
         <div class="form-group">
<label for="resposta">Resposta</label>
<input type="text" class="form-control" id="resposta" name="resposta" >
</div>
   
        
          <div class="form-group">
<label for="login">Login</label>
<input type="text" class="form-control" id="login" name="login" value="<?php echo $login;?>">
</div>
</fieldset>
        
          <button type="submit" id="cadastrar" name="cadastrar" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-ok"></span>
</button>
          
</form>
</body>
</html>
