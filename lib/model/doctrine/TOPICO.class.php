<?php

/**
 * TOPICO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Ricino
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TOPICO extends BaseTOPICO
{
    public function __toString()
    {
        return $this->getUSUARIO()." em ". $this->getTopiDtCriacao();
    }
    
    public function isOwner()
    {
        $user = sfContext::getInstance()->getUser();
        
        $userCredentials = $user->getCredentials();
        
        $loggedUser = $user->getAttribute('user');
        
        if(($loggedUser->getUsuaCdChave() == $this->getUsuaCdCriador()) || ($userCredentials[0] == sfConfig::get('app_ADMIN')))
            return true;
        return false;
    }
}
