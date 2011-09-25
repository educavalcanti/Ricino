<?php

/**
 * RELATORIO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRELATORIOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'proj_cd_chave'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PROJETO'), 'add_empty' => true)),
      'rela_tx_descricao' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rela_nm_documento' => new sfWidgetFormFilterInput(),
      'rela_nm_autores'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'proj_cd_chave'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PROJETO'), 'column' => 'proj_cd_chave')),
      'rela_tx_descricao' => new sfValidatorPass(array('required' => false)),
      'rela_nm_documento' => new sfValidatorPass(array('required' => false)),
      'rela_nm_autores'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('relatorio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RELATORIO';
  }

  public function getFields()
  {
    return array(
      'rela_cd_chave'     => 'Number',
      'proj_cd_chave'     => 'ForeignKey',
      'rela_tx_descricao' => 'Text',
      'rela_nm_documento' => 'Text',
      'rela_nm_autores'   => 'Text',
    );
  }
}
