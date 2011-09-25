<?php

/**
 * Message actions.
 *
 * @package    Ricino
 * @subpackage Message
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MessageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mensagems = Doctrine_Core::getTable('Mensagem')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MensagemForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    
    $mensagem = $request->getParameter('mensagem');
    $mensagem['mens_dt_criacao'] = time();
    $request->setParameter('mensagem', $mensagem);

    $this->form = new MensagemForm();

    if($this->processForm($request, $this->form))
        $this->redirect('Topic/show?topi_cd_chave='.$this->getUser()->getAttribute('currentTopic'));
    else
        $user = $this->getUser()->getAttribute('user');
        $this->topico = Doctrine_Core::getTable('Topico')->findOneByTopiCdChave($this->getUser()->getAttribute('currentTopic'));
        $this->messages = Doctrine::getTable('Mensagem')->findByTopiCdChave($this->topico->getTopiCdChave());
        $this->setTemplate('show', 'Topic');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mensagem = Doctrine_Core::getTable('Mensagem')->find(array($request->getParameter('mens_cd_chave'))), sprintf('Object mensagem does not exist (%s).', $request->getParameter('mens_cd_chave')));
    $this->form = new MensagemForm($mensagem);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mensagem = Doctrine_Core::getTable('Mensagem')->find(array($request->getParameter('mens_cd_chave'))), sprintf('Object mensagem does not exist (%s).', $request->getParameter('mens_cd_chave')));
    $this->form = new MensagemForm($mensagem);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mensagem = Doctrine_Core::getTable('Mensagem')->find(array($request->getParameter('mens_cd_chave'))), sprintf('Object mensagem does not exist (%s).', $request->getParameter('mens_cd_chave')));
    $mensagem->delete();

    $this->redirect('Message/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      return $mensagem = $form->save();

      /*$this->redirect('Message/edit?mens_cd_chave='.$mensagem->getMensCdChave());*/
    }
  }
}
