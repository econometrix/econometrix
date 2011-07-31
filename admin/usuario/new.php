<?php
include_once "../../config/connection.php";

$sql = "INSERT INTO usuario (nome, apelido, email, senha, status, created_at, updated_at)
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
