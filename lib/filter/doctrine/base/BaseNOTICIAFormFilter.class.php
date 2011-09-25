<?php

/**
 * NOTICIA filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNOTICIAFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tino_cd_chave'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_NOTICIA'), 'add_empty' => true)),
      'noti_nm_titulo'     => new sfWidgetFormFilterInput(),
      'noti_tx_conteudo'   => new sfWidgetFormFilterInput(),
      'noti_nm_fonte'      => new sfWidgetFormFilterInput(),
      'noti_dt_publicacao' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'noti_nm_link'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tino_cd_chave'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TIPO_NOTICIA'), 'column' => 'tino_cd_chave')),
      'noti_nm_titulo'     => new sfValidatorPass(array('required' => false)),
      'noti_tx_conteudo'   => new sfValidatorPass(array('required' => false)),
      'noti_nm_fonte'      => new sfValidatorPass(array('required' => false)),
      'noti_dt_publicacao' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'noti_nm_link'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('noticia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NOTICIA';
  }

  public function getFields()
  {
    return array(
      'noti_cd_chave'      => 'Number',
      'tino_cd_chave'      => 'ForeignKey',
      'noti_nm_titulo'     => 'Text',
      'noti_tx_conteudo'   => 'Text',
      'noti_nm_fonte'      => 'Text',
      'noti_dt_publicacao' => 'Date',
      'noti_nm_link'       => 'Text',
    );
  }
}
