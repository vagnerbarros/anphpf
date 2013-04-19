<?php

class AtividadeEconomica implements Entidade {
	
	//nome da entidade
	public static $NM_ENTITY = "atividade_economica";
	
	private $id;
	private $setor;
	private $nome;
	private $atividade_principal;
	private $id_empreendimento;
	private $status;
	
	//construtor
	public function AtividadeEconomica($id, $setor, $nome, $atividade_principal, $id_empreendimento, $status){
		
		$this->setId($id);
		$this->setSetor($setor);
		$this->setNome($nome);
		$this->setAtividadePrincipal($atividade_principal);
		$this->setIdEmpreendimento($id_empreendimento);
		$this->setStatus($status);
	}
	
	/**
	 * 
	 * Método que transforma a entidade em um String
	 */
	public function __toString(){
		return "";
	}
	
	/**
	 * 
	 * Método que compara a entidade a outra entidade do mesmo tipo
	 * @param User $obj
	 * @throws ComparacaoTipoInvalidoException
	 */
	public function compareTo($obj){
		if(!($obj instanceof AtividadeEconomica))
				throw new InvalidTypeException();
		
		return ($this->getId() == $obj->getId());
	}
	
	/**
	 * 
	 * Método que transforma o objeto em uma Hash 
	 */
	public function toArray(){
		
		$hash = array();
		
		$hash['id'] = $this->getId();
		$hash['setor'] = $this->getSetor();
		$hash['nome'] = $this->getNome();
		$hash['atividade_principal'] = $this->getAtividadePrincipal();
		$hash['id_empreendimento'] = $this->getIdEmpreendimento();
		$hash['status'] = $this->getStatus();  
		
		return $hash;
	}
	
	/**
	 * Método que transforma uma hash em um objeto do tipo usuario
	 */
	public static function fromArray($hash){
		
		return new Usuario($hash['id'], $hash['setor'], $hash['nome'], $hash['atividade_principal'], $hash['id_empreendimento'], $hash['status']);
	}
	
	//metodos get
	
	public function getId(){
		return $this->id;
	}
	public function getSetor(){
		return $this->setor;
	}
	public function getNome(){
		return $this->nome;
	}
    public function getAtividadePrincipal(){
		return $this->atividade_principal;
	}
    public function getIdEmpreendimento(){
		return $this->id_empreendimento;
	}
	public function getStatus(){
		return $this->status;
	}
	
	//metodos set
	
	public function setId($id){
		$this->id = $id;
	}
	public function setSetor($setor){
		$this->setor = $setor;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setAtividadePrincipal($atividade_principal){
		$this->atividade_principal = $atividade_principal;
	}
	public function setIdEmpreendimento($id_empreendimento){
		$this->id_empreendimento = $id_empreendimento;
	}
	public function setStatus($status){
		$this->status = $status;
	}
}

?>