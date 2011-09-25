<?php

/**
 * TIPO_USUARIO filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTIPO_USUARIOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tius_nm_descricao' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tius_nm_descricao' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_USUARIO';
  }

  public function getFields()
  {
    return array(
      'tius_cd_chave'     => 'Number',
      'tius_nm_descricao' => 'Text',
    );
  }
}
