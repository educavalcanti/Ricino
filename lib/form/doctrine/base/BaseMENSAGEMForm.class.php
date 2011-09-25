<?php

/**
 * MENSAGEM form base class.
 *
 * @method MENSAGEM getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMENSAGEMForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mens_cd_chave'    => new sfWidgetFormInputHidden(),
      'usua_cd_criador'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'), 'add_empty' => false)),
      'topi_cd_chave'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TOPICO'), 'add_empty' => false)),
      'mens_dt_criacao'  => new sfWidgetFormDateTime(),
      'mens_tx_conteudo' => new sfWidgetFormTextarea(),
      'mens_nm_anexo'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'mens_cd_chave'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mens_cd_chave')), 'empty_value' => $this->getObject()->get('mens_cd_chave'), 'required' => false)),
      'usua_cd_criador'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'))),
      'topi_cd_chave'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TOPICO'))),
      'mens_dt_criacao'  => new sfValidatorDateTime(),
      'mens_tx_conteudo' => new sfValidatorString(),
      'mens_nm_anexo'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mensagem[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MENSAGEM';
  }

}
