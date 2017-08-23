<?php
// inclui o arquiv o de configuração do sistema
include "Config/config_sistema.php";
// revebe dados do formulario
$login = ($_POST['login']);
$senha = ($_POST['senha']);

// verifica se o usuario existe
$consulta = mysql_query("select * from usuarios where login='$login'");
$campos = mysql_num_rows($consulta);
if($campos != 0) {
// se o usuario existi verifica a senha dele
	if($senha != mysql_result($consulta,0,"Senha")) {
		echo "<font color=red><b>
			  Senha incorreta!
			  </font></b>";
		exit;
	} else {
		// estiver tudo certo vamos ver se ele é o administrador
		
		
			// se o login não for do administrado vamos criar a sessão dele
			session_start();
			$_SESSION['login_usuario'] = $login;
			$_SESSION['senha_usuario'] = $senha;
			
			// redireciona o link para uma outra pagina
			header("Location: Usuario/minhaconta.php");
		
	}
} else {
	echo "<font color=red><b>
		  O usuario não existe!
		  </font></b>";
	exit;
}
?>