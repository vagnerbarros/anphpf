<?php 
class CadastrarEmpreendimentoPage extends Page {
	
	/**
	 * Constante que representa o ID desta página 
	 * na seção
	 * @var String NM_PAGINA
	 */
	public static $NM_PAGINA = 'CadastrarEmpreendimentoPage';
	
	/**
	 * (non-PHPdoc)
	 * @see Page::title()
	 */
	public function title($lang){
		return "Cadastrar Empreendimento";
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::permissions()
	 */
	public function permissions(){
		$this->addPermissao(ACL::all()); //Everybody
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::head()
	 */
	public function head($args, $lang){
		
//		$this->importJs("jquery.min.js");
		
		$this->importCss("reset.css");
		$this->importCss("typography.css");
		$this->importCss("main.css");
		$this->importCss("style_form.css");
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::content()
	 */
	public function content($args, $lang){ 
		include 'CadastrarEmpreendimentoPage_content.php';
	}
	
}
?>
