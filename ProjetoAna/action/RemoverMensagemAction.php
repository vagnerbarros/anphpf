<?php require_once "lib/securimage/securimage.php"?>
<?php 
class RemoverMensagemAction extends Action {
	
	public static $NM_ACTION = 'RemoverMensagemAction';
	
	public function label(){
		$html = "";
		$html .="<div class='progress progress-striped active'>";
		$html .="<div class='bar' style='width: 40%;'></div>";
		$html .="</div>";
		$html .="";
		return $html;
	}
	
	public function permissions(){
		$this->allow(ACL::all());
	}

	public function run($form){ 

		$id = $form->get('id');
		$fachada = Fachada::getInstance();
		$fachada->cadastroMensagem()->remover($id);
			
		$this->setMessage("Mensagem removida com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');		
		$this->setForward(Forward::go(ListagemMensagemPage::$NM_PAGINA.'&msg_cadastro=sucesso'));
	}
}
?>