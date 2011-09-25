<?php

/**
 * SECAO_TOPICO form base class.
 *
 * @method SECAO_TOPICO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSECAO_TOPICOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'seto_cd_chave'     => new sfWidgetFormInputHidden(),
      'seto_nm_descricao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'seto_cd_chave'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('seto_cd_chave')), 'empty_value' => $this->getObject()->get('seto_cd_chave'), 'required' => false)),
      'seto_nm_descricao' => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('secao_topico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SECAO_TOPICO';
  }

}
