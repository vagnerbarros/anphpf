<?php

class Mensagem implements Entidade {
	
	//nome da entidade
	public static $NM_ENTITY = "mensagem";
	
	private $id;
	private $nome;
	private $empresa;
	private $telefone;
	private $assunto;
	private $mensagem;
	private $status;

	
	//construtor
	public function Mensagem($id, $nome, $empresa, $telefone, $assunto, $mensagem, $status){
		
		$this->setId($id);
		$this->setNome($nome);
		$this->setEmpresa($empresa);
		$this->setTelefone($telefone);
		$this->setAssunto($assunto);
		$this->setMensagem($mensagem);
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
		if(!($obj instanceof Mensagem))
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
		$hash['nome'] = $this->getNome();
		$hash['empresa'] = $this->getEmpresa();
		$hash['telefone'] = $this->getTelefone();
		$hash['assunto'] = $this->getAssunto();
		$hash['mensagem'] = $this->getMensagem();
		$hash['status'] = $this->getStatus();
		
		return $hash;
	}
	
	/**
	 * Método que transforma uma hash em um objeto do tipo usuario
	 */
	public static function fromArray($hash){
		return new Mensagem($hash['id'], $hash['nome'], $hash['empresa'], $hash['telefone'],
		 $hash['assunto'], $hash['mensagem'], $hash['status']);
	}
	//metodos get
	
	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getEmpresa(){
		return $this->empresa;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getAssunto(){
		return $this->assunto;
	}
	public function getMensagem(){
		return $this->mensagem;
	}
    public function getStatus(){
		return $this->status;
	}
	
	//metodos set
	
	public function setId($id){
		$this->id = $id;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setEmpresa($empresa){
		$this->empresa = $empresa;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setAssunto($assunto){
		$this->assunto = $assunto;
	}
	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}
    public function setStatus($status){
		$this->status = $status;
	}
}

?>