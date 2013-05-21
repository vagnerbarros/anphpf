<?php require_once "lib/securimage/securimage.php"?>
<?php 
class CadastrarEmpreendimentoAction extends Action {
	
	public static $NM_ACTION = 'CadastrarEmpreendimentoAction';
	
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
		$cnpj = $form->get('cnpj');
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
		$telefone_recado = $form->get('telefone_recado');
		$email = $form->get('email');
		$faixa_faturamento = $form->get('faixa_faturamento');
		$data_abertura = $form->get('data_abertura');
		$razao_social = $form->get('razao_social');	
		$inscricao_estadual = $form->get('inscricao_estadual');
		$registro = $form->get('registro');
		$nome_fantasia = $form->get('nome_fantasia');
		$pessoas_ocupadas = $form->get('pessoas_ocupadas');
		$setor = $form->get('setor');
		$tipo = $form->get('tipo');
		$segmento = $form->get('segmento');
		
		$empreendimento = new Empreendimento($id, $tipo, $cnpj, $inscricao_estadual, $registro, $nome_fantasia, $razao_social, $pessoas_ocupadas, $data_abertura, $faixa_faturamento, $segmento, $cep, $pais, $estado, $cidade, $bairro, $logradouro, $numero, $complemento, $telefone_residencial, $telefone_celular, $telefone_comercial, $telefone_recado, $email, Constants::$_ATIVO, $setor);
		
		$fachada = Fachada::getInstance();
		$fachada->cadastroEmpreendimento()->cadastrar($empreendimento);
			
		$this->setMessage("Pessoa cadastrado com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');		
		$this->setForward(Forward::go(CadastrarEmpreendimentoPage::$NM_PAGINA.'&msg_cadastro=sucesso'));
		
	}
}
?>