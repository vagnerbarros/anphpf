<?php

class CadastroMensagem extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroMensagem";
	
	public function CadastroMensagem($fachada){
		parent::__construct(new RepositorioMensagem(), $fachada);
	}
	
    public function cadastrar($mensagem){
		$this->repositorio->create($mensagem);
	}
	
	public function buscarId($id){
		return $this->repositorio->selectById($id);
	}
	
	public function listar(){
		return $this->repositorio->selectAll();
	}
	
	public function remover($id){
		$mensagem = new Mensagem($id, null, null, null, null, null, Constants::$_ATIVO);
		$this->repositorio->delete($mensagem);
	}
}

?>