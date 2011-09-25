<?php

/**
 * TOPICO form base class.
 *
 * @method TOPICO getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTOPICOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'topi_cd_chave'    => new sfWidgetFormInputHidden(),
      'usua_cd_criador'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'), 'add_empty' => false)),
      'topi_dt_criacao'  => new sfWidgetFormDateTime(),
      'seto_cd_chave'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SECAO_TOPICO'), 'add_empty' => false)),
      'topi_tx_titulo'   => new sfWidgetFormInputText(),
      'topi_tx_conteudo' => new sfWidgetFormTextarea(),
      'topi_nm_anexo'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'topi_cd_chave'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('topi_cd_chave')), 'empty_value' => $this->getObject()->get('topi_cd_chave'), 'required' => false)),
      'usua_cd_criador'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'))),
      'topi_dt_criacao'  => new sfValidatorDateTime(),
      'seto_cd_chave'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SECAO_TOPICO'))),
      'topi_tx_titulo'   => new sfValidatorString(array('max_length' => 200)),
      'topi_tx_conteudo' => new sfValidatorString(),
      'topi_nm_anexo'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('topico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TOPICO';
  }

}
