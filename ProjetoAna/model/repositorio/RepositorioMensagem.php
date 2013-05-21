<?php

class RepositorioMensagem extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioMensagem";

	public function RepositorioMensagem(){
		parent::__construct(Mensagem::$NM_ENTITY);
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			array_push($objs, Pessoa::fromArray($item));
		}
		return $objs;
	}
}

?>