<?php

/**
 * TIPO_USUARIO form base class.
 *
 * @method TIPO_USUARIO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_USUARIOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tius_cd_chave'     => new sfWidgetFormInputHidden(),
      'tius_nm_descricao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tius_cd_chave'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tius_cd_chave')), 'empty_value' => $this->getObject()->get('tius_cd_chave'), 'required' => false)),
      'tius_nm_descricao' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_USUARIO';
  }

}
