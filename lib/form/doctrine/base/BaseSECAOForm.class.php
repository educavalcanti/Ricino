<?php

/**
 * SECAO form base class.
 *
 * @method SECAO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSECAOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'seca_cd_chave'     => new sfWidgetFormInputHidden(),
      'seca_nm_descricao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'seca_cd_chave'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('seca_cd_chave')), 'empty_value' => $this->getObject()->get('seca_cd_chave'), 'required' => false)),
      'seca_nm_descricao' => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('secao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SECAO';
  }

}
