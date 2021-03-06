<?php
/*
Arquivo onde serao armazenados as fucoes de uso geral.

Autores : Custodio Neto e Rodrigo Vasconcelos

*/
include_once "../../config/ini.php";

class Util{
	private $qtd_reg_paginacao;
	private $ini_reg_paginacao;
	
	public function conectar(){
		$con = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);
		$bd = mysql_select_db(MYSQL_BASE, $con);
		
		return bd;
	}
	
	public function set_qtd_reg_paginacao($qtd_reg_paginacao){
		$this->qtd_reg_paginacao = $qtd_reg_paginacao;
	}
	
	public function get_qtd_reg_paginacao(){
		return $this->qtd_reg_paginacao ;
	}
	
	public function set_ini_reg_paginacao($ini_reg_paginacao){
		$this->ini_reg_paginacao = $ini_reg_paginacao;
	}
	
	public function get_ini_reg_paginacao(){
		return $this->ini_reg_paginacao ;
	}
	
	public function lista_paginacao($tabela, $pg){
		$this->set_qtd_reg_paginacao(3);
		if (!isset($pg)) {
			$pg = 0;
		}
		$this->set_ini_reg_paginacao($pg * $this->get_qtd_reg_paginacao());
		$query_paginacao = mysql_query("SELECT * FROM ".$tabela);
		$quantreg = mysql_num_rows($query_paginacao);

		return $quantreg ;
	}
	
	public function chama_paginacao($tabela, $pg){
		$quant_pg = ceil($this->lista_paginacao($tabela, $pg)/$this->get_qtd_reg_paginacao());
		$quant_pg++;
		if ( $pg > 0) {
			echo "<a href=".$PHP_SELF."?pg=".($pg-1) ."><b>&laquo;anterior</b></a>";
		}else {
			echo "<font color=#CCCCCC>&laquo;anterior</font>";
		}
		// Faz aparecer os numeros das p?gina entre o ANTERIOR e PROXIMO
		for($i_pg=1;$i_pg<$quant_pg;$i_pg++) {
		// Verifica se a p?gina que o navegante esta e retira o link do n?mero para identificar visualmente
			if ($pg == ($i_pg-1)) {
				echo "&nbsp;<span>$i_pg</span>&nbsp;";
			}else {
				$i_pg2 = $i_pg-1;
				echo "&nbsp;<a href=".$PHP_SELF."?pg=$i_pg2><b>$i_pg</b></a>&nbsp;";
			}
		}
		// Verifica se esta na ultima pagina, se nao estiver ele libera o link para pr?xima
		if (($pg+2) < $quant_pg) {
			echo "<a href=".$PHP_SELF."?pg=".($pg+1)."><b>pr&oacute;ximo&raquo;</b></a>";
		}else{
			echo "<font color=#CCCCCC>pr&oacute;ximo&raquo;</font>";
		}
	}

}