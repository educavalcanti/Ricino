<?php

/**
 * EVENTO form base class.
 *
 * @method EVENTO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEVENTOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'even_cd_chave'       => new sfWidgetFormInputHidden(),
      'even_dt_realizacao'  => new sfWidgetFormDateTime(),
      'even_nm_local'       => new sfWidgetFormInputText(),
      'even_nm_organizacao' => new sfWidgetFormInputText(),
      'even_nm_hotsite'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'even_cd_chave'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('even_cd_chave')), 'empty_value' => $this->getObject()->get('even_cd_chave'), 'required' => false)),
      'even_dt_realizacao'  => new sfValidatorDateTime(array('required' => false)),
      'even_nm_local'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'even_nm_organizacao' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'even_nm_hotsite'     => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EVENTO';
  }

}
