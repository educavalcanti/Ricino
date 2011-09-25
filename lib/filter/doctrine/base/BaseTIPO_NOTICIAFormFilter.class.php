<?php

/**
 * TIPO_NOTICIA filter form base class.
 *
 * @package    Ricino
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTIPO_NOTICIAFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tino_nm_descricao' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tino_nm_descricao' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_noticia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_NOTICIA';
  }

  public function getFields()
  {
    return array(
      'tino_cd_chave'     => 'Number',
      'tino_nm_descricao' => 'Text',
    );
  }
}
