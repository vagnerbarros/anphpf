<?php

class RepositorioPessoa extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioPessoa";

	public function RepositorioPessoa(){
		parent::__construct(Pessoa::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$result = $this->select($keys);
		return $result[0];
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