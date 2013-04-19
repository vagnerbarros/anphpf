<?php

class CadastroPessoa extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroPessoa";
	
	public function CadastroPessoa($fachada){
		parent::__construct(new RepositorioPessoa(), $fachada);
	}
	
    public function cadastrar($pessoa){
		$this->repositorio->create($pessoa);
	}
	
}

?>