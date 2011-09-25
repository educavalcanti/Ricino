<?php

/**
 * Topic actions.
 *
 * @package    Ricino
 * @subpackage Topic
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TopicActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if(($credentials[0] == sfConfig::get('app_ADMIN')) || ($credentials[0] == sfConfig::get('app_MANAGER')))
          {
              $this->redirect('Topic/admin');
              
          }
      }
    $this->topicos = Doctrine_Core::getTable('Topico')
      ->createQuery('a')
      ->execute();
  }

  public function executeAdmin(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if(($credentials[0] != sfConfig::get('app_ADMIN')) && ($credentials[0] != sfConfig::get('app_MANAGER')))
          {
              $this->redirect('Topic/index');
              
          }
      }
    $this->topicos = Doctrine_Core::getTable('Topico')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
      $user = $this->getUser()->getAttribute('user');
      
      $this->forward404Unless($this->topico = Doctrine_Core::getTable('Topico')->find(array($request->getParameter('topi_cd_chave'))), sprintf('Object topico does not exist (%s).', $request->getParameter('topi_cd_chave')));
      
      $this->messages = Doctrine::getTable('Mensagem')->findByTopiCdChave($this->topico->getTopiCdChave());
      
      $this->getUser()->setAttribute('currentTopic', $this->topico->getTopiCdChave());
      
      $message = new Mensagem();
      
      $message->setTopiCdChave($this->topico->getTopiCdChave());
      
      $message->setUsuaCdCriador($user->getUsuaCdChave());
      
      $this->form = new MensagemForm($message);
  }

  public function executeNew(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if(($credentials[0] != sfConfig::get('app_ADMIN')) && ($credentials[0] != sfConfig::get('app_MANAGER')))
          {
              $this->redirect('Topic/index');
              
          }
      }
      $user = $this->getUser()->getAttribute('user');      
      
      $this->form = new TopicoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if(($credentials[0] != sfConfig::get('app_ADMIN')) && ($credentials[0] != sfConfig::get('app_MANAGER')))
          {
              $this->redirect('Topic/index');
              
          }
      }
    $this->forward404Unless($request->isMethod(sfRequest::POST));    

    $this->form = new TopicoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if(($credentials[0] != sfConfig::get('app_ADMIN')) && ($credentials[0] != sfConfig::get('app_MANAGER')))
          {
              $this->redirect('Topic/index');
              
          }
      }
    $this->forward404Unless($topico = Doctrine_Core::getTable('Topico')->find(array($request->getParameter('topi_cd_chave'))), sprintf('Object topico does not exist (%s).', $request->getParameter('topi_cd_chave')));
    
    if($topico->isOwner())
    {
        $this->form = new TopicoForm($topico);
    }
    else
    {
        $this->redirect('Topic/index');
    }
  }

  public function executeUpdate(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if(($credentials[0] != sfConfig::get('app_ADMIN')) && ($credentials[0] != sfConfig::get('app_MANAGER')))
          {
              $this->redirect('Topic/index');
              
          }
      }
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($topico = Doctrine_Core::getTable('Topico')->find(array($request->getParameter('topi_cd_chave'))), sprintf('Object topico does not exist (%s).', $request->getParameter('topi_cd_chave')));
    
    if($topico->isOwner())
    {
        $this->form = new TopicoForm($topico);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }
    else
    {
        $this->redirect('Topic/index');
    }
  }

  public function executeDelete(sfWebRequest $request)
  {
      $user = $this->getUser();
      
      if($user->isAuthenticated())
      {
          $credentials = $user->getCredentials();
          if(($credentials[0] != sfConfig::get('app_ADMIN')) && ($credentials[0] != sfConfig::get('app_MANAGER')))
          {
              $this->redirect('Topic/index');
              
          }
      }
    $request->checkCSRFProtection();

    $this->forward404Unless($topico = Doctrine_Core::getTable('Topico')->find(array($request->getParameter('topi_cd_chave'))), sprintf('Object topico does not exist (%s).', $request->getParameter('topi_cd_chave')));
    $topico->delete();

    $this->redirect('Topic/admin');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $topico = $form->save();

      $this->redirect('Topic/admin');
    }
  }
}
