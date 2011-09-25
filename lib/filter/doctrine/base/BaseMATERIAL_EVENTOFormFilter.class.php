<?php

/**
 * MATERIAL_EVENTO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMATERIAL_EVENTOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'even_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EVENTO'), 'add_empty' => true)),
      'maev_nm_url'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'even_cd_chave' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EVENTO'), 'column' => 'even_cd_chave')),
      'maev_nm_url'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('material_evento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MATERIAL_EVENTO';
  }

  public function getFields()
  {
    return array(
      'maev_cd_chave' => 'Number',
      'even_cd_chave' => 'ForeignKey',
      'maev_nm_url'   => 'Text',
    );
  }
}
