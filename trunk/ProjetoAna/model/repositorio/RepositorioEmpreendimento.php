<?php

class RepositorioEmpreendimento extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioEmpreendimento";

	public function RepositorioEmpreendimento(){
		parent::__construct(Empreendimento::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$result = $this->select($keys);
		return $result[0];
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			array_push($objs, Empreendimento::fromArray($item));
		}
		return $objs;
	}
}

?>