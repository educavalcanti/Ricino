<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SECAO', 'doctrine');

/**
 * BaseSECAO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $seca_cd_chave
 * @property string $seca_nm_descricao
 * @property Doctrine_Collection $ARQUIVO
 * 
 * @method integer             getSecaCdChave()       Returns the current record's "seca_cd_chave" value
 * @method string              getSecaNmDescricao()   Returns the current record's "seca_nm_descricao" value
 * @method Doctrine_Collection getARQUIVO()           Returns the current record's "ARQUIVO" collection
 * @method SECAO               setSecaCdChave()       Sets the current record's "seca_cd_chave" value
 * @method SECAO               setSecaNmDescricao()   Sets the current record's "seca_nm_descricao" value
 * @method SECAO               setARQUIVO()           Sets the current record's "ARQUIVO" collection
 * 
 * @package    Ricino
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSECAO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('SECAO');
        $this->hasColumn('seca_cd_chave', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('seca_nm_descricao', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ARQUIVO', array(
             'local' => 'seca_cd_chave',
             'foreign' => 'seca_cd_chave'));
    }
}