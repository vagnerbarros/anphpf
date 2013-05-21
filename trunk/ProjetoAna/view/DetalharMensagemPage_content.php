<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'MenuAdmin_content.php';
	$id = $args->get('id');
	$fachada = Fachada::getInstance();
	$mensagem = $fachada->cadastroMensagem()->buscarId($id);
?>

        <script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				$('#example').dataTable().columnFilter();
				
			} );
		</script>
        
		<script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17838786-4']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +                     '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
		
		<div class="conteudo_page">
			<h3>Detalhes da Mensagem</h3>
				<div id="demo">
					<div>Nome:<?php	echo $mensagem->getNome();?></div>
					<div>Empresa:<?php echo $mensagem->getEmpresa();?></div>
					<div>Telefone:<?php	echo $mensagem->getTelefone();?></div>
					<div>Assunto:<?php	echo $mensagem->getAssunto();?></div>
					<div>Mensagem:<?php	echo $mensagem->getMensagem();?></div>
					<br>
					<a href="<?php echo Proxy::page(ListagemMensagemPage::$NM_PAGINA);?>">Listagem</a>
					<a href="<?php echo Proxy::action(RemoverMensagemAction::$NM_ACTION, array(Proxy::encrypt('id')=>$mensagem->getId()));?>">Excluir</a><br>
				</div>
		</div>
    
</div>

<?php 
	include 'rodape.php';
?>
