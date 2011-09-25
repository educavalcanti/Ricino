<?php

/**
 * USUARIO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUSUARIOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usua_nm_usuario'    => new sfWidgetFormFilterInput(),
      'usua_cd_senha'      => new sfWidgetFormFilterInput(),
      'tius_cd_chave'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'), 'add_empty' => true)),
      'usua_nm_nome'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usua_dt_nascimento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'usua_nm_usuario'    => new sfValidatorPass(array('required' => false)),
      'usua_cd_senha'      => new sfValidatorPass(array('required' => false)),
      'tius_cd_chave'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TIPO_USUARIO'), 'column' => 'tius_cd_chave')),
      'usua_nm_nome'       => new sfValidatorPass(array('required' => false)),
      'usua_dt_nascimento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'USUARIO';
  }

  public function getFields()
  {
    return array(
      'usua_cd_chave'      => 'Number',
      'usua_nm_usuario'    => 'Text',
      'usua_cd_senha'      => 'Text',
      'tius_cd_chave'      => 'ForeignKey',
      'usua_nm_nome'       => 'Text',
      'usua_dt_nascimento' => 'Date',
    );
  }
}
