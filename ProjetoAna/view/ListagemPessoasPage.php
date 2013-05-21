<?php 
class ListagemPessoasPage extends Page {
	
	/**
	 * Constante que representa o ID desta página 
	 * na seção
	 * @var String NM_PAGINA
	 */
	public static $NM_PAGINA = 'ListagemPessoasPage';
	
	/**
	 * (non-PHPdoc)
	 * @see Page::title()
	 */
	public function title($lang){
		return "Início";
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
		
		$this->importCss("demo_page.css");
		$this->importCss("demo_table.css");
		$this->importCss("jquery-ui.css");
		$this->importCss("jquery-ui-1.7.2.custom.css");
		
		$this->importJs("jquery-1.4.4.min.js");
		$this->importJs("jquery.dataTables.min.js");
		$this->importJs("jquery-ui.js");
		$this->importJs("jquery.min.js");
		
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::content()
	 */
	public function content($args, $lang){ 
		include 'ListagemPessoasPage_content.php';
	}
	
}
?>
