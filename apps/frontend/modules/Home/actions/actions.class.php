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
      $this->noticias = Doctrine_Core::getTable('Noticia')
        ->createQuery('a')
        ->where('a.tino_cd_chave = ?', 1)
        ->orderBy('a.noti_dt_publicacao DESC')
        ->limit(5)
        ->execute();
      
      $this->avisos = Doctrine_Core::getTable('Noticia')
        ->createQuery('a')
        ->where('a.tino_cd_chave = ?', 2)
        ->orderBy('a.noti_dt_publicacao DESC')
        ->limit(5)
        ->execute();
  }

  public function executeConvenio(sfWebRequest $request)
  {
  }

  public function executeGestao(sfWebRequest $request)
  {
  }

  public function executeGovernanca(sfWebRequest $request)
  {
  }

  public function executeInstituicoes(sfWebRequest $request)
  {
  }

  public function executeNucleos(sfWebRequest $request)
  {
  }

  public function executePlanoAtual(sfWebRequest $request)
  {
  }

  public function executeRicino(sfWebRequest $request)
  {
  }

  public function executeNoticias(sfWebRequest $request)
  {
  }
}
