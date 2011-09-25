<?php

/**
 * ARQUIVO form base class.
 *
 * @method ARQUIVO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseARQUIVOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'arqu_cd_chave' => new sfWidgetFormInputHidden(),
      'tius_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'), 'add_empty' => false)),
      'tiar_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_ARQUIVO'), 'add_empty' => false)),
      'seca_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SECAO'), 'add_empty' => false)),
      'arqu_nm_url'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'arqu_cd_chave' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('arqu_cd_chave')), 'empty_value' => $this->getObject()->get('arqu_cd_chave'), 'required' => false)),
      'tius_cd_chave' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'))),
      'tiar_cd_chave' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_ARQUIVO'))),
      'seca_cd_chave' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SECAO'))),
      'arqu_nm_url'   => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('arquivo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ARQUIVO';
  }

}
