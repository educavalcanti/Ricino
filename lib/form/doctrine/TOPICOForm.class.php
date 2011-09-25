<?php

/**
 * TOPICO form.
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TOPICOForm extends BaseTOPICOForm
{
  public function configure()
  {
      $this->setWidget('usua_cd_criador', new sfWidgetFormInputHidden());
      $this->setWidget('topi_dt_criacao', new sfWidgetFormInputHidden());
      
      $user = sfContext::getInstance()->getUser();
      
      $loggedUser = $user->getAttribute('user');
      
      $this->setDefault('usua_cd_criador', $loggedUser->getUsuaCdChave());
      
      $this->setDefault('topi_dt_criacao', time());
  }
}
