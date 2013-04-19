<?php

class CadastroAtividadeEconomica extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroAtividadeEconomica";
	
	public function CadastroAtividadeEconomica($fachada){
		parent::__construct(new RepositorioAtividadeEconomica(), $fachada);
	}
	
}

?>