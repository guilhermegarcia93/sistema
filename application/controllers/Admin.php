<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	/**
     * Carrega a home
     */
	public function Index(){
		// Recupera as empresas através do model
		$dados["empresas"] = $this->empresas_model->GetAll('razao_social');
		$dados["usuarios"] = $this->usuarios_model->GetByArray(null);

		$this->load->view('admin/dashboard', $dados);
	}

	public function Empresas(){
		// Recupera as empresas através do model
		$empresas = $this->empresas_model->GetAll('razao_social');
		// Passa as empresas para o array que será enviado à home
		$dados['empresas'] =$this->empresas_model->Formatar($empresas);

		$this->load->view('admin/empresas', $dados);
	}

	public function Usuarios(){
		// Recupera os usuarios através do model
		$usuarios = $this->usuarios_model->GetAll('nome');
		// Passa os usuarios para o array que será enviado à home
		$dados['usuarios'] =$this->usuarios_model->Formatar($usuarios);

		$this->load->view('admin/usuarios', $dados);
	}
}