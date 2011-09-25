<?php
    $user = sfContext::getInstance()->getUser();
    $credentials = $user->getCredentials();
    if(($user->isAuthenticated()) && ($credentials[0] == sfConfig::get('app_ADMIN')))
    {
        $credentials = $user->getCredentials();
        $user = $user->getAttribute('user');
        ?>
            <span>Bem Vindo <?php echo $user->getUsuaNmUsuario();?></span>
            <a href="<?php echo url_for('Home/signout'); ?>">Sair</a>
        <?php
    }
    else
    {
        if($user->isAuthenticated())
        {
            $user->setAttribute("loginError", "Você não tem permissão para acessar essa página");
        }
?>
        <p class="title">ÁREA RESTRITA</p>
        <span class="loginError"><?php echo $user->getAttribute("loginError"); ?></span>
        <form id="loginForm" action="<?php echo url_for('Home/login')?>" method="POST">
            Usuário: <input type="text" class="" name="usua_nm_usuario" size="15" maxlength="20"/><br>
            Senha: <input type="password" class="" name="usua_cd_senha" size="15" maxlength="20"/><br>
            <input type="submit" class="submit button" value="ENTRAR"/>
        </form>
<?php
    }
?>