<?php

class CadastroEmpreendimento extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroEmpreendimento";
	
	public function CadastroEmpreendimento($fachada){
		parent::__construct(new RepositorioEmpreendimento(), $fachada);
	}
	
    public function cadastrar($empreendimento){
		$this->repositorio->create($empreendimento);
	}
	
}

?>