<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_Model {
	// Variável que define o nome da tabela
	var $table = "";
	/**
	* Seta o banco de dados
	*/
	function setDatabase($nome_banco){
		$specific['dsn'] = '';
		$specific['hostname'] = 'localhost';
		$specific['username'] = 'root';
		$specific['password'] = '1234';
		$specific['database'] = $nome_banco;
		$specific['dbdriver'] = 'mysqli';
		$specific['dbprefix'] = '';
		$specific['pconnect'] = FALSE;
		$specific['db_debug'] = (ENVIRONMENT !== 'production');
		$specific['cache_on'] = FALSE;
		$specific['cachedir'] = '';
		$specific['char_set'] = 'utf8';
		$specific['dbcollat'] = 'utf8_general_ci';
		$specific['swap_pre'] = '';
		$specific['encrypt'] = FALSE;
		$specific['compress'] = FALSE;
		$specific['stricton'] = FALSE;
		$specific['failover'] = array();
		$specific['save_queries'] = TRUE;
		$this->db = $this->load->database($specific, TRUE);
	}
	/**
	* Método Construtor
	*/
	function __construct() {
		parent::__construct();
	}
	/**
	* Insere um registro na tabela
	*
	* @param array $data Dados a serem inseridos
	*
	* @return boolean
	*/
	function Inserir($data) {
		if(!isset($data))
			return false;
		return $this->db->insert($this->table, $data);
	}
	/**
	* Recupera um registro a partir de um ID
	*
	* @param integer $id ID do registro a ser recuperado
	*
	* @return array
	*/
	function GetById($id) {
		if(is_null($id))
			return false;
		$this->db->where('id', $id);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}
	/**
	* Recupera um registro a partir de array de dados
	*
	* @param integer $id ID do registro a ser recuperado
	*
	* @return array
	*/
	function GetByArray($dados,$sort = 'id', $order = 'asc') {
		if(!is_null($dados))
			$this->db->where($dados);
			
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}
	/**
	* Lista todos os registros da tabela
	*
	* @param string $sort Campo para ordenação dos registros
	*
	* @param string $order Tipo de ordenação: ASC ou DESC
	*
	* @return array
	*/
	function GetAll($sort = 'id', $order = 'asc') {
		$this->db->order_by($sort, $order);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}
	/**
	* Atualiza um registro na tabela
	*
	* @param integer $int ID do registro a ser atualizado
	*
	* @param array $data Dados a serem inseridos
	*
	* @return boolean
	*/
	function Atualizar($id, $data) {
		if(is_null($id) || !isset($data))
			return false;
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}
	/**
	* Remove um registro na tabela
	*
	* @param integer $int ID do registro a ser removido
	*
	*
	* @return boolean
	*/
	function Excluir($id) {
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}
}
/* End of file */