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

	<form class="form_cad" action='<?php echo Proxy::action(CadastrarPessoaAction::$NM_ACTION)?>' method="post" target="_top">
		
		<label class="altr">* Campos Obrigatórios</label>
		
		<label class="info">.: Dados pessoais :.</label>
		
		<label class="wh400">Nome: <span>*</span> </label>
		<label class="wh100">CPF: <span>*</span></label>
		
		<input class="wh376" id="<?php echo Proxy::encrypt('nome');?>" name="<?php echo Proxy::encrypt('nome');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('nome');?>");'/>
		<input class="wh176 epc_left" id="<?php echo Proxy::encrypt('cpf');?>" name="<?php echo Proxy::encrypt('cpf');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('cpf');?>");'/>
		
		<label class="wh200">Sexo: <span>*</span> </label>
		<label class="wh200">Data de Nascimento: <span>*</span> </label>
		<label class="wh200">Escolaridade: <span>*</span> </label>
		
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('sexo');?>" name="<?php echo Proxy::encrypt('sexo');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('sexo');?>");'/>
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('data_nascimento');?>" name="<?php echo Proxy::encrypt('data_nascimento');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('data_inicial');?>");'/>
		<input class="wh176" id="<?php echo Proxy::encrypt('escolaridade');?>" name="<?php echo Proxy::encrypt('escolaridade');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('escolaridade');?>");'/>
		
		<label class="info">.: Endereço :.</label>
		
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
		    <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AM">AM</option>
            <option value="AP">AP</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MG">MG</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="PR">PR</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="RS">RS</option>
            <option value="SC">SC</option>
            <option value="SE">SE</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
		</select>
		<select class="wh190" name="<?php echo Proxy::encrypt('pais');?>">
		     <option value="Brasil">Brasil</option>
		     <option value="Argentina">Outro</option>
		</select>
	
		<label class="info">.: Contato :.</label>
		
		<label class="wh200">Telefone Residencial: <span>*</span> </label>
		<label class="wh200">Telefone Celular: <span>*</span> </label>
		<label class="wh200">Telefone Comercial: <span>*</span> </label>
		
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('telefone_residencial');?>" name="<?php echo Proxy::encrypt('telefone_residencial');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('telefone_residencial');?>");'/>
		<input class="wh176 epc" id="<?php echo Proxy::encrypt('telefone_celular');?>" name="<?php echo Proxy::encrypt('telefone_celular');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('telefone_celular');?>");'/>
		<input class="wh176" id="<?php echo Proxy::encrypt('telefone_comercial');?>" name="<?php echo Proxy::encrypt('telefone_comercial');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('telefone_comercial');?>");'/>
		
		<label class="wh376">E-mail: <span>*</span> </label>
		
		<input class="wh376" id="<?php echo Proxy::encrypt('email');?>" name="<?php echo Proxy::encrypt('email');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('email');?>");'/>
		
		<label class="info">.: Empreendimento :.</label>
		
		<label class="wh376">Segmento: <span>*</span> </label>
		<select class="wh400" name="<?php echo Proxy::encrypt('segmento');?>">
		     <option selected="selected" value="Comércio">Comércio</option>
		     <option selected="selected" value="Tecnologia">Tecnologia</option>
		     <option selected="selected" value="Indústria">Indústria</option>
		     <option selected="selected" value="Serviços">Serviços</option>
		     <option selected="selected" value="Saúde">Saúde</option>
		</select>
		
		<?php include "view/components/Captcha.php"?>
	
		<input type="submit" class='btn btn-primary btn-large' value="Confimar"/>
		
	</form>
</div>
</div>
<?php 
	include 'Parceiros_content.php';
	include 'rodape.php';
?>
