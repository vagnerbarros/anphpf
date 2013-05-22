<?php

class CadastroEmpreendimento extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroEmpreendimento";
	
	public function CadastroEmpreendimento($fachada){
		parent::__construct(new RepositorioEmpreendimento(), $fachada);
	}
	
    public function cadastrar($empreendimento){
		$this->repositorio->create($empreendimento);
	}
	
    public function listarEmpreendimentos(){
		return $this->repositorio->listarEmpreendimentos();
	}
	
	public function buscarPorId($id){
		return $this->repositorio->selectById($id);
	}
	
}

?>