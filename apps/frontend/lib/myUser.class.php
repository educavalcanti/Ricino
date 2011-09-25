<?php

class myUser extends sfBasicSecurityUser
{
    public function Signin($user)
    {
        if(($user['usua_nm_usuario'] == '') || ($user['usua_cd_senha'] == ''))
        {
            return false;
        }

        $username = $user['usua_nm_usuario'];
        $password = $user['usua_cd_senha'];

        $user = Doctrine::getTable('Usuario')->findOneByUsuaNmUsuarioAndUsuaCdSenha($username, $password);

        if($user)
        {
            $this->addCredential($user->getTiusCdChave());
            $this->setAuthenticated(true);
            $this->setAttribute('user', $user);
            return true;
        }
        return false;
    }

    public function Signout()
    {
        $this->setAuthenticated(false);
        $this->credentials = NULL;
        $this->setAttribute('user', '');
    }
}
