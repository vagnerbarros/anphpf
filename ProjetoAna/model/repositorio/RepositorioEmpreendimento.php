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
	
    public function selectBySegmento($segmento){
		$keys['segmento'] = $segmento;
		$result = $this->select($keys);
		return $result;
	}
	
    public function listarEmpreendimentos(){
		$keys['status'] = Constants::$_ATIVO;
		$result = $this->select($keys);
		return $result;
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