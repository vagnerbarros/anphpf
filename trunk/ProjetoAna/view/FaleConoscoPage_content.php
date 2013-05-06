<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'Menu_content.php';	
	include 'Topo_content.php';
?>

 <div class="conteudo_page">

	<form class="form_cad" action='' method="post" target="_top">
		
		<label class="altr">* Campos Obrigatórios</label>
		
		<label class="info">.: Fale Conosco :.</label>
				
		<label class="wh400">Nome: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('nome');?>" name="<?php echo Proxy::encrypt('nome');?>" type="text"/>
	
		<label class="wh400">Empresa: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('empresa');?>" name="<?php echo Proxy::encrypt('empresa');?>" type="text"/>
		
		<label class="wh400">Telefone: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('telefone');?>" name="<?php echo Proxy::encrypt('telefone');?>" type="text"/>
		
		<label class="wh400">Assunto: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('telefone');?>" name="<?php echo Proxy::encrypt('telefone');?>" type="text"/>
		
		<label class="wh400">Mensagem: <span>*</span> </label>
		<textarea class="wh376" rows="" cols=""></textarea>
		
		<?php include "view/components/Captcha.php"?>
	
		<input type="submit" class='btn btn-primary btn-large' value="Confimar"/>
		
	</form>
</div>
</div>
<?php 
	include 'rodape.php';
?>
