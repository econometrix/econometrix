<?php
include_once "../../config/connection.php";
include_once"../../includes/util.php";
$util = new  Util();

function listar(){
global $util;
$util->lista_paginacao('usuario', $_GET['pg']);

$sql = "SELECT * FROM usuario ORDER BY id DESC LIMIT ".$util->get_ini_reg_paginacao().",". $util->get_qtd_reg_paginacao();
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
		echo '<tr>';
		echo '<td>&nbsp;</td>';
		echo '<td><h3>'.$row['nome'].'</h3></td>';
		echo '<td><h3>'.$row['apelido'].'</h3></td>';
		echo '<td><h3>'.$row['email'].'</h3></td>';
		echo '<td><h3>'.$row['senha'].'</h3></td>';
		echo '<td><h3>'.$row['status'].'</h3></td>';
		echo '<td><h3>'.$row['created_at'].'</h3></td>';
		echo '<td><h3>'.$row['updated_at'].'</h3></td>';
		echo '<td><a href="edit.php?id='.$row['id'].'" class=ico edit>Editar</a>&nbsp;&nbsp;<a href="delete.php?id='.$row['id'].'" class=ico del>Deletar</a></td>';
		echo '</tr>';
	}		
}
?>
<div>
	<div>&nbsp;</div>
	<div>
		<div>
			<div>
				<h2>Usuários</h2>
				<a href="new.html">Novo</a></div>
				
				<div>
					<table width="100%" border="1" cellspacing="0" cellpadding="0">
						<tr>
							<th width="25">&nbsp;</th>
							<th>Nome</th>
							<th>Apelido</th>
							<th>E-mail</th>
							<th>Senha</th>
							<th>Status</th>
							<th>Criado</th>
							<th>Alterado</th>
							<th width="110">&nbsp;</th>
						</tr>
							<?php listar();?>
					</table>
					<div align="center"><?php  $util->chama_paginacao('usuario', $_GET['pg']);?></div>
				</div>
			</div>
		</div>
	</div>
</div>



