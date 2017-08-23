<?php 

$login = $_POST['login'];
$senha = ($_POST['senha']);
$email = $_POST['email'];
$nome = $_POST['nome'];
$tipo = $_POST ['tipo']; 
$sexo = $_POST ['sexo'];
$datanascto = date($_POST ['datanascto']);
$pergunta = $_POST ['pergunta'];
$resposta = $_POST ['resposta'];
$connect = mysql_connect('localhost','teste','teste');
$db = mysql_select_db('tcc');
if ($tipo=="personal trainer")
{
	$query_select = "SELECT login FROM personal WHERE login = '$login'";
}
else 
{
	$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
}
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";
 
        }else{
            if($logarray == $login){
 
				echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
                die();
 
				}else{
					if ($tipo=="personal trainer")
					{
					$query = "INSERT INTO personal (login,senha,nome,email,sexo,datanascto,pergunta,resposta) VALUES ('$login','$senha','$nome','$email','$sexo','$datanascto','$pergunta','$resposta')";
					$insert = mysql_query($query,$connect);
				}
						else{
						$query = "INSERT INTO usuarios (login,senha,nome,email,sexo,datanascto,pergunta,resposta) VALUES ('$login','$senha','$nome','$email','$sexo','$datanascto','$pergunta','$resposta')";
						$insert = mysql_query($query,$connect);
						}
						if($insert){
						echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
							}else{
							echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
							}
            }
        }
?>