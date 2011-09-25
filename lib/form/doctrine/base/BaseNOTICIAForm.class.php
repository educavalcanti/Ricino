<?php

/**
 * NOTICIA form base class.
 *
 * @method NOTICIA getObject() Returns the current form's model object
 *
 * @package    Ricino
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNOTICIAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'noti_cd_chave'      => new sfWidgetFormInputHidden(),
      'tino_cd_chave'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_NOTICIA'), 'add_empty' => true)),
      'noti_nm_titulo'     => new sfWidgetFormInputText(),
      'noti_tx_conteudo'   => new sfWidgetFormTextarea(),
      'noti_nm_fonte'      => new sfWidgetFormInputText(),
      'noti_dt_publicacao' => new sfWidgetFormDateTime(),
      'noti_nm_link'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'noti_cd_chave'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('noti_cd_chave')), 'empty_value' => $this->getObject()->get('noti_cd_chave'), 'required' => false)),
      'tino_cd_chave'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_NOTICIA'), 'required' => false)),
      'noti_nm_titulo'     => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'noti_tx_conteudo'   => new sfValidatorString(array('required' => false)),
      'noti_nm_fonte'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'noti_dt_publicacao' => new sfValidatorDateTime(array('required' => false)),
      'noti_nm_link'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('noticia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NOTICIA';
  }

}
