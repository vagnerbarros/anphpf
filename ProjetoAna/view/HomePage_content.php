<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'Menu_content.php';	
	include 'Topo_content.php';
?>

	 <div class="conteudo_page">
		<h3>Bem-Vindo</h3>
		<img alt="" src="<?php echo Constants::$_IMPORT_IMG;?>logotipo.png" width="500">
        <p>Ficamos felizes com sua visita em nosso site. 
        <br/>
    	Esperamos que voc� encontre conosco solu��es quem venham a contribuir na tomada de decis�es de sua empresa.
    	<br/>    		
		<a href="<?php echo Proxy::page(SobrePage::$NM_PAGINA)?>">Conhe�a-nos</a>
		</p>
	</div>
    
</div>

<?php 
	include 'Parceiros_content.php';
	include 'rodape.php';
?>
