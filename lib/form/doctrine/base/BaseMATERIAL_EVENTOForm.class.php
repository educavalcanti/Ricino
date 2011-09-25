<?php

/**
 * MATERIAL_EVENTO form base class.
 *
 * @method MATERIAL_EVENTO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMATERIAL_EVENTOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'maev_cd_chave' => new sfWidgetFormInputHidden(),
      'even_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EVENTO'), 'add_empty' => false)),
      'maev_nm_url'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'maev_cd_chave' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('maev_cd_chave')), 'empty_value' => $this->getObject()->get('maev_cd_chave'), 'required' => false)),
      'even_cd_chave' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EVENTO'))),
      'maev_nm_url'   => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('material_evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MATERIAL_EVENTO';
  }

}
