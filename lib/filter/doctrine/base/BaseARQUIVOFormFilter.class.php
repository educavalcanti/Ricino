<?php

/**
 * ARQUIVO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseARQUIVOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tius_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'), 'add_empty' => true)),
      'tiar_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_ARQUIVO'), 'add_empty' => true)),
      'seca_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SECAO'), 'add_empty' => true)),
      'arqu_nm_url'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tius_cd_chave' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TIPO_USUARIO'), 'column' => 'tius_cd_chave')),
      'tiar_cd_chave' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TIPO_ARQUIVO'), 'column' => 'tiar_cd_chave')),
      'seca_cd_chave' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SECAO'), 'column' => 'seca_cd_chave')),
      'arqu_nm_url'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('arquivo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ARQUIVO';
  }

  public function getFields()
  {
    return array(
      'arqu_cd_chave' => 'Number',
      'tius_cd_chave' => 'ForeignKey',
      'tiar_cd_chave' => 'ForeignKey',
      'seca_cd_chave' => 'ForeignKey',
      'arqu_nm_url'   => 'Text',
    );
  }
}
