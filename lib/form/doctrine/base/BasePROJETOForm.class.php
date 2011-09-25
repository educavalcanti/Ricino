<?php

/**
 * PROJETO form base class.
 *
 * @method PROJETO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePROJETOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'proj_cd_chave'     => new sfWidgetFormInputHidden(),
      'stpr_cd_chave'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('STATUS_PROJETO'), 'add_empty' => false)),
      'tius_cd_chave'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'), 'add_empty' => false)),
      'proj_nm_titulo'    => new sfWidgetFormInputText(),
      'proj_tx_descricao' => new sfWidgetFormTextarea(),
      'proj_nm_documento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'proj_cd_chave'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('proj_cd_chave')), 'empty_value' => $this->getObject()->get('proj_cd_chave'), 'required' => false)),
      'stpr_cd_chave'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('STATUS_PROJETO'))),
      'tius_cd_chave'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_USUARIO'))),
      'proj_nm_titulo'    => new sfValidatorString(array('max_length' => 200)),
      'proj_tx_descricao' => new sfValidatorString(array('required' => false)),
      'proj_nm_documento' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('projeto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PROJETO';
  }

}
