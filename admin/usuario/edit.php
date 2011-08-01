<?php
include_once"controller/usuario_controller.php";
$usuario = new  UsuarioController();
$usuario->_edit($_REQUEST['id']);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Editar Usu&aacute;rio</title>
	<script type="text/javascript" src="../../public/js/jquery.min.js"></script>  
    <script type="text/javascript" src="../../public/js/jquery.validate.js"></script>  
    <script type="text/javascript">  
    $(document).ready(function(){  
        $('#ajax_form').validate({  
            rules: {  
                nome: { required: true, minlength: 2 },  
				apelido: { required: true, minlength: 2 }, 	
                email: { required: true, email: true },  
                senha: { required: true, minlength: 2 }, 
            },  
            messages: {  
                nome: { required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras' },  
				apelido: { required: 'Preencha o campo apelido', minlength: 'No mínimo 2 letras' },  
                email: { required: 'Informe o seu email', email: 'Informe um email válido' },  
                senha: { required: 'Preencha o campo senha', minlength: 'No mínimo 2 letras' },  
  
            },  
            submitHandler: function( form ){  
                var dados = $( form ).serialize();  
  
                $.ajax({  
                    type: "POST",  
                    url: "edit.php",  
                    data: dados,  
                    success: function()  
                    {  
                      alert('alterado');
					  location.href="index.php";
                    }  
                });  
  
                return false;  
            }  
        });  
    });  
    </script>
	
</head>

<body>

	<div>
	<h2>Alterar Usu&aacute;rio</h2>
	</div>

	<form method="post" id="ajax_form" action="">
	<div>
	<p>
	<label>Nome<span>(Necessario)</span></label>
	<input name="nome" type="text" value="<?php echo $usuario->get_nome();?>" >
	</p>
	<p>
	<label>Apelido<span>(Necessario)</span></label>
	<input name="apelido" type="text" value="<?php echo $usuario->get_apelido();?>">
	</p>
	<p>
	<label>E-mail<span>(Necessario)</span></label>
	<input name="email" type="text" value="<?php echo $usuario->get_email();?>">
	</p>

	<p>
	<label>Senha<span>(Necessario)</span></label>
	<input name="senha" type="password" value="<?php echo $usuario->get_senha();?>">
	</p>
	<p>
	<p>
	<label>Status : <span>(Necessario)</span></label>
	<input type="radio" name="status" value="1" <?php echo $usuario->get_ativado();?>> Ativado
	<input type="radio" name="status" value="0" <?php echo $usuario->get_desativado();?>> Desativado<br>
	</p>
	</div>
	<div>
	<input name="cmd" type="hidden" value="edit">
	<input type="hidden" name="id" value="<?php echo $usuario->get_id();?>" />
	<input name="submit" type="submit" value="Concluir">
	<input type="button" value="Voltar" onclick="javascript: history.go(-1)">
	</div>
	</form>

</body>
</html>
