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
	public function getDesativado() {
       return $this->desativado;
	}
	
	public function setDesativado($desativado) {
       $this->desativado = $desativado;
    }	

    public function getAtivado() {
       return $this->ativado;
	}
	
	public function setAtivado($ativado) {
       $this->ativado = $ativado;
    }
	//TODO - end
	
	
	//TODO: aplicar em um model
	public function getId() {
       return $this->id;
	}
	
	public function setId($id) {
       $this->id = $id;
    }	

    public function getNome() {
       return $this->nome;
	}
	
	public function setNome($nome) {
       $this->nome = $nome;
    }
	
    public function getApelido() {
       return $this->apelido;
	}
	
	public function setApelido($apelido) {
       $this->apelido = $apelido;
    }

    public function getEmail() {
       return $this->email;
	}
	
	public function setEmail($email) {
       $this->email = $email;
    }

	public function getSenha() {
       return $this->senha;
	}
	
	public function setSenha($senha) {
       $this->senha = $senha;
    }

    public function getStatus() {
       return $this->status;
	}
	
	public function setStatus($status) {
       $this->status = $status;
    }

    public function getCreated_at() {
       return $this->created_at;
	}
	
	public function setCreated_at($created_at) {
       $this->nome = $created_at;
    }

    public function getUpdated_at() {
       return $this->updated_at;
	}
	
	public function setUpdated_at($updated_at) {
       $this->updated_at = $updated_at;
    }

	//TODO - end

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
				$this->setId($row['id']);
				$this->setNome($row['nome']);
				$this->setApelido($row['apelido']);
				$this->setEmail($row['email']);
				$this->setSenha($row['senha']);

				if($row['status'] == 1){
					$this->setAtivado('checked');
				}else{
					$this->setDesativado('checked');
				}
				
			}
			}else{
				'Erro : '.mysql_error();
			}
			
			return $this;
   }
}