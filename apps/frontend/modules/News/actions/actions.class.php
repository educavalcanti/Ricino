<?php

/**
 * News actions.
 *
 * @package    Ricino
 * @subpackage News
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if($credentials[0] == sfConfig::get('app_ADMIN'))
          {
              $this->redirect('News/admin');
              
          }
      }
    $this->noticias = Doctrine_Core::getTable('Noticia')
      ->createQuery('a')
      ->where('a.tino_cd_chave = ?', 1)
      ->execute();
  }
  
  public function executeIndexShow(sfWebRequest $request)
  {
    $this->noticias = Doctrine_Core::getTable('Noticia')
        ->createQuery('a')
        ->where('a.tino_cd_chave = ?', 1)
        ->orderBy('a.noti_dt_publicacao DESC')
        ->limit(5)
        ->execute();
  }

  public function executeAdmin(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if($credentials[0] != sfConfig::get('app_ADMIN'))
          {
              $this->redirect('News/index');
              
          }
      }
      $this->noticias = Doctrine_Core::getTable('Noticia')
      ->createQuery('a')
      ->where('a.tino_cd_chave = ?', 1)
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
      $this->forward404Unless($this->noticia = Doctrine_Core::getTable('Noticia')->find(array($request->getParameter('noti_cd_chave'))), sprintf('Object noticia does not exist (%s).', $request->getParameter('noti_cd_chave')));
  }

  public function executeNew(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if($credentials[0] != sfConfig::get('app_ADMIN'))
          {
              $this->redirect('News/index');
              
          }
      }
      $noticia = new Noticia();
    
    $noticia->setTinoCdChave(1);
    
    $this->form = new NoticiaForm($noticia);
  }

  public function executeCreate(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if($credentials[0] != sfConfig::get('app_ADMIN'))
          {
              $this->redirect('News/index');
              
          }
      }
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new NoticiaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if($credentials[0] != sfConfig::get('app_ADMIN'))
          {
              $this->redirect('News/index');
              
          }
      }
    $this->forward404Unless($noticia = Doctrine_Core::getTable('Noticia')->find(array($request->getParameter('noti_cd_chave'))), sprintf('Object noticia does not exist (%s).', $request->getParameter('noti_cd_chave')));
    $this->form = new NoticiaForm($noticia);
  }

  public function executeUpdate(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if($credentials[0] != sfConfig::get('app_ADMIN'))
          {
              $this->redirect('News/index');
              
          }
      }
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($noticia = Doctrine_Core::getTable('Noticia')->find(array($request->getParameter('noti_cd_chave'))), sprintf('Object noticia does not exist (%s).', $request->getParameter('noti_cd_chave')));
    $this->form = new NoticiaForm($noticia);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if($credentials[0] != sfConfig::get('app_ADMIN'))
          {
              $this->redirect('News/index');
              
          }
      }
    $request->checkCSRFProtection();

    $this->forward404Unless($noticia = Doctrine_Core::getTable('Noticia')->find(array($request->getParameter('noti_cd_chave'))), sprintf('Object noticia does not exist (%s).', $request->getParameter('noti_cd_chave')));
    $noticia->delete();

    $this->redirect('News/admin');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $noticia = $form->save();

      $this->redirect('News/admin');
    }
  }
}
