<?php
 //EXCEPTIONS
require_once("model/exception/CadastroException.php");
  
 //ENTIDADES
require_once("model/entidade/Pessoa.php");
require_once("model/entidade/Empreendimento.php");
require_once("model/entidade/AtividadeEconomica.php");

 //REPOSITORIOS
require_once("model/repositorio/IRepositorio.php");
require_once("model/repositorio/RepositorioEntidade.php");
require_once("model/repositorio/RepositorioPessoa.php");
require_once("model/repositorio/RepositorioEmpreendimento.php");
require_once("model/repositorio/RepositorioAtividadeEconomica.php");

 //CADASTROS
require_once("model/cadastro/CadastroEntidade.php");
require_once("model/cadastro/CadastroPessoa.php");
require_once("model/cadastro/CadastroEmpreendimento.php");
require_once("model/cadastro/CadastroAtividadeEconomica.php");
 

class Fachada {

	private static $instance;
	private $cadastros;
	
	private function __construct(){
		$this->cadastros = array();
		$this->cadastros[Pessoa::$NM_ENTITY] = new CadastroPessoa($this);
		$this->cadastros[Empreendimento::$NM_ENTITY] = new CadastroEmpreendimento($this);
		$this->cadastros[AtividadeEconomica::$NM_ENTITY] = new CadastroAtividadeEconomica($this);
	}
	
	public static function getInstance(){
		if(Fachada::$instance == null) {
			Fachada::$instance = new Fachada ();
		}
		return Fachada::$instance;
	}
	
	//Usuario
	public function cadastroPessoa(){
		return $this->cadastros[Pessoa::$NM_ENTITY];
	}
	
    //Empreendimento
	public function cadastroEmpreendimento(){
		return $this->cadastros[Empreendimento::$NM_ENTITY];
	}
	
    //AtividadeEconomica
	public function cadastroAtividadeEconomica(){
		return $this->cadastros[AtividadeEconomica::$NM_ENTITY];
	}
}

?>