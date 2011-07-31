<?php
include_once "../../config/connection.php";

$select='SELECT * FROM usuario WHERE
		id = '.$_REQUEST['id'];
$query = mysql_query($select);

if($query){
	if(mysql_num_rows($query) > 0){
		$row = mysql_fetch_array($query);
		$id = $row['id'];
		$nome = $row['nome'];
		$apelido = $row['apelido'];
		$email = $row['email'];
		$senha = $row['senha'];
		$status = $row['status'];
		
		if($status == 1){
			$ativado = 'checked';
		}else{
			$desativado = 'checked';
		}
		
	}
	}else{
		'Erro : '.mysql_error();
	}
	
if(isset($_POST['cmd']) && $_POST['cmd']== 'edit'){
	$sql = "UPDATE usuario SET nome = '".$_POST['nome']."', apelido = '".$_POST['apelido']."',
	email ='".$_POST['email']."', senha = '".$_POST['senha']."', status = ".$_POST['status'].", updated_at = NOW()  WHERE id = ".$_POST['id'];
	
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
<h2>Editar Usuário</h2>
</div>

<form method="post" id="form" action="edit.php">
<div>
<p>
<label>Nome<span>(Necessario)</span></label>
<input name="nome" type="text" value="<?php echo $nome;?>" >
</p>
<p>
<label>Apelido<span>(Necessario)</span></label>
<input name="apelido" type="text" value="<?php echo $apelido;?>" >
</p>
<p>
<label>E-mail<span>(Necessario)</span></label>
<input name="email" type="text" value="<?php echo $email;?>">
</p>

<p>
<label>Senha<span>(Necessario)</span></label>
<input name="senha" type="password" value="<?php echo $senha;?>">
</p>
<p>
<p>
<label>Status : <span>(Necessario)</span></label>
<input type="radio" name="status" value="1" <?php echo $ativado;?>> Ativado
<input type="radio" name="status" value="0" <?php echo $desativado;?>> Desativado
</p>
</div>
<div>
<input name="cmd" type="hidden" value="edit">
<input name="id" type="hidden" value="<?php echo $id;?>">
<input name="submit" type="submit" value="Concluir">
<input type="button" value="Voltar" onclick="javascript: history.go(-1)">
</div>
</form>