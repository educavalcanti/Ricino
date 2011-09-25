<?php

/**
 * USUARIO form base class.
 *
 * @method USUARIO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUSUARIOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usua_cd_chave'      => new sfWidgetFormInputHidden(),
      'usua_nm_usuario'    => new sfWidgetFormInputText(),
      'usua_cd_senha'      => new sfWidgetFormInputText(),
      'tius_cd_chave'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'), 'add_empty' => true)),
      'usua_nm_nome'       => new sfWidgetFormInputText(),
      'usua_dt_nascimento' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'usua_cd_chave'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usua_cd_chave')), 'empty_value' => $this->getObject()->get('usua_cd_chave'), 'required' => false)),
      'usua_nm_usuario'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'usua_cd_senha'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'tius_cd_chave'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'), 'required' => false)),
      'usua_nm_nome'       => new sfValidatorString(array('max_length' => 255)),
      'usua_dt_nascimento' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'USUARIO';
  }

}
