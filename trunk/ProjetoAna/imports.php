<?php
require_once("util/Constants.php");
require_once("util/Datas.php");
require_once("util/Messages.php");
require_once("util/SessionManager.php");
require_once("util/ACL.php");
require_once("util/Page.php");
require_once("util/Form.php");
require_once("util/Entidade.php");
require_once("util/Action.php");
require_once("util/Forward.php");
require_once("util/Imports.php");
require_once("util/ConexaoBD.php");
require_once('util/Proxy.php');

Proxy::reset();

//DOMINIOS
//include 'model/dominio/TipoPerfil.php';

//MODEL
require_once("model/fachada/Fachada.php");


//Registra as Pages
Imports::page("HomePage");
Imports::page("SobrePage");
Imports::page("CadastrarPessoaPage");
Imports::page("CadastrarEmpreendimentoPage");
Imports::page("FaleConoscoPage");
Imports::page("ProgramacaoPage");
Imports::page("AdminPage");
Imports::page("ListagemPessoasPage");
Imports::page("ListagemEmpreendimentoPage");
Imports::page("ListagemMensagemPage");
Imports::page("DetalharMensagemPage");
Imports::page("DetalharPessoaPage");
Imports::page("DetalharEmpreendimentoPage");
Imports::page("FeiraPage");
Imports::page("CursoPage");
Imports::page("EmpreendimentosSegmentosPage");

//Registra as Actions
Imports::action("CadastrarPessoaAction");
Imports::action("CadastrarEmpreendimentoAction");
Imports::action("FaleConoscoAction");
Imports::action("RemoverMensagemAction");

?>
