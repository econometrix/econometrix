<?php  
include_once "../../config/ini.php";
include_once"../../includes/util.php";

class UsuarioController{	
	private $util ;
	
	private $id;
	private $nome;
	private $apelido;
	private $email;
	private $senha;
	private $status;
	
	//TODO : aplicar em uma classe abstrata
	private $created_at;
	private $updated_at;
	//TODO - end
	private $ativado;
	private $desativado;
		
	public function __construct() {
		$this->conexao();
	}
	
	private function conexao(){
		$this->util = new  Util();
	    $this->util->conectar();
	}
	//TODO : aplicar em um helper
	public function get_desativado() {
       return $this->desativado;
	}
	
	public function set_desativado($desativado) {
       $this->desativado = $desativado;
    }	

    public function get_ativado() {
       return $this->ativado;
	}
	
	public function set_ativado($ativado) {
       $this->ativado = $ativado;
    }
	//TODO - end
	
	
	//TODO: aplicar em um model
	public function get_id() {
       return $this->id;
	}
	
	public function set_id($id) {
       $this->id = $id;
    }	

    public function get_nome() {
       return $this->nome;
	}
	
	public function set_nome($nome) {
       $this->nome = $nome;
    }
	
    public function get_apelido() {
       return $this->apelido;
	}
	
	public function set_apelido($apelido) {
       $this->apelido = $apelido;
    }

    public function get_email() {
       return $this->email;
	}
	
	public function set_email($email) {
       $this->email = $email;
    }

	public function get_senha() {
       return $this->senha;
	}
	
	public function set_senha($senha) {
       $this->senha = $senha;
    }

    public function get_status() {
       return $this->status;
	}
	
	public function set_status($status) {
       $this->status = $status;
    }

    public function get_created_at() {
       return $this->created_at;
	}
	
	public function set_created_at($created_at) {
       $this->nome = $created_at;
    }

    public function get_updated_at() {
       return $this->updated_at;
	}
	
	public function set_updated_at($updated_at) {
       $this->updated_at = $updated_at;
    }

	//TODO - end
	
	public function _index(){
		
	} 
	public function _new(){
		if(isset($_POST['cmd']) && $_POST['cmd']== 'new') {   
			$sql = "INSERT INTO ".MYSQL_BASE_USUARIOS." (nome, apelido, email, senha, status, created_at, updated_at)
									VALUES ('".$_POST['nome']."', '".$_POST['apelido']."', '".$_POST['email']."',
									'".$_POST['senha']."', ".$_POST['status'].", NOW(), NOW())";
        	$res = mysql_query($sql);		
			if($res){
				echo 'Inserido com sucesso!';
			}else{
				echo 'Erro : '.mysql_error();
			}
    	}  
	}	
	
	public function _edit($id){
		//retornando os dados para exibicao nos campos
		$this->_show($id);
		
		if(isset($_POST['cmd']) && $_POST['cmd']== 'edit'){
			$sql = "UPDATE ".MYSQL_BASE_USUARIOS." SET nome = '".$_POST['nome']."', apelido = '".$_POST['apelido']."',
			email ='".$_POST['email']."', senha = '".$_POST['senha']."', status = ".$_POST['status'].", 
			updated_at = NOW()  WHERE id =	".$id;
			$res = mysql_query($sql);
			if($res){
				echo 'Inserido com sucesso!';
				}else{
					'Erro : '.mysql_error();
				}
		}
	} 
	
   public function _show($id){
		$select='SELECT * FROM '.MYSQL_BASE_USUARIOS.' WHERE
				id = '.$id;
		$query = mysql_query($select);
		if($query){
			if(mysql_num_rows($query) > 0){
				$row = mysql_fetch_array($query);
				$this->set_id($row['id']);
				$this->set_nome($row['nome']);
				$this->set_apelido($row['apelido']);
				$this->set_email($row['email']);
				$this->set_senha($row['senha']);

				if($row['status'] == 1){
					$this->set_ativado('checked');
				}else{
					$this->set_desativado('checked');
				}				
			}
			}else{
				'Erro : '.mysql_error();
			}			
			return $this;
   }
}