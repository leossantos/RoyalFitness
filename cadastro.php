<?php
$cabecalho_title = "Cadastro";
include("cabecalho.php");
?>
<div class="container">
<div class="jumbotron">


<form method="POST" action="cadastrando.php" enctype="multipart/form-data">
<fieldset>

<legend>O que você é?</legend>
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="tipo" id="usuario" autocomplete="off" checked> Usuario
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="tipo" id="personal trainer" autocomplete="off"> Personal Trainer
  </label>
</div>
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="sexo" id="Masculino" autocomplete="off" value="Masculino" checked>Masculino
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="sexo" id="Feminino" autocomplete="off" value="Feminino"> Feminino
  </label>
</div>
</fieldset>
<br>
<fieldset>
<legend>Dados Cadastrais </legend>
<h5 class="aviso">* Obrigatório a resposta</h5>
<div class="form-group">
<label for="login">Login<span class="aviso">*</span></label>
<input type="text" class="form-control" id="login" name="login">
</div>
<div class="form-group">
<label for="senha">Senha<span class="aviso">*</span></label>
<input type="password" class="form-control" id="senha" name="senha" required>
</div>
<div class="form-group">
<label for="nome">Nome completo<span class="aviso">*</span></label>
<input type="text" class="form-control" id="nome" name="nome" required>
</div>
<div class="form-group">
<label for="email">Email<span class="aviso">*</span></label>
<div class="input-group">
<span class="input-group-addon">@</span>
<input type="email" class="form-control" id="email" name="email" required>
</div>
</div>
<div class="form-group">
<label for="datanascto">Data de Nascimento</label>
<div class="input-group">
<span class="  glyphicon glyphicon-calendar input-group-addon"></span>
<input type="date" name="datanascto" id="datanascto"class="form-control "  data-mask="99/99/9999" />
</div>
</div>
<div class="form-group">
<label for="pergunta">Pergunta Secreta<span class="aviso">*</span></label>
<input type="text" class="form-control" id="pergunta" name="pergunta" requires>
</div>
<div class="form-group">
<label for="resposta">Resposta <span class="aviso">*</span></label>
<input type="text" class="form-control" id="resposta" name="resposta" required>
</div>

</fieldset>
<br>
<button type="submit" id="cadastrar" name="cadastrar" class="btn btn-lg btn-primary">
<span class="glyphicon glyphicon-ok"></span>
</button>
</form>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/inputmask-plugin.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>