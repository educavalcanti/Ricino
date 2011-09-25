<?php

/**
 * EVENTO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEVENTOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'even_dt_realizacao'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'even_nm_local'       => new sfWidgetFormFilterInput(),
      'even_nm_organizacao' => new sfWidgetFormFilterInput(),
      'even_nm_hotsite'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'even_dt_realizacao'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'even_nm_local'       => new sfValidatorPass(array('required' => false)),
      'even_nm_organizacao' => new sfValidatorPass(array('required' => false)),
      'even_nm_hotsite'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('evento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EVENTO';
  }

  public function getFields()
  {
    return array(
      'even_cd_chave'       => 'Number',
      'even_dt_realizacao'  => 'Date',
      'even_nm_local'       => 'Text',
      'even_nm_organizacao' => 'Text',
      'even_nm_hotsite'     => 'Text',
    );
  }
}
