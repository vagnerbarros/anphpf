<div id="leftcol">
	
	<a href="index.php" id="logo">
		<img alt="" src="<?php echo Constants::$_IMPORT_IMG;?>logotipo.png" width="220">
	</a>
	
	<div class="clr"></div>
	
	<div id="mainnav">
		<ul>
			<li><a href="<?php echo Proxy::page(AdminPage::$NM_PAGINA)?>"><span>In�cio</span>
			</a>
			</li>
			<li><a href="<?php echo Proxy::page(ListagemPessoasPage::$NM_PAGINA)?>"><span>Consultar Pessoas</span>
			</a>
			</li>
			<li><a href="<?php echo Proxy::page(ListagemEmpreendimentoPage::$NM_PAGINA)?>"><span>Consultar Empreendimentos</span>
			</a>
			</li>
			<li><a href="<?php echo Proxy::page(ListagemMensagemPage::$NM_PAGINA)?>"><span>Consultar Mensagens</span>
			</a>
			</li>

		</ul>
	</div>
	
</div>
