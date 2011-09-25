<?php

/**
 * STATUS_PROJETO form base class.
 *
 * @method STATUS_PROJETO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSTATUS_PROJETOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'stpr_cd_chave'     => new sfWidgetFormInputHidden(),
      'stpr_nm_descricao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'stpr_cd_chave'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('stpr_cd_chave')), 'empty_value' => $this->getObject()->get('stpr_cd_chave'), 'required' => false)),
      'stpr_nm_descricao' => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('status_projeto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'STATUS_PROJETO';
  }

}
