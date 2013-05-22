<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'MenuAdmin_content.php';
	$id = $args->get('id');
	$fachada = Fachada::getInstance();
	$empreendimento = $fachada->cadastroEmpreendimento()->buscarPorId($id);
?>
		
		<div class="conteudo_page">
			<h3>Detalhes de Pessoa Física</h3>
			<div style="font-size: 14px;">
    			TIPO: <?php echo $empreendimento->getTipo();?><br/>
		        CNPJ: <?php echo $empreendimento->getCnpj();?><br/>
		    INSCRIÇÃO ESTADUAL: <?php echo $empreendimento->getInscricaoEstadual();?><br/>
		    REGISTRO: <?php echo $empreendimento->getRegistro();?><br/>
		    NOME FANTASIA: <?php echo $empreendimento->getNomeFantasia();?><br/>
		    RAZÃO SOCIAL: <?php echo $empreendimento->getRazaoSocial();?><br/>
		   DATA DE ABERTURA: <?php echo $empreendimento->getDataAbertura();?><br/>
		    FAIXA DE FATURAMENTO: <?php echo $empreendimento->getFaixaFaturamento();?><br/>
		    SETOR: <?php echo $empreendimento->getSetor();?><br/>
		    CEP: <?php echo $empreendimento->getCep();?><br/>
		    PAÍS<?php echo $empreendimento->getPais();?><br/>
		    ESTADO: <?php echo $empreendimento->getEstado();?><br/>
		    CIDADE: <?php echo $empreendimento->getCidade();?><br/>
		    BAIRRO: <?php echo $empreendimento->getBairro();?><br/>
		    LOGRADOURO: <?php echo $empreendimento->getLogradouro();?><br/>
		    NÚMERO: <?php echo $empreendimento->getNumero();?><br/>
		    COMPLEMENTO: <?php echo $empreendimento->getComplemento();?><br/>
		    TELEFONE RESIDENCIAL: <?php echo $empreendimento->getTelefoneResidencial();?><br/>
		    TELEFONE CELULAR: <?php echo $empreendimento->getTelefoneCelular();?><br/>
		    TELEFONE COMERCIAL: <?php echo $empreendimento->getTelefoneComercial();?><br/>
		    TELEFONE RECADO: <?php echo $empreendimento->getTelefoneRecado(); ?><br/>
		    E-MAIL: <?php echo $empreendimento->getEmail();?><br/>
		    SEGMENTO: <?php echo $empreendimento->getSegmento(); ?><br/>
		
			</div>
		</div>
    
</div>

<?php 
	include 'rodape.php';
?>
