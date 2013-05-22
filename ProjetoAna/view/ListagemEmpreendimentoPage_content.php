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
		<h3>Empreendimentos Cadastrados</h3>
		<div id="demo">
		
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
			<thead>
				<tr>
					<th>Razão Social</th>
					<th>CNPJ</th>
					<th>Segmento</th>
					<th>Telefone</th>
					<th>Detalhar</th>
				</tr>
			</thead>
			
			<tbody>
			
			<?php 
			     $fachada = Fachada::getInstance();
			     $empreendimentos = $fachada->cadastroEmpreendimento()->listarEmpreendimentos();
			?>
			
			<?php foreach ($empreendimentos as $empreendimento){ ?>
                <tr>
                    <td align="center"><?php echo $empreendimento->getRazaoSocial();?></td>
                    <td align="center"><?php echo $empreendimento->getCnpj();?></td>
                    <td align="center"><?php echo $empreendimento->getSegmento();?></td>
                    <td align="center"><?php echo $empreendimento->getTelefoneComercial();?></td>
                    <td align="center"><a href="<?php echo Proxy::page(DetalharEmpreendimentoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$empreendimento->getId()));?>">>></a></td>
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
