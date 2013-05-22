<?php 
class EmpreendimentosSegmentosPage extends Page {
	
	/**
	 * Constante que representa o ID desta p�gina 
	 * na se��o
	 * @var String NM_PAGINA
	 */
	public static $NM_PAGINA = 'EmpreendimentosSegmentosPage';
	
	/**
	 * (non-PHPdoc)
	 * @see Page::title()
	 */
	public function title($lang){
		return "In�cio";
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
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::content()
	 */
	public function content($args, $lang){ 
		include 'EmpreendimentosSegmentosPage_content.php';
	}
	
}
?>
