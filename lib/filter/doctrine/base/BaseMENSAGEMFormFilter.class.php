<?php

/**
 * MENSAGEM filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMENSAGEMFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usua_cd_criador'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'), 'add_empty' => true)),
      'topi_cd_chave'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TOPICO'), 'add_empty' => true)),
      'mens_dt_criacao'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'mens_tx_conteudo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mens_nm_anexo'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'usua_cd_criador'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('USUARIO'), 'column' => 'usua_cd_chave')),
      'topi_cd_chave'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TOPICO'), 'column' => 'topi_cd_chave')),
      'mens_dt_criacao'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'mens_tx_conteudo' => new sfValidatorPass(array('required' => false)),
      'mens_nm_anexo'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mensagem_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MENSAGEM';
  }

  public function getFields()
  {
    return array(
      'mens_cd_chave'    => 'Number',
      'usua_cd_criador'  => 'ForeignKey',
      'topi_cd_chave'    => 'ForeignKey',
      'mens_dt_criacao'  => 'Date',
      'mens_tx_conteudo' => 'Text',
      'mens_nm_anexo'    => 'Text',
    );
  }
}
