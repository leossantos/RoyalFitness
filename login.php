<?php
$cabecalho_title = "Entrar";
include("cabecalho.php")
?>
<div class="container">
<div class="jumbotron">
<form method="POST" action="logar.php" class="formlogin" >
<fieldset>
<legend>Entrar </legend>
      <div class="form-group">
<label for="login">Login</label>
<input type="text" class="form-control" id="login" name="login">
</div>
<div class="form-group">
<label for="senha">Senha</label>
<input type="password" class="form-control" id="senha" name="senha" required>
</div>
</fieldset>
<button type="submit" name="logar" value="Logar" id="logar" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-ok"></span>
</button>
   <a href="cadastro.php" class="cadas">Cadastre-se</a>
    
    <a href="Senha/lembrar_senha.php" class="">Esqueceu a senha?</a> 
    
</form>
</div>
</div>
</body>
</html>
