<?php require_once "lib/securimage/securimage.php"?>
<?php 
class CadastrarPessoaAction extends Action {
	
	public static $NM_ACTION = 'CadastrarPessoaAction';
	
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

		$nome = $form->get('nome');
		$cpf = $form->get('cpf');
		$cep = $form->get('cep');
		$pais = $form->get('pais');
		$estado = $form->get('estado');
		$cidade = $form->get('cidade');
		$bairro = $form->get('bairro');
		$logradouro = $form->get('logradouro');
		$numero = $form->get('numero');
		$complemento = $form->get('complemento');
		$telefone_residencial = $form->get('telefone_residencial');
		$telefone_celular = $form->get('telefone_celular');
		$telefone_comercial = $form->get('telefone_comercial');
		$email = $form->get('email');
		$sexo = $form->get('sexo');
		$data_nascimento = Datas::StringParaData($form->get('data_nascimento'));
		$escolaridade = $form->get('escolaridade');
		$segmento = $form->get('segmento');	
		
		$pessoa = new Pessoa(null, $cpf, $nome, $cep, $pais, $estado, $cidade, $bairro, $logradouro, $numero, $complemento, $telefone_residencial, $telefone_celular, $telefone_comercial, $email, $sexo, $data_nascimento, $escolaridade, $segmento, Constants::$_ATIVO);
		
		$fachada = Fachada::getInstance();
		$fachada -> cadastroPessoa() -> cadastrar($pessoa);
			
		$this->setMessage("Pessoa cadastrado com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');		
		$this->setForward(Forward::go(CadastrarPessoaPage::$NM_PAGINA));
		
	}
}
?>