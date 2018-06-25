<?php
class Empresas_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table = 'empresas';
    }
    /**
    * Formata as empresas para exibição dos dados na home
    *
    * @param array $empresas contatos Lista das empresas a serem formatados
    *
    * @return array
    */
    function Formatar($empresas){
        if($empresas){
            for($i = 0; $i < count($empresas); $i++){
                $empresas[$i]['editar_url'] = base_url('editar')."/".$empresas[$i]['id'];
                $empresas[$i]['excluir_url'] = base_url('excluir')."/".$empresas[$i]['id'];
            }
            return $empresas;
        } else {
            return false;
        }
    }
}