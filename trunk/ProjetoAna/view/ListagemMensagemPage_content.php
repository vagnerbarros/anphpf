<div id="mainwrap">																																																																																																																																																																																																																																																																																																																				
<?php 
	include 'MenuAdmin_content.php';	
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
		<h3>Mensagens Cadastradas</h3>
		<div id="demo">
		
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Empresa</th>
					<th>Assunto</th>
					<th>Detalhar</th>
				</tr>
			</thead>
			
			<tbody>
			
			<?php
			$fachada = Fachada::getInstance();
			$mensagens = $fachada->cadastroMensagem()->listar();
			foreach ($mensagens as $mensagem){ ?>
                <tr>
                    <td align="center"><?php echo $mensagem->getNome();?></td>
                    <td align="center"><?php echo $mensagem->getEmpresa();?></td>
                    <td align="center"><?php echo $mensagem->getAssunto();?></td>
                    <td align="center"><a href="<?php echo Proxy::page(DetalharMensagemPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$mensagem->getId()));?>">>></a></td>
                </tr>
            <?php  } ?>    
                
            </tbody>
        </table>
        </div>
		
		
		
	</div>
    
</div>

<?php 
	include 'rodape.php';
?>
