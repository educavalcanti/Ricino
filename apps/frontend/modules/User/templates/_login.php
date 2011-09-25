<?php
    $user = sfContext::getInstance()->getUser();
    if($user->isAuthenticated())
    {
        $credentials = $user->getCredentials();
        $user = $user->getAttribute('user');
    ?>
        <span>Bem Vindo <?php echo $user->getUsuaNmUsuario();?></span>
        <?php
        if($credentials[0] == sfConfig::get('app_ADMIN'))
        {
        ?>
        <span><a href="http://www.ricino.org.br/Admin/">Admin</a></span>
        <?php
        }
        ?>
        <a href="<?php echo url_for('User/signout'); ?>">Sair</a>
    <?php
    }
    else
    {
        $count = substr_count($user->getAttribute("loginError"), "permissão");
        
        if($count)
            $user->setAttribute("loginError", "");

?>
        <p class="title">ÁREA RESTRITA</p>
        <span class="loginError"><?php echo $user->getAttribute("loginError"); ?></span>
        <form id="loginForm" action="<?php echo url_for('User/login')?>" method="POST">
            <input type="text" class="inputText" name="usua_nm_usuario" size="15" maxlength="20"/>
            <input type="password" class="inputText" name="usua_cd_senha" size="15" maxlength="20"/>
            <input type="submit" class="submit button" value="ENTRAR"/>
        </form>
        <p id="lembrete">Para lembrar sua senha <a href="#" target="_blank">clique aqui</a></p>
<?php
    }
?>