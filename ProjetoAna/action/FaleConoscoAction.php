<?php require_once "lib/securimage/securimage.php"?>
<?php
class FaleConoscoAction extends Action {

	public static $NM_ACTION = 'FaleConoscoAction';

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

		$img = new Securimage();

		try{
				
			$code = $form->get('code');
			if(!$img->check($code))
			throw new CaptchaIncorretoException();


			$nome = $form->get('nome');
			$empresa = $form->get('empresa');
			$telefone = $form->get('telefone');
			$assunto = $form->get('assunto');
			$mensagem = $form->get('mensagem');

			$msg = new Mensagem(null, $nome, $empresa, $telefone, $assunto, $mensagem, Constants::$_ATIVO);

			$fachada = Fachada::getInstance();
			$fachada->cadastroMensagem()->cadastrar($msg);
				
			$this->setMessage("Mensagem cadastrada com sucesso.", Constants::$_MSG_SUCCESS);
			$this->load('100%');
			$this->setForward(Forward::go(FaleConoscoPage::$NM_PAGINA.'&msg_cadastro=sucesso'));
		}
		catch(CaptchaIncorretoException $e){
			$this->setMessage("As letras não foram digitadas corretamente! Por favor, tente novamente...", Constants::$_MSG_ERROR);
			$this->load('100%');
			$this->setForward(Forward::$_BACK);
		}
	}
}
?>