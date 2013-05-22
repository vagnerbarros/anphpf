<div id="leftcol">
	
	<a href="index.php" id="logo">
		<img alt="" src="<?php echo Constants::$_IMPORT_IMG;?>logotipo.png" width="220">
	</a>
	
	<div class="clr"></div>
	
	<div id="mainnav">
		<ul>
			<li><a href="index.php"><span>Início</span>
			</a>
			</li>
			<li><a href="<?php echo Proxy::page(SobrePage::$NM_PAGINA)?>"><span>Quem Somos</span>
			</a>
			</li>
			<li><a href="<?php echo Proxy::page(CadastrarPessoaPage::$NM_PAGINA)?>"><span>Cadastre-se - PESSOA FÍSICA</span>
			</a>
			</li>
			<li><a href="<?php echo Proxy::page(CadastrarEmpreendimentoPage::$NM_PAGINA)?>"><span>Cadastre-se - PESSOA JURÍDICA</span>
			</a>
			</li>
			<li><a href="<?php echo Proxy::page(ProgramacaoPage::$NM_PAGINA)?>"><span>Programação</span>
			</a>
			</li>
			<li><a href="<?php echo Proxy::page(FaleConoscoPage::$NM_PAGINA)?>"><span>Fale Conosco</span>
			</a>
			</li>
		</ul>
	</div>
	<div class="module-box">
		<h2 class="blue">Notícias</h2>
		<div class="module-content">
			<ul class="none">
				
				<li><strong><a href="#" class="black">22 Maio 2013</a>
				</strong>
					<p>FAFICA REALIZA FEIRA DO ALUNO EMPREENDEDOR, GLAV ESTARÁ PRESENTE NESTE EVENTO</p> <a href="<?php echo Proxy::page(FeiraPage::$NM_PAGINA)?>">Leia mais</a></li>
				
				<li><strong><a href="#" class="black">22 Maio 2013</a>
				</strong>
					<p>GLAV OFERECE CURSOS PARA TREINAMENTO E APERFEIÇOAMENTO DO SEU NEGÓCIO</p> <a href="<?php echo Proxy::page(CursoPage::$NM_PAGINA)?>">Leia Mais</a></li>
			
			</ul>
		</div>
	</div>
	<div class="module-box">
		<h2 class="blue">Seguimentos</h2>
		<div class="module-content">
			<ul class="none">
				<li><strong> &bull; <a href="<?php echo Proxy::page(EmpreendimentosSegmentosPage::$NM_PAGINA, array(Proxy::encrypt('segmento')=>'Comércio'));?>">Comércio</a></strong></li>
				<li><strong> &bull; <a href="<?php echo Proxy::page(EmpreendimentosSegmentosPage::$NM_PAGINA, array(Proxy::encrypt('segmento')=>'Tecnologia'));?>">Tecnologia</a></strong></li>
				<li><strong> &bull; <a href="<?php echo Proxy::page(EmpreendimentosSegmentosPage::$NM_PAGINA, array(Proxy::encrypt('segmento')=>'Indústria'));?>">Indústria</a></strong></li>
				<li><strong> &bull; <a href="<?php echo Proxy::page(EmpreendimentosSegmentosPage::$NM_PAGINA, array(Proxy::encrypt('segmento')=>'Serviços'));?>">Serviços</a></strong></li>
				<li><strong> &bull; <a href="<?php echo Proxy::page(EmpreendimentosSegmentosPage::$NM_PAGINA, array(Proxy::encrypt('segmento')=>'Saúde'));?>">Saúde</a></strong></li>
			</ul>
		</div>
	</div>
</div>
