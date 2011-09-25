<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Admin</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
    <body>
      <div id="global_admin_geral">
        <div id="global_topo">
            <div id="topo">
                <a href="<?php echo url_for('Home/index'); ?>"><div id="logo"></div></a>
            </div>
        </div>
        <div id="global_meio">
            <div id="menu_lateral">
                <ul id="menucontainer">
                    <?php
                        $user = sfContext::getInstance()->getUser();
                        $credentials = $user->getCredentials();                            
                        if(($user->isAuthenticated()) && ($credentials[0] == sfConfig::get('app_ADMIN')))
                        {
                    ?>
                            <li><a href="<?php echo url_for('Topic/index'); ?>">Fórum</a></li>
                            <li><a href="<?php echo url_for('Message/index'); ?>">Mensagens</a></li>
                            <li><a href="<?php echo url_for('News/index'); ?>">Noticias</a></li>
                            <li><a href="<?php echo url_for('Notice/index'); ?>">Avisos</a></li>
                            <li><a href="<?php echo url_for('TopicSection/index'); ?>">Grandes Areas</a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <div id="conteudo_admin">
                <?php echo $sf_content ?>
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
