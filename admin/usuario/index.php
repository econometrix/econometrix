<?php
/*include_once "../../config/ini.php";
include_once"../../includes/util.php";

$util = new  Util();
$util->conectar();

function listar(){	
	global $util;
//	$util->lista_paginacao(MYSQL_BASE_USUARIOS, $_GET['pg']);

	$sql = "SELECT * FROM ".MYSQL_BASE_USUARIOS." ORDER BY id DESC LIMIT ".$util->get_ini_reg_paginacao().",". 	$util->get_qtd_reg_paginacao();
	$res = mysql_query($sql);
	if(mysql_num_rows($res) > 0){
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
			echo '<td><a href="edit.php?id='.$row['id'].'" class=ico edit>Editar</a>&nbsp;&nbsp;<a href="delete.php?id='.$row['id'].'" 	class=ico del>Deletar</a></td>';
			echo '</tr>';
		}	
	} else{
		return false;
	}	
} */
include_once"controller/usuario_controller.php";

$usuario = new  UsuarioController();
$user = $usuario->_list();
?>
<div>
	<div>&nbsp;</div>
	<div>
		<div>
			<div>
				<h2>Usu&aacute;rios</h2>
				<a href="new.php">Novo</a></div>
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
							<th width="110">A&ccedil;&otilde;es</th>
						</tr>
						
						<?php foreach($user as $u): ?>
							<tr>
							<td>&nbsp;</td>
							<td><h3><?= $u->get_nome();?></h3></td>
							<td><h3><?= $u->get_apelido();?></h3></td>
							<td><h3><?= $u->get_email();?></h3></td>
							<td><h3><?= $u->get_senha();?></h3></td>
							<td><h3><?= $u->get_status();?></h3></td>
							<td><h3><?= $u->get_created_at();?></h3></td>
							<td><h3><?= $u->get_updated_at();?></h3></td>
							<td><a href="edit.php?id=<?= $u->get_id();?>" class=ico edit>Editar</a>&nbsp;&nbsp;<a href="delete.php?id=<?= $u->get_id();?>" class=ico del>Deletar</a></td>
							</tr>
							<?php endforeach; ?>
							
					</table>
					<div align="center"><?php // $util->chama_paginacao(MYSQL_BASE_USUARIOS, $_GET['pg']);?></div>
				</div>
			</div>
		</div>
	</div>
</div>



