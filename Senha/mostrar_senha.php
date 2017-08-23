<html >
<head>
<meta charset="utf8" />
<title>Meus Dados</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/estilo.css">
<meta name="viewport" content="width=device-width">
</head>

<body>
<div class="container">
<div class="jumbotron">
<h1>Dados</h1>
<h3>Esses são seus dados?</h3>
<form action="../logar.php" method="post" enctype="multipart/form-data" name="form_mostra_senha">

   <a href="../index.php" class="style1">Home</a>

   <?php
// inclui o arquivo de configura褯 do sistema
include "../Config/config_sistema.php";

// recebe dados do formulario
$login = htmlspecialchars($_POST['login']);
$resposta = htmlspecialchars($_POST['resposta']);

// faz consulta no banco de dados
$consulta = mysql_query("select * from usuarios where login = '$login'");

// imprime dados do usuario
while($linha = mysql_fetch_object($consulta)) {
	// verifica se a resposta 顶erdadeira
	if($resposta == $linha->resposta) {
?>
<div class="form-group">
<label for="login">Login</label>
<input type="text" class="form-control" id="login" name="login" value="<?php echo $linha->login;?>">
</div>
<div class="form-group">
<label for="senha">Senha</label>
<input type="text" class="form-control" id="senha" name="senha" value="<?php echo $linha->senha;?>">
</div>
	
       <div class="form-group">
<label for="email">Email</label>
<div class="input-group">
<span class="input-group-addon">@</span>
<input type="email" class="form-control" id="email" name="email" value="<?php echo $linha->email;?>">
</div>
</div>
         
            <div class="form-group">
<label for="nome">Nome completo</label>
<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $linha->nome;?>">
</div>
           
     <button type="submit" id="logar" name="logar" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-ok"></span>
</button>    
<?php
	} else {
		echo "<font color=red><b>
			  Sua resposta esta errada!
		  	</font></b>";
		exit;
	}
}
?>	
</form>
</div>
</div>
</body>
</html>
