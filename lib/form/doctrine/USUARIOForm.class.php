<?php

/**
 * USUARIO form.
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class USUARIOForm extends BaseUSUARIOForm
{
  public function configure()
  {
      $this->setWidget('tius_cd_chave', new sfWidgetFormInputHidden());
      
      $this->setDefault('tius_cd_chave', 4);
  }
}
