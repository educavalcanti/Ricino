<?php

/**
 * STATUS_PROJETO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSTATUS_PROJETOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'stpr_nm_descricao' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'stpr_nm_descricao' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('status_projeto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'STATUS_PROJETO';
  }

  public function getFields()
  {
    return array(
      'stpr_cd_chave'     => 'Number',
      'stpr_nm_descricao' => 'Text',
    );
  }
}
