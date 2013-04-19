<?php 
class SobrePage extends Page {
	
	/**
	 * Constante que representa o ID desta página 
	 * na seção
	 * @var String NM_PAGINA
	 */
	public static $NM_PAGINA = 'SobrePage';
	
	/**
	 * (non-PHPdoc)
	 * @see Page::title()
	 */
	public function title($lang){
		return "Sobre";
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
		
		$this->importCss("reset.css");
		$this->importCss("typography.css");
		$this->importCss("main.css");
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::content()
	 */
	public function content($args, $lang){ 
		include 'SobrePage_content.php';
	}
	
}
?>
