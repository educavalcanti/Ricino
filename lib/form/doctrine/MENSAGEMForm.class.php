<?php

/**
 * MENSAGEM form.
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MENSAGEMForm extends BaseMENSAGEMForm
{
  public function configure()
  {
      $this->setWidget('usua_cd_criador', new sfWidgetFormInputHidden());
      $this->setWidget('topi_cd_chave', new sfWidgetFormInputHidden());
      $this->setWidget('mens_dt_criacao', new sfWidgetFormInputHidden());
  }
}
