<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

$email = htmlspecialchars($_POST['email']);
$pergunta = $_POST['pergunta'];
$resposta = $_POST['resposta'];


// verifica o email
if($email == "") {
	echo "Digite seu email!";
	exit;
}

// verifica o pais
if($pergunta == "") {
	echo "Digite o país de onde você mora!";
	exit;
}

// verifica o estado
if($resposta == "") {
	echo "Digite o estado de onde você mora!";
	exit;
}



// faz consulta para atualizar os dados
$sql = "update usuarios set email = '$email',pergunta = '$pergunta',resposta = '$resposta' where Login = '$login_usuario'";
$consulta = mysql_query($sql);

// verifica se foi atualizado os dados
if($consulta) {
	$msg = urlencode("Dados atualizados com sucesso!");
	header("Location: minhaconta.php?msg=$msg");
	exit;
} else {
	echo "<font color=red><b>
		  Não foi possivel atualizar os dados!<br>
		  Click <a href=dados_usuarios.php>aqui</a> para retornar!
		  </font></b>";
	exit;
}
?>