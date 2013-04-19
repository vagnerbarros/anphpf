<?php

class Pessoa implements Entidade {
	
	//nome da entidade
	public static $NM_ENTITY = "pessoa";
	
	private $id;
	private $cpf;
	private $nome;
	private $cep;
	private $pais;
	private $estado;
	private $cidade;
	private $bairro;
	private $logradouro;
	private $numero;
	private $complemento;
	private $telefone_residencial;
	private $telefone_celular;
	private $telefone_comercial;
	private $email;
	private $sexo;
	private $data_nascimento;
	private $escolaridade;
	private $segmento;
	private $status;
	
	//construtor
	public function Pessoa($id, $cpf, $nome, $cep, $pais, $estado, $cidade, $bairro, $logradouro, $numero, $complemento, $telefone_residencial, $telefone_celular, $telefone_comercial, $email, $sexo, $data_nascimento, $escolaridade, $segmento, $status){
		
		$this->setId($id);
		$this->setCpf($cpf);
		$this->setNome($nome);
		$this->setCep($cep);
		$this->setPais($pais);
		$this->setEstado($estado);
		$this->setCidade($cidade);
		$this->setBairro($bairro);
		$this->setLogradouro($logradouro);
		$this->setNumero($numero);
		$this->setComplemento($complemento);
		$this->setTelefoneResidencial($telefone_residencial);
		$this->setTelefoneCelular($telefone_celular);
		$this->setTelefoneComercial($telefone_comercial);
		$this->setEmail($email);
		$this->setSexo($sexo);
		$this->setDataNascimento($data_nascimento);
		$this->setEscolaridade($escolaridade);
		$this->setSegmento($segmento);
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
		if(!($obj instanceof Pessoa))
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
		$hash['cpf'] = $this->getCpf();
		$hash['nome'] = $this->getNome();
		$hash['cep'] = $this->getCep();
		$hash['pais'] = $this->getPais();
		$hash['estado'] = $this->getEstado();
		$hash['cidade'] = $this->getCidade();
		$hash['bairro'] = $this->getBairro();
		$hash['logradouro'] = $this->getLogradouro();
		$hash['numero'] = $this->getNumero();
		$hash['complemento'] = $this->getComplemento();
		$hash['telefone_residencial'] = $this->getTelefoneResidencial();
		$hash['telefone_celular'] = $this->getTelefoneCelular();
		$hash['telefone_comercial'] = $this->getTelefoneComercial();
		$hash['email'] = $this->getEmail();
		$hash['sexo'] = $this->getSexo();
		$hash['data_nascimento'] = $this->getDataNascimento();
		$hash['escolaridade'] = $this->getEscolaridade();
		$hash['segmento'] = $this->getSegmento();
		$hash['status'] = $this->getStatus();
		
		return $hash;
	}
	
	/**
	 * Método que transforma uma hash em um objeto do tipo usuario
	 */
	public static function fromArray($hash){
		
		return new Pessoa($hash['id'], $hash['cpf'], $hash['nome'], $hash['cep'], $hash['pais'], $hash['estado'], $hash['cidade'], $hash['bairro'], $hash['logradouro'], $hash['numero'], $hash['complemento'], $hash['telefone_residencial'], $hash['telefone_celular'], $hash['telefone_comercial'], $hash['email'], $hash['sexo'], $hash['data_nascimento'], $hash['escolaridade'], $hash['segmento'], $hash['status']);
	}
	
	//metodos get
	
	public function getId(){
		return $this->id;
	}
    public function getCpf(){
		return $this->cpf;
	}
	public function getNome(){
		return $this->nome;
	}
    public function getCep(){
		return $this->cep;
	}
    public function getPais(){
		return $this->pais;
	}
    public function getEstado(){
		return $this->estado;
	}
    public function getCidade(){
		return $this->cidade;
	}
    public function getBairro(){
		return $this->bairro;
	}
    public function getLogradouro(){
		return $this->logradouro;
	}
    public function getNumero(){
		return $this->numero;
	}
    public function getComplemento(){
		return $this->complemento;
	}
    public function getTelefoneResidencial(){
		return $this->telefone_residencial;
	}
    public function getTelefoneCelular(){
		return $this->telefone_celular;
	}
    public function getTelefoneComercial(){
		return $this->telefone_comercial;
	}
    public function getEmail(){
		return $this->email;
	}
    public function getSexo(){
		return $this->sexo;
	}
    public function getDataNascimento(){
		return $this->data_nascimento;
	}
    public function getEscolaridade(){
		return $this->escolaridade;
	}
    public function getSegmento(){
		return $this->segmento;
	}
    public function getStatus(){
		return $this->status;
	}
	
	//metodos set
	
	public function setId($id){
		$this->id = $id;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setCep($cep){
		$this->cep = $cep;
	}
	public function setPais($pais){
		$this->pais = $pais;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}
    public function setCidade($cidade){
		$this->cidade = $cidade;
	}
    public function setBairro($bairro){
		$this->bairro = $bairro;
	}
    public function setLogradouro($logradouro){
		$this->logradouro = $logradouro;
	}
    public function setNumero($numero){
		$this->numero = $numero;
	}
    public function setComplemento($complemento){
		$this->complemento = $complemento;
	}
    public function setTelefoneResidencial($telefone_residencial){
		$this->telefone_residencial = $telefone_residencial;
	}
    public function setTelefoneCelular($telefone_celular){
		$this->telefone_celular = $telefone_celular;
	}
    public function setTelefoneComercial($telefone_comercial){
		$this->telefone_comercial = $telefone_comercial;
	}
    public function setEmail($email){
		$this->email = $email;
	}
    public function setSexo($sexo){
		$this->sexo = $sexo;
	}
    public function setDataNascimento($data_nascimento){
		$this->data_nascimento = $data_nascimento;
	}
    public function setEscolaridade($escolaridade){
		$this->escolaridade = $escolaridade;
	}
    public function setSegmento($segmento){
		$this->segmento = $segmento;
	}
    public function setStatus($status){
		$this->status = $status;
	}
	
	
}

?>