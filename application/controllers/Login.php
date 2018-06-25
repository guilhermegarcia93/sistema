<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	/**
     * Carrega a home
     */
	public function Index()
	{
		// Chama a home enviando um array de dados a serem exibidos
		$this->load->view('login');
	}
	/**
	* Valida os dados do formulário
	*
	* @param string $operacao Operação realizada no formulário: insert ou update
	*
	* @return boolean
	*/
	public function Logar(){
		
		$validacao = self::ValidarDados();
		
		if($validacao){
			$usuario = $this->input->post();
			
			$result = $this->usuarios_model->GetByArray($usuario);

			if(!$result){
				$this->session->set_flashdata('error', 'Usuário e/ou senha incorretos.');
				$this->load->view('login');
			}else{
				$this->session->set_flashdata('success', 'Usuário existe.');
				redirect(base_url('admin/dashboard'));
			}
		}else{
			$this->session->set_flashdata('error', validation_errors('<p>','</p>'));
			$this->load->view('login');
		}
		
	}
	
	/**
	* Valida os dados do formulário
	*
	* @param string $operacao Operação realizada no formulário: insert ou update
	*
	* @return boolean
	*/
	private function ValidarDados(){
		// Com base no parâmetro passado
		// determina as regras de validação
		$rules['login'] = array('trim', 'required');
		$rules['senha'] = array('trim', 'required');

		$this->form_validation->set_rules('login', 'Login', $rules['login']);
		$this->form_validation->set_rules('senha', 'Senha', $rules['senha']);
		// Executa a validação e retorna o status
		return $this->form_validation->run();
	}
}