<?php

/**
 * INSCRICAO_EVENTO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseINSCRICAO_EVENTOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usua_cd_chave'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'), 'add_empty' => true)),
      'even_cd_chave'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EVENTO'), 'add_empty' => true)),
      'inev_dt_confirmacao' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'usua_cd_chave'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('USUARIO'), 'column' => 'usua_cd_chave')),
      'even_cd_chave'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EVENTO'), 'column' => 'even_cd_chave')),
      'inev_dt_confirmacao' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('inscricao_evento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'INSCRICAO_EVENTO';
  }

  public function getFields()
  {
    return array(
      'inev_cd_chave'       => 'Number',
      'usua_cd_chave'       => 'ForeignKey',
      'even_cd_chave'       => 'ForeignKey',
      'inev_dt_confirmacao' => 'Date',
    );
  }
}
