<?php

/**
 * ARTIGO_EVENTO form base class.
 *
 * @method ARTIGO_EVENTO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseARTIGO_EVENTOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'arev_cd_chave' => new sfWidgetFormInputHidden(),
      'inev_cd_chave' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('INSCRICAO_EVENTO'), 'add_empty' => false)),
      'arev_nm_url'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'arev_cd_chave' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('arev_cd_chave')), 'empty_value' => $this->getObject()->get('arev_cd_chave'), 'required' => false)),
      'inev_cd_chave' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('INSCRICAO_EVENTO'))),
      'arev_nm_url'   => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('artigo_evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ARTIGO_EVENTO';
  }

}
