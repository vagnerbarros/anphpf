<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'Menu_content.php';	
	include 'Topo_content.php';
	$segmento = $args->get('segmento');
	$fachada = Fachada::getInstance();
	$empreendimentos = $fachada->cadastroEmpreendimento()->buscarPorSegmento($segmento);
?>

	 <div class="conteudo_page">
		<h3>Empresas Convêniadas Por Segmento de <?php echo $segmento?></h3>
		<?php  foreach ($empreendimentos as $empreendimento) { ?>
	 	          <p><?php echo '- ' . $empreendimento->getNomeFantasia();?></p><br/>
		<?php }?>
	</div>
    
</div>

<?php 
	include 'Parceiros_content.php';
	include 'rodape.php';
?>
