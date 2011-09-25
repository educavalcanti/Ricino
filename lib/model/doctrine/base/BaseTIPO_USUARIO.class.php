<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TIPO_USUARIO', 'doctrine');

/**
 * BaseTIPO_USUARIO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $tius_cd_chave
 * @property string $tius_nm_descricao
 * @property Doctrine_Collection $ARQUIVO
 * @property Doctrine_Collection $PROJETO
 * @property Doctrine_Collection $USUARIO
 * 
 * @method integer             getTiusCdChave()       Returns the current record's "tius_cd_chave" value
 * @method string              getTiusNmDescricao()   Returns the current record's "tius_nm_descricao" value
 * @method Doctrine_Collection getARQUIVO()           Returns the current record's "ARQUIVO" collection
 * @method Doctrine_Collection getPROJETO()           Returns the current record's "PROJETO" collection
 * @method Doctrine_Collection getUSUARIO()           Returns the current record's "USUARIO" collection
 * @method TIPO_USUARIO        setTiusCdChave()       Sets the current record's "tius_cd_chave" value
 * @method TIPO_USUARIO        setTiusNmDescricao()   Sets the current record's "tius_nm_descricao" value
 * @method TIPO_USUARIO        setARQUIVO()           Sets the current record's "ARQUIVO" collection
 * @method TIPO_USUARIO        setPROJETO()           Sets the current record's "PROJETO" collection
 * @method TIPO_USUARIO        setUSUARIO()           Sets the current record's "USUARIO" collection
 * 
 * @package    Ricino
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTIPO_USUARIO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('TIPO_USUARIO');
        $this->hasColumn('tius_cd_chave', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('tius_nm_descricao', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ARQUIVO', array(
             'local' => 'tius_cd_chave',
             'foreign' => 'tius_cd_chave'));

        $this->hasMany('PROJETO', array(
             'local' => 'tius_cd_chave',
             'foreign' => 'tius_cd_chave'));

        $this->hasMany('USUARIO', array(
             'local' => 'tius_cd_chave',
             'foreign' => 'tius_cd_chave'));
    }
}