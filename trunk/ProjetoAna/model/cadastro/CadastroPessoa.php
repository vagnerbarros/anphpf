<?php

class CadastroPessoa extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroPessoa";
	
	public function CadastroPessoa($fachada){
		parent::__construct(new RepositorioPessoa(), $fachada);
	}
	
    public function cadastrar($pessoa){
		$this->repositorio->create($pessoa);
	}
	
	public function buscarPorId($id){
		return $this->repositorio->selectById($id);
	}
	
	public function listarPessoas(){
		return $this->repositorio->listarPessoas();
	}
	
}

?>