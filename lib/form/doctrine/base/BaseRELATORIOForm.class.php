<?php

/**
 * RELATORIO form base class.
 *
 * @method RELATORIO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRELATORIOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rela_cd_chave'     => new sfWidgetFormInputHidden(),
      'proj_cd_chave'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PROJETO'), 'add_empty' => false)),
      'rela_tx_descricao' => new sfWidgetFormTextarea(),
      'rela_nm_documento' => new sfWidgetFormInputText(),
      'rela_nm_autores'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'rela_cd_chave'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rela_cd_chave')), 'empty_value' => $this->getObject()->get('rela_cd_chave'), 'required' => false)),
      'proj_cd_chave'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PROJETO'))),
      'rela_tx_descricao' => new sfValidatorString(),
      'rela_nm_documento' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'rela_nm_autores'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('relatorio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RELATORIO';
  }

}
