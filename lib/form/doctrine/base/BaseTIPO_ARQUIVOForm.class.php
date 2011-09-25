<?php

/**
 * TIPO_ARQUIVO form base class.
 *
 * @method TIPO_ARQUIVO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_ARQUIVOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tiar_cd_chave'     => new sfWidgetFormInputHidden(),
      'tiar_nm_descricao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tiar_cd_chave'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tiar_cd_chave')), 'empty_value' => $this->getObject()->get('tiar_cd_chave'), 'required' => false)),
      'tiar_nm_descricao' => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('tipo_arquivo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_ARQUIVO';
  }

}
