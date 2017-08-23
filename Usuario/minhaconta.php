<?php

include "../validar_session.php";
$cabecalho_title = "Minha Conta";
include ("cabecalho.php");
include ("../Config/config_sistema.php");

// faz consulta no banco
$consulta = mysql_query("select * from usuarios where login = '$login_usuario'");
?>




<div class="container">
<div class="jumbotron">
<form action="atualizar_dados.php" method="post" enctype="multipart/form-data" name="formatualizar">

<?php
while($linha = mysql_fetch_object($consulta)) {
	echo "<b>Olá ".$linha->login."!</b>";
?> 
    
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
<div class="form-group">
<label for="pergunta">Pergunta Segreta</label>
<input type="text" class="form-control" id="pergunta" name="pergunta" value="<?php echo $linha->pergunta;?>">
</div>
<div class="form-group">
<label for="resposta">Resposta</label>
<input type="text" class="form-control" id="resposta" name="resposta" value="<?php echo $linha->resposta;?>" >
</div>
             <button type="submit" id="atualizar" name="atualizar" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-ok"></span>
</button>
            <a href="mudar_senha.php" class="pull-right">Mudar senha</a> 
	    <?php
}
?>
      
</form>
</div>
</div>
</body>
</html>
