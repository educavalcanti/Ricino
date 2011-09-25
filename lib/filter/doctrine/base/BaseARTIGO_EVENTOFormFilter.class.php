<?php

/**
 * ARTIGO_EVENTO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseARTIGO_EVENTOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inev_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('INSCRICAO_EVENTO'), 'add_empty' => true)),
      'arev_nm_url'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'inev_cd_chave' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('INSCRICAO_EVENTO'), 'column' => 'inev_cd_chave')),
      'arev_nm_url'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artigo_evento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ARTIGO_EVENTO';
  }

  public function getFields()
  {
    return array(
      'arev_cd_chave' => 'Number',
      'inev_cd_chave' => 'ForeignKey',
      'arev_nm_url'   => 'Text',
    );
  }
}
