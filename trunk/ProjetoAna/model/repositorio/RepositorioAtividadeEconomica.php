<?php

class RepositorioAtividadeEconomica extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioAtividadeEconomica";

	public function RepositorioAtividadeEconomica(){
		parent::__construct(AtividadeEconomica::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$result = $this->select($keys);
		return $result[0];
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			array_push($objs, AtividadeEconomica::fromArray($item));
		}
		return $objs;
	}
}

?>