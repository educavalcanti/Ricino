<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="global_geral">
        <div id="global_topo">
            <div id="topo">
                <div id="logo"></div>
                <div id="area_restrita">
                    <div id="acesso">
                        <?php
                            include_partial('User/login');
                        ?>
                    </div>
                    <p id="data"><?php echo 'Rio de Janeiro, ' . date("d/m/Y");?>
                    </p>
                </div>
            </div>
        </div>
        <div id="global_meio">
            <div id="meio">
                <div id="menu_lateral">
                    <ul id="menucontainer">
                        <li><a href="<?php echo url_for('Home/index'); ?>">HOME</a></li>
                        <li><a href="#">INSTITUCIONAL</a>
                            <ul id="submenu1">
                                <li class="INSTITUCIONAL"><a href="<?php echo url_for('Home/ricino'); ?>">O QUE É A RICINO</a></li>
                                <li class="INSTITUCIONAL"><a href="<?php echo url_for('Home/instituicoes'); ?>">INSTITUIÇÕES PROMOTORAS</a></li>
                                <li class="INSTITUCIONAL"><a href="<?php echo url_for('Home/convenio'); ?>">CONVÊNIO</a></li>
                                <li class="INSTITUCIONAL"><a href="<?php echo url_for('Home/governanca'); ?>">GOVERNANÇA</a></li>
                                <li class="INSTITUCIONAL"><a href="<?php echo url_for('Home/nucleos'); ?>">NÚCLEOS</a></li>
                                <li class="INSTITUCIONAL"><a href="<?php echo url_for('Home/gestao'); ?>">GESTÃO</a></li>
                            </ul>
                        </li>
                        <li><a href="#">PLANO ESTRATÉGICO ANUAL</a>
                            <ul id="submenu1">
                                <li class="INSTITUCIONAL"><a href="<?php echo url_for('Home/planoAtual'); ?>">PLANO ATUAL</a></li>
                                <li class="INSTITUCIONAL"><a href="#">PLANOS ANTERIORES</a></li>
                            </ul>
                        </li>
                        <li><a href="#">RELATÓRIO ANUAL</a>
                            <ul id="submenu1">
                                <li class="INSTITUCIONAL"><a href="#">ÚLTIMO RELATÓRIO</a></li>
                                <li class="INSTITUCIONAL"><a href="#">ANTERIORES</a></li>
                            </ul>
                        </li>
                        <li><a href="#">PROJETOS EM ANDAMENTO</a>
                            <ul id="submenu1">
                                <li class="INSTITUCIONAL"><a href="#">ÚLTIMO RELATÓRIO</a></li>
                                <li class="INSTITUCIONAL"><a href="#">ANTERIORES</a></li>
                            </ul>
                        </li>
                        <li><a href="#">PROJETOS ENCERRADOS</a>
                            <ul id="submenu1">
                                <li class="INSTITUCIONAL"><a href="#">RELATÓRIOS/DOCUMENTOS</a></li>
                                <li class="INSTITUCIONAL"><a href="#">ANTERIORES</a></li>
                            </ul>
                        </li>
                        <?php
                            $user = sfContext::getInstance()->getUser();
                            if($user->isAuthenticated())
                            {
                        ?>
                                <li><a href="<?php echo url_for('Topic/index'); ?>">FÓRUM DE DISCUSSÃO</a>
                                    <ul id="submenu1">
                                        <li class="INSTITUCIONAL"><a href="#">COMITÊS GESTORES</a></li>
                                        <li class="INSTITUCIONAL"><a href="#">PROPOSTAS DE PROJETO</a></li>
                                        <li class="INSTITUCIONAL"><a href="#">TEMÁTICOS</a></li>
                                        <li class="INSTITUCIONAL"><a href="#">NOVOS FÓRUNS</a></li>
                                    </ul>
                                </li>
                        <?php
                            }
                        ?>
                        <li><a href="#">EVENTOS</a>
                            <ul id="submenu1">
                                <li class="INSTITUCIONAL"><a href="#">LISTAGEM DE EVENTOS</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ÁREA DE DOWNLOAD</a>
                            <ul id="submenu1">
                                <li class="INSTITUCIONAL"><a href="#">DOCUMENTOS</a></li>
                                <li class="INSTITUCIONAL"><a href="#">SOFTWARE</a></li>
                                <li class="INSTITUCIONAL"><a href="#">OUTROS DADOS</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo url_for('News/index'); ?>">NOTÍCIAS</a>
                            <ul id="submenu1">
                                <li class="INSTITUCIONAL"><a href="#">BOLETIM</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo url_for('Notice/index'); ?>">AVISOS</a></li>
                        <li><a href="#">AJUDA</a></li>
                    </ul>
                </div>
                <div id="conteudo">
                    <?php echo $sf_content ?>
                </div>
            </div>
            <div id="global_rodape">
                <div id="rodape">
                    <div id="endereco"><p>Av. Presidente Vargas, 542, Sala 713, Centro - RJ. Tel.: 2283-2482 / 2263-9079.</p></div>
                    <div id="logo_menor"></div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
