<?php

class RepositorioMensagem extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioMensagem";

	public function RepositorioMensagem(){
		parent::__construct(Mensagem::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$result = $this->select($keys);
		return $result[0];
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			array_push($objs, Mensagem::fromArray($item));
		}
		return $objs;
	}
}

?>