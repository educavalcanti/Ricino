<?php

/**
 * SECAO_TOPICO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSECAO_TOPICOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'seto_nm_descricao' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'seto_nm_descricao' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('secao_topico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SECAO_TOPICO';
  }

  public function getFields()
  {
    return array(
      'seto_cd_chave'     => 'Number',
      'seto_nm_descricao' => 'Text',
    );
  }
}
