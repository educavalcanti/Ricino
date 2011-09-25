<?php

/**
 * PROJETO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePROJETOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'stpr_cd_chave'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('STATUS_PROJETO'), 'add_empty' => true)),
      'tius_cd_chave'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'), 'add_empty' => true)),
      'proj_nm_titulo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'proj_tx_descricao' => new sfWidgetFormFilterInput(),
      'proj_nm_documento' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'stpr_cd_chave'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('STATUS_PROJETO'), 'column' => 'stpr_cd_chave')),
      'tius_cd_chave'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TIPO_USUARIO'), 'column' => 'tius_cd_chave')),
      'proj_nm_titulo'    => new sfValidatorPass(array('required' => false)),
      'proj_tx_descricao' => new sfValidatorPass(array('required' => false)),
      'proj_nm_documento' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('projeto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PROJETO';
  }

  public function getFields()
  {
    return array(
      'proj_cd_chave'     => 'Number',
      'stpr_cd_chave'     => 'ForeignKey',
      'tius_cd_chave'     => 'ForeignKey',
      'proj_nm_titulo'    => 'Text',
      'proj_tx_descricao' => 'Text',
      'proj_nm_documento' => 'Text',
    );
  }
}
