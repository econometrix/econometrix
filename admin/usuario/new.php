<?php
include_once "../../config/ini.php";
include_once"../../includes/util.php";

$util = new  Util();
$util->conectar();

if(isset($_POST['cmd']) && $_POST['cmd']== 'new'){
	$sql = "INSERT INTO ".MYSQL_BASE_USUARIOS." (nome, apelido, email, senha, status, created_at, updated_at)
							VALUES ('".$_POST['nome']."', '".$_POST['apelido']."', '".$_POST['email']."',
							'".$_POST['senha']."', ".$_POST['status'].", NOW(), NOW())";
	$res = mysql_query($sql);
	if($res){
		echo '<script language="JavaScript">
			location.href="index.php"
		  	</script>';
	}else{
		'Erro : '.mysql_error();
	}
}
?>


<div>
<h2>Adicionar Usu&aacute;rio</h2>
</div>

<form method="post" id="form" action="new.php">
<div>
<p>
<label>Nome<span>(Necessario)</span></label>
<input name="nome" type="text" >
</p>
<p>
<label>Apelido<span>(Necessario)</span></label>
<input name="apelido" type="text" >
</p>
<p>
<label>E-mail<span>(Necessario)</span></label>
<input name="email" type="text" >
</p>

<p>
<label>Senha<span>(Necessario)</span></label>
<input name="senha" type="password" >
</p>
<p>
<p>
<label>Status : <span>(Necessario)</span></label>
<input type="radio" name="status" value="1" checked> Ativar
<input type="radio" name="status" value="0"> Desativar<br>
</p>
</div>
<div>
<input name="cmd" type="hidden" value="new">
<input name="submit" type="submit" value="Concluir">
<input type="button" value="Voltar" onclick="javascript: history.go(-1)">
</div>
</form>