<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

// faz consulta no banco
$consulta = mysql_query("select * from usuarios where Login = '$login_usuario'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {
	color: #000000;
	font-weight: bold;
}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
.style5 {color: #000000}
.style7 {font-size: 12px}
-->
</style>
</head>

<body>
<form action="atualizar_dados.php" method="post" enctype="multipart/form-data" name="formatualizar">
<table width="628" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="173" height="30">&nbsp;</td>
    <td width="61">&nbsp;</td>
    <td width="252">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr>
    <td height="45">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><span class="style1">Dados do usuario</span> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" valign="middle">
<?php
while($linha = mysql_fetch_object($consulta)) {
	echo "<b>Ol� ".$linha->login."!</b>";
?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top" class="style3"> Dados do usu&aacute;rio | <a href="mudar_senha.php" class="style3">Mudar senha</a> | <a href="../logout.php" class="style3">Logout</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="24"></td>
    <td colspan="4" valign="top"><p><span class="style5"><span class="style4">Aten&ccedil;&atilde;o:</span></span><span class="style3"> Altere apenas os dados que voc&ecirc; dezeja modificar! <br />
    </span></p></td>
    <td></td>
  </tr>
  <tr>
    <td height="150"></td>
    <td colspan="4" valign="top">
	  <table width="100%" border="2" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
	    <!--DWLayoutTable-->
	    
	    
	    <tr>
	      <td width="136" height="24" align="right" valign="middle" bgcolor="#000000" class="style2">E-mail:</td>
            <td colspan="3" valign="middle" bgcolor="#CCCCCC"><label for="label2"></label>
            <input name="email" type="text" id="label2" value="<?php echo $linha->email;?>" size="40" maxlength="200" /></td>
          </tr>
	    <tr>
	      <td height="24" align="right" valign="middle" bgcolor="#000000" class="style2">Pergunta</td>
            <td colspan="3" valign="middle" bgcolor="#CCCCCC"><label for="label3"></label>
            <input name="pergunta" type="text" id="label3" value="<?php echo $linha->pergunta;?>" /></td>
          </tr>
	    <tr>
	      <td height="24" align="right" valign="middle" bgcolor="#000000" class="style2">Resposta:</td>
            <td colspan="3" valign="middle" bgcolor="#CCCCCC"><label for="label4"></label>
            <input name="resposta" type="text" id="label4" value="<?php echo $linha->resposta;?>" /></td>
          </tr>
	 
	    <tr>
	      <td height="24">&nbsp;</td>
            <td width="15">&nbsp;</td>
            <td width="66" valign="top"><label for="Submit"></label>
            <input type="submit" name="atualizar" value="Atualizar" id="atualizar" /></td>
            <td width="179">&nbsp;</td>
          </tr>
	    <?php
}
?>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="47"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</form>
</body>
</html>
