<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'Menu_content.php';	
	include 'Topo_content.php';
?>

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
		     <option value="Alagoas">Alagoas</option>
		     <option value="São Paulo">São Paulo</option>
		     <option value="Rio de Janeiro">Rio de Janeiro</option>
		     <option value="Bahia">Bahia</option>
		     <option value="Pernambuco">Pernambuco</option>
		</select>
		<select class="wh190" name="<?php echo Proxy::encrypt('pais');?>">
		     <option value="Brasil">Brasil</option>
		     <option value="Argentina">Argentina</option>
		     <option value="Estados Unidos">Estados Unidos</option>
		     <option value="Canadá">Canadá</option>
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
		     <option selected="selected" value="1">Tal 1</option>
		     <option selected="selected" value="2">Tal 2</option>
		     <option selected="selected" value="3">Tal 3</option>
		     <option selected="selected" value="4">Tal 4</option>
		</select>
		
		<?php include "view/components/Captcha.php"?>
	
		<input type="submit" class='btn btn-primary btn-large' value="Confimar"/>
		
	</form>
</div>
</div>
<?php 
	include 'rodape.php';
?>
