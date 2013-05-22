<?php

class Empreendimento implements Entidade {
	
	//nome da entidade
	public static $NM_ENTITY = "empreendimento";
	
	private $id;
	private $tipo;
	private $cnpj;
	private $inscricao_estadual;
	private $registro;
	private $nome_fantasia;
	private $razao_social;
	private $pessoas_ocupadas;
	private $data_abertura;
	private $faixa_faturamento;
	private $segmento;
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
	private $telefone_recado;
	private $email;
	private $status;
	private $setor;

	
	//construtor
	public function Empreendimento($id, $tipo, $cnpj, $inscricao_estadual, $registro, $nome_fantasia, $razao_social, $pessoas_ocupadas, $data_abertura, $faixa_faturamento, $segmento, $cep, $pais, $estado, $cidade, $bairro, $logradouro, $numero, $complemento, $telefone_residencial, $telefone_celular, $telefone_comercial, $telefone_recado, $email, $status, $setor){
		
		$this->setId($id);
		$this->setTipo($tipo);
		$this->setCnpj($cnpj);
		$this->setInscricaoEstadual($inscricao_estadual);
		$this->setRegistro($registro);
		$this->setNomeFantasia($nome_fantasia);
		$this->setRazaoSocial($razao_social);
		$this->setPessoasOcupadas($pessoas_ocupadas);
		$this->setDataAbertura($data_abertura);
		$this->setFaixaFaturamento($faixa_faturamento);
		$this->setSetor($setor);
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
		$this->setTelefoneRecado($telefone_recado);
		$this->setEmail($email);
		$this->setStatus($status);
		$this->setSegmento($segmento);
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
		if(!($obj instanceof Empreendimento))
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
		$hash['tipo'] = $this->getTipo();
		$hash['cnpj'] = $this->getCnpj();
		$hash['inscricao_estadual'] = $this->getInscricaoEstadual();
		$hash['registro'] = $this->getRegistro();
		$hash['nome_fantasia'] = $this->getNomeFantasia();
		$hash['razao_social'] = $this->getRazaoSocial();
		$hash['pessoas_ocupadas'] = $this->getRazaoSocial();
		$hash['data_abertura'] = $this->getDataAbertura();
		$hash['faixa_faturamento'] = $this->getFaixaFaturamento();
		$hash['setor'] = $this->getSetor();
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
		$hash['telefone_recado'] = $this->getTelefoneRecado();
		$hash['email'] = $this->getEmail();
		$hash['status'] = $this->getStatus();
		$hash['segmento'] = $this->getSegmento();
		
		return $hash;
	}
	
	/**
	 * Método que transforma uma hash em um objeto do tipo usuario
	 */
	public static function fromArray($hash){
		
		return new Empreendimento($hash['id'], $hash['tipo'], $hash['cnpj'], $hash['inscricao_estadual'], $hash['dap'], $hash['registro'], $hash['nome_fantasia'], $hash['razao_social'], $hash['pessoas_ocupadas'], $hash['data_abertura'], $hash['faixa_faturamento'], $hash['setor'] , $hash['cep'], $hash['pais'], $hash['estado'], $hash['cidade'], $hash['bairro'], $hash['logradouro'], $hash['numero'], $hash['complemento'], $hash['telefone_residencial'], $hash['telefone_celular'], $hash['telefone_comercial'], $hash['email'], $hash['status'], $hash['segmento']);
	
	}
	//metodos get
	
	public function getId(){
		return $this->id;
	}
    public function getTipo(){
		return $this->tipo;
	}
    public function getCnpj(){
		return $this->cnpj;
	}
    public function getInscricaoEstadual(){
		return $this->inscricao_estadual;
	}
    public function getRegistro(){
		return $this->registro;
	}
    public function getNomeFantasia(){
		return $this->nome_fantasia;
	}
    public function getRazaoSocial(){
		return $this->razao_social;
	}
    public function getPessoasOcupadas(){
		return $this->pessoas_ocupadas;
	}
    public function getDataAbertura(){
		return $this->data_abertura;
	}
    public function getFaixaFaturamento(){
		return $this->faixa_faturamento;
	}
    public function getSegmento(){
		return $this->segmento;
	}
    public function getSetor(){
		return $this->setor;
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
    public function getTelefoneRecado(){
		return $this->telefone_recado;
	}
    public function getEmail(){
		return $this->email;
	}
    public function getStatus(){
		return $this->status;
	}
	
	//metodos set
	
	public function setId($id){
		$this->id = $id;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}
	public function setInscricaoEstadual($inscricao_estadual){
		$this->inscricao_estadual = $inscricao_estadual;
	}								
	public function setRegistro($registro){
		$this->registro = $registro;
	}
	public function setNomeFantasia($nome_fantasia){
		$this->nome_fantasia = $nome_fantasia;
	}
	public function setRazaoSocial($razao_social){
		$this->razao_social = $razao_social;
	}
	public function setPessoasOcupadas($pessoas_ocupadas){
		$this->pessoas_ocupadas = $pessoas_ocupadas;
	}
	public function setDataAbertura($data_abertura){
		$this->data_abertura = $data_abertura;
	}
	public function setFaixaFaturamento($faixa_faturamento){
		$this->faixa_faturamento = $faixa_faturamento;
	}
    public function setSegmento($segmento){
		$this->segmento = $segmento;
	}
	public function setSetor($setor){
		$this->setor = $setor;
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
	public function setTelefoneRecado($telefone_recado){
		$this->telefone_recado = $telefone_recado;
	}
    public function setEmail($email){
		$this->email = $email;
	}
    public function setStatus($status){
		$this->status = $status;
	}
	
	
}

?>