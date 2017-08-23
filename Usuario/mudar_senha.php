<?php
include "../validar_session.php";

include "../Config/config_sistema.php";
$cabecalho_title = "Senha";
include("cabecalho.php");
// faz consulta no banco
$consulta = mysql_query("select * from usuarios where login = '$login_usuario'");
?>
<div class="container">
<div class="jumbotron">

<form action="alterar_senha.php" method="post" enctype="multipart/form-data" name="form_mudar_senha">

<?php
while($linha = mysql_fetch_object($consulta)) {
	echo "<h4>Olá ".$linha->login."!</h4>";
}
?>
<br>
<h3 class="aviso">Atenção</h3>
<h4>Insira apenas sua nova senha</h4>
<div class="form-group">
<label for="senha">Nova senha</label>
<input type="password" class="form-control" id="senha" name="senha" required>
</div>
<div class="form-group">
<label for="senha">Repita a senha</label>
<input type="password" class="form-control" id="rep_senha" name="rep_senha" required>
</div>
            <button type="submit" id="alterar" name="alterar" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-ok"></span>
</button>
            
         
</form>
</div>
</div>
</body>
</html>
