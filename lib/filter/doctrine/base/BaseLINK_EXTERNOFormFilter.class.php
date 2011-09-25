<?php

/**
 * LINK_EXTERNO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLINK_EXTERNOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'liex_nm_url'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'liex_nm_rotulo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'liex_nm_imagem' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'liex_nm_url'    => new sfValidatorPass(array('required' => false)),
      'liex_nm_rotulo' => new sfValidatorPass(array('required' => false)),
      'liex_nm_imagem' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('link_externo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LINK_EXTERNO';
  }

  public function getFields()
  {
    return array(
      'liex_cd_chave'  => 'Number',
      'liex_nm_url'    => 'Text',
      'liex_nm_rotulo' => 'Text',
      'liex_nm_imagem' => 'Text',
    );
  }
}
