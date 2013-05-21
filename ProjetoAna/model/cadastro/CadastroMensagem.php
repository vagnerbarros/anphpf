<?php

class CadastroMensagem extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroMensagem";
	
	public function CadastroMensagem($fachada){
		parent::__construct(new RepositorioMensagem(), $fachada);
	}
	
    public function cadastrar($mensagem){
		$this->repositorio->create($mensagem);
	}
}

?>