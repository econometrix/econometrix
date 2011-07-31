<?php
include_once "../../config/ini.php";
include_once"../../includes/util.php";

$util = new  Util();
$util->conectar();

$sql="DELETE FROM ".MYSQL_BASE_USUARIOS." WHERE id = ".$_GET['id'];
$query = mysql_query($sql);

$res = mysql_query($sql);

if($res){
	echo '<script language="JavaScript">
			location.href="index.php"
		  </script>';
	}else{
		'Erro : '.mysql_error();
	}

