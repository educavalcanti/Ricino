<?php

/**
 * Home actions.
 *
 * @package    Ricino
 * @subpackage Home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class HomeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {      
  }
  
  public function executeLogin(sfWebRequest $request)
  {
      $user = $this->getUser();
      $user->setAttribute('loginError', '');
      if (!$user->isAuthenticated())
      {
          if(strcasecmp($this->actionName, 'LOGIN') != 0)
          {
            return $this->redirect('homepage');
          }
          else
          {
            $values = $request->getPostParameters();
            if($values)
            {
                if(!$this->getUser()->Signin($values))
                    $user->setAttribute('loginError', 'Usuário e/ou Senha Inválidos');
            }
          }
      }
      $credentials = $user->getCredentials();
      if($credentials[0] == sfConfig::get('app_ADMIN'))
      {
          return $this->redirect('homepage');
      }
      else
      {    
          $this->getUser()->Signout();
          $user->setAttribute('loginError', 'Você não tem permissão para acessar essa página');
      }
      return $this->redirect('homepage');
  }

  public function executeSignout(sfWebRequest $request)
  {
    $this->getUser()->Signout();

    return $this->redirect('@homepage');
  }
}
