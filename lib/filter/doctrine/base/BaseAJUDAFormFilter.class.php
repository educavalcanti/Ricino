<?php

/**
 * AJUDA filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAJUDAFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ajud_nm_assunto'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ajud_nm_pergunta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ajud_tx_resposta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ajud_dt_inclusao' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'ajud_nm_autor'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ajud_nm_assunto'  => new sfValidatorPass(array('required' => false)),
      'ajud_nm_pergunta' => new sfValidatorPass(array('required' => false)),
      'ajud_tx_resposta' => new sfValidatorPass(array('required' => false)),
      'ajud_dt_inclusao' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'ajud_nm_autor'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ajuda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AJUDA';
  }

  public function getFields()
  {
    return array(
      'ajud_cd_chave'    => 'Number',
      'ajud_nm_assunto'  => 'Text',
      'ajud_nm_pergunta' => 'Text',
      'ajud_tx_resposta' => 'Text',
      'ajud_dt_inclusao' => 'Date',
      'ajud_nm_autor'    => 'Text',
    );
  }
}
