<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'MenuAdmin_content.php';
	$id = $args->get('id');
	$fachada = Fachada::getInstance();
	$pessoa = $fachada->cadastroPessoa()->buscarPorId($id);
?>
		
		<div class="conteudo_page">
			<h3>Detalhes de Pessoa Física</h3>
			<div style="font-size: 14px;">
				CPF: <?php echo $pessoa->getCpf(); ?><br/>
		        NOME: <?php echo $pessoa->getNome();?><br/>
		        CEP:  <?php echo $pessoa->getCep();?><br/>
		        PAÍS: <?php echo $pessoa->getPais();?><br/>
		        ESTADO: <?php echo $pessoa->getEstado();?><br/>
		        CIDADE: <?php echo $pessoa->getCidade();?><br/>
		        BAIRRO: <?php echo $pessoa->getBairro();?><br/>
		        LOGRADOURO: <?php echo $pessoa->getLogradouro();?><br/>
		        NÚMERO: <?php echo $pessoa->getNumero();?><br/>
		        COMPLEMENTO: <?php echo $pessoa->getComplemento();?><br/>
	            TELEFONE RESIDENCIAL: <?php echo $pessoa->getTelefoneResidencial();?><br/>
		        TELEFONE CELULAR: <?php echo $pessoa->getTelefoneCelular();?><br/>
		        TELEFONE COMERCIAL: <?php echo $pessoa->getTelefoneComercial();?><br/>
		        E-MAIL: <?php echo $pessoa->getEmail();?><br/>
		        SEXO: <?php echo $pessoa->getSexo();?><br/>
		        DATA DE NASCIMENTO: <?php echo $pessoa->getDataNascimento();?><br/>
		        ESCOLARIDADE: <?php echo $pessoa->getEscolaridade();?><br/>
		        SEGMENTO: <?php echo $pessoa->getSegmento();?><br/>
			</div>
		</div>
    
</div>

<?php 
	include 'rodape.php';
?>
