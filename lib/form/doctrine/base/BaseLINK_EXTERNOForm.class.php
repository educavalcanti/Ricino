<?php

/**
 * LINK_EXTERNO form base class.
 *
 * @method LINK_EXTERNO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLINK_EXTERNOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'liex_cd_chave'  => new sfWidgetFormInputHidden(),
      'liex_nm_url'    => new sfWidgetFormInputText(),
      'liex_nm_rotulo' => new sfWidgetFormInputText(),
      'liex_nm_imagem' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'liex_cd_chave'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('liex_cd_chave')), 'empty_value' => $this->getObject()->get('liex_cd_chave'), 'required' => false)),
      'liex_nm_url'    => new sfValidatorString(array('max_length' => 200)),
      'liex_nm_rotulo' => new sfValidatorString(array('max_length' => 100)),
      'liex_nm_imagem' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('link_externo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LINK_EXTERNO';
  }

}
