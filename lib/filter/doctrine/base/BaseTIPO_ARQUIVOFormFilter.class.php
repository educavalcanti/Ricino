<?php

/**
 * TIPO_ARQUIVO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTIPO_ARQUIVOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tiar_nm_descricao' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tiar_nm_descricao' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_arquivo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_ARQUIVO';
  }

  public function getFields()
  {
    return array(
      'tiar_cd_chave'     => 'Number',
      'tiar_nm_descricao' => 'Text',
    );
  }
}
