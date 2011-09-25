<?php

/**
 * NOTICIA form.
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NOTICIAForm extends BaseNOTICIAForm
{
  public function configure()
  {
      $this->setWidget('tino_cd_chave', new sfWidgetFormInputHidden());
  }
}
