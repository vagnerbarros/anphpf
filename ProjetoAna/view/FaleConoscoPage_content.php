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
                <p>Obrigado por sua participação! Informamos que em breve entraremos em contato.</p>
            </div>
 <?php }?>

 <div class="conteudo_page">

	<form class="form_cad" action='<?php echo Proxy::action(FaleConoscoAction::$NM_ACTION)?>' method="post" target="_top">
		
		<label class="altr">* Campos Obrigatórios</label>
		
		<label class="info">.: Fale Conosco :.</label>
				
		<label class="wh400">Nome: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('nome');?>" name="<?php echo Proxy::encrypt('nome');?>" type="text"/>
	
		<label class="wh400">Empresa: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('empresa');?>" name="<?php echo Proxy::encrypt('empresa');?>" type="text"/>
		
		<label class="wh400">Telefone: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('telefone');?>" name="<?php echo Proxy::encrypt('telefone');?>" type="text"/>
		
		<label class="wh400">Assunto: <span>*</span> </label>
		<input class="wh376" id="<?php echo Proxy::encrypt('telefone');?>" name="<?php echo Proxy::encrypt('assunto');?>" type="text"/>
		
		<label class="wh400">Mensagem: <span>*</span> </label>
		<textarea id="<?php echo Proxy::encrypt('mensagem');?>" name="<?php echo Proxy::encrypt('mensagem');?>" class="wh376" rows="" cols=""></textarea>
		
		<?php include "view/components/Captcha.php"?>
	
		<input type="submit" class='btn btn-primary btn-large' value="Confimar"/>
		
	</form>
</div>
</div>
<?php 
	include 'Parceiros_content.php';
	include 'rodape.php';
?>