<?php

/**
 * INSCRICAO_EVENTO form base class.
 *
 * @method INSCRICAO_EVENTO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseINSCRICAO_EVENTOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inev_cd_chave'       => new sfWidgetFormInputHidden(),
      'usua_cd_chave'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'), 'add_empty' => false)),
      'even_cd_chave'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EVENTO'), 'add_empty' => false)),
      'inev_dt_confirmacao' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'inev_cd_chave'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('inev_cd_chave')), 'empty_value' => $this->getObject()->get('inev_cd_chave'), 'required' => false)),
      'usua_cd_chave'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'))),
      'even_cd_chave'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EVENTO'))),
      'inev_dt_confirmacao' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('inscricao_evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'INSCRICAO_EVENTO';
  }

}
