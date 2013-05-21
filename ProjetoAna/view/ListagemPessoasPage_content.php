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
		<h3>Pessoas Cadastradas</h3>
		<div id="demo">
		
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
			<thead>
				<tr>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Telefone</th>
				</tr>
			</thead>
			
			<tbody>
			
			<?php for($i=0; $i<100; $i++){ ?>
                <tr>
                    <td align="center"><?php echo 'Wolney ' . $i;?></td>
                    <td align="center">oi</td>
                    <td align="center">oi</td>
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
