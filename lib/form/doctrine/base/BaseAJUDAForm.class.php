<?php

/**
 * AJUDA form base class.
 *
 * @method AJUDA getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAJUDAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ajud_cd_chave'    => new sfWidgetFormInputHidden(),
      'ajud_nm_assunto'  => new sfWidgetFormInputText(),
      'ajud_nm_pergunta' => new sfWidgetFormInputText(),
      'ajud_tx_resposta' => new sfWidgetFormTextarea(),
      'ajud_dt_inclusao' => new sfWidgetFormDateTime(),
      'ajud_nm_autor'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ajud_cd_chave'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ajud_cd_chave')), 'empty_value' => $this->getObject()->get('ajud_cd_chave'), 'required' => false)),
      'ajud_nm_assunto'  => new sfValidatorString(array('max_length' => 200)),
      'ajud_nm_pergunta' => new sfValidatorString(array('max_length' => 200)),
      'ajud_tx_resposta' => new sfValidatorString(),
      'ajud_dt_inclusao' => new sfValidatorDateTime(),
      'ajud_nm_autor'    => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('ajuda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AJUDA';
  }

}
