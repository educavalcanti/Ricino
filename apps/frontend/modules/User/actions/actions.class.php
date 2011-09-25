<?php

/**
 * User actions.
 *
 * @package    Ricino
 * @subpackage User
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->usuarios = Doctrine_Core::getTable('Usuario')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UsuarioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UsuarioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($usuario = Doctrine_Core::getTable('Usuario')->find(array($request->getParameter('usua_cd_chave'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('usua_cd_chave')));
    $this->form = new UsuarioForm($usuario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($usuario = Doctrine_Core::getTable('Usuario')->find(array($request->getParameter('usua_cd_chave'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('usua_cd_chave')));
    $this->form = new UsuarioForm($usuario);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($usuario = Doctrine_Core::getTable('Usuario')->find(array($request->getParameter('usua_cd_chave'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('usua_cd_chave')));
    $usuario->delete();

    $this->redirect('User/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      return $usuario = $form->save();
    }
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
      return $this->redirect('homepage');
  }

  public function executeSignout(sfWebRequest $request)
  {
    $this->getUser()->Signout();

    return $this->redirect('@homepage');
  }
}
