<?php
include_once"../../config/connection.php";

$sql="DELETE FROM usuario WHERE id = ".$_GET['id'];
$query = mysql_query($sql);

$res = mysql_query($sql);

if($res){
	echo '<script language="JavaScript">
			location.href="index.php"
		  </script>';
	}else{
		'Erro : '.mysql_error();
	}

