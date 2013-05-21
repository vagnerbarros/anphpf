<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'Menu_content.php';	
	include 'Topo_content.php';
	$msg_cadastro = $args->get('msg_cadastro');
?>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
  $(function() {
    $( "#dialog" ).dialog();
  });
</script>

 <?php if($msg_cadastro!=null){ ?>
	        <div id="dialog" title="GLAV">
                <p>Cadastro Efetuado com Sucesso! Informamos que em breve entraremos em contato!</p>
            </div>
 <?php }?>

 <div class="conteudo_page">

	<form class="form_cad" action='<?php echo Proxy::action(CadastrarEmpreendimentoAction::$NM_ACTION)?>' method="post" target="_top">
		
		<label class="altr">* Campos Obrigatórios</label>
		
		<label class="info">.: Dados da empresa :.</label>
				
		<label class="wh400">Razão Social: <span>*</span> </label>
		<label class="wh100">CNPJ: <span>*</span></label>
		
		<input class="wh376" id="<?php echo Proxy::encrypt('razao_social');?>" name="<?php echo Proxy::encrypt('razao_social');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('razao_social');?>");'/>
		<input class="wh176 epc_left" id="<?php echo Proxy::encrypt('cnpj');?>" name="<?php echo Proxy::encrypt('cnpj');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('cnpj');?>");'/>
		
		<label class="wh200">Faixa de Faturamento: <span>*</span> </label>
		<label class="wh200">Data de Abertura: <span>*</span> </label>
		<label class="wh200">Inscrição Estadual: <span>*</span> </label>
		
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('faixa_faturamento');?>" name="<?php echo Proxy::encrypt('faixa_faturamento');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('faixa_faturamento');?>");'/>
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('data_abertura');?>" name="<?php echo Proxy::encrypt('data_abertura');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('data_abertura');?>");'/>
        <input class="wh176" id="<?php echo Proxy::encrypt('inscricao_estadual');?>" name="<?php echo Proxy::encrypt('inscricao_estadual');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('inscricao_estadual');?>");'/>	
	
	    <label class="wh200">Registro: <span>*</span> </label>
		<label class="wh400">Nome Fantasia: <span>*</span> </label>
	    
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('registro');?>" name="<?php echo Proxy::encrypt('registro');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('registro');?>");'/>	
	    <input class="wh376" id="<?php echo Proxy::encrypt('nome_fantasia');?>" name="<?php echo Proxy::encrypt('nome_fantasia');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('nome_fantasia');?>");'/>	
		
		<label class="wh200">Pessoas Ocupadas: <span>*</span> </label>
		<label class="wh400">Setor: <span>*</span> </label>
		
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('pessoas_ocupadas');?>" name="<?php echo Proxy::encrypt('pessoas_ocupadas');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('pessoas_ocupadas');?>");'/>	
		<input class="wh376" id="<?php echo Proxy::encrypt('setor');?>" name="<?php echo Proxy::encrypt('setor');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('setor');?>");'/>	
	
		<label class="info">.: Endereço da empresa :.</label>
		
		<label class="wh200">CEP: <span>*</span></label>
		<label class="wh400">Logradouro:  <span>*</span></label>
	
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('cep');?>" name="<?php echo Proxy::encrypt('cep');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('cep');?>");'/>
		<input class="wh376" id="<?php echo Proxy::encrypt('logradouro');?>" name="<?php echo Proxy::encrypt('logradouro');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('logradouro');?>");'/>
		
		<label class="wh200">Número:  <span>*</span></label>
		<label class="wh200">Bairro:  <span>*</span></label>
		<label class="wh200">Complemento:  <span>*</span></label>
	
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('numero');?>" name="<?php echo Proxy::encrypt('numero');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('numero');?>");'/>	
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('bairro');?>" name="<?php echo Proxy::encrypt('bairro');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('bairro');?>");'/>
		<input class="wh176" id="<?php echo Proxy::encrypt('complemento');?>" name="<?php echo Proxy::encrypt('complemento');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('complemento');?>");'/>
	
		<label class="wh200">Cidade: <span>*</span> </label>
		<label class="wh200">Estado:  <span>*</span></label>
		<label class="wh200">País:  <span>*</span></label>
	
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('cidade');?>" name="<?php echo Proxy::encrypt('cidade');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('cidade');?>");'/>
		<select class="wh190 epc" name="<?php echo Proxy::encrypt('estado');?>">
		     <option value="Alagoas">Alagoas</option>
		     <option value="São Paulo">São Paulo</option>
		     <option value="Rio de Janeiro">Rio de Janeiro</option>
		     <option value="Bahia">Bahia</option>
		     <option value="Pernambuco">Pernambuco</option>
		</select>
		<select class="wh190" name="<?php echo Proxy::encrypt('pais');?>">
		     <option selected="selected" value="Brasil">Brasil</option>
		     <option selected="selected" value="Argentina">Argentina</option>
		     <option selected="selected" value="Estados Unidos">Estados Unidos</option>
		     <option selected="selected" value="Canadá">Canadá</option>
		</select>
		
		<label class="info">.: Contato :.</label>
					
		<label class="wh200">Telefone Residencial: <span>*</span> </label>
		<label class="wh200">Telefone Celular: <span>*</span> </label>
		<label class="wh200">Telefone Comercial: <span>*</span> </label>
		
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('telefone_residencial');?>" name="<?php echo Proxy::encrypt('telefone_residencial');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('telefone_residencial');?>");'/>
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('telefone_celular');?>" name="<?php echo Proxy::encrypt('telefone_celular');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('telefone_celular');?>");'/>
		<input class="wh176" id="<?php echo Proxy::encrypt('telefone_comercial');?>" name="<?php echo Proxy::encrypt('telefone_comercial');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('telefone_comercial');?>");'/>
		
		<label class="wh200">Telefone Recado: <span>*</span> </label>
		<label class="wh200">Segmento:  <span>*</span></label>
		<label class="wh200">Tipo:  <span>*</span></label>
	
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('telefone_recado');?>" name="<?php echo Proxy::encrypt('telefone_recado');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('telefone_recado');?>");'/>
		<select class="wh190 epc" name="<?php echo Proxy::encrypt('segmento');?>">
		     <option class="wh176" value="Comércio">Comércio</option>
		     <option class="wh176" value="Tecnologia">Tecnologia</option>
		     <option class="wh176" value="Indústria">Indústria</option>
		     <option class="wh176" value="Serviços">Serviços</option>
		     <option class="wh176" value="Saúde">Saúde</option>
		</select>
		<select class="wh190" name="<?php echo Proxy::encrypt('tipo');?>">
		     <option selected="selected" value="Empresário Individual">Empresário Individual</option>
		     <option selected="selected" value="Sociedade Empresarial Limitada">Sociedade Empresarial Limitada</option>
		     <option selected="selected" value="Empresa Individual de Responsabilidade Limitada">Empresa Individual de Responsabilidade Limitada</option>
		</select>
		
		<label class="wh376">E-mail: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('email');?>" name="<?php echo Proxy::encrypt('email');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('email');?>");'/>
		
		<?php include "view/components/Captcha.php"?>
	
		<input type="submit" class='btn btn-primary btn-large' value="Confimar"/>
		
	</form>
</div>
</div>
<?php 
	include 'Parceiros_content.php';
	include 'rodape.php';
?>
