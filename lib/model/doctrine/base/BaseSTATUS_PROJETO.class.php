<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('STATUS_PROJETO', 'doctrine');

/**
 * BaseSTATUS_PROJETO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $stpr_cd_chave
 * @property string $stpr_nm_descricao
 * @property Doctrine_Collection $PROJETO
 * 
 * @method integer             getStprCdChave()       Returns the current record's "stpr_cd_chave" value
 * @method string              getStprNmDescricao()   Returns the current record's "stpr_nm_descricao" value
 * @method Doctrine_Collection getPROJETO()           Returns the current record's "PROJETO" collection
 * @method STATUS_PROJETO      setStprCdChave()       Sets the current record's "stpr_cd_chave" value
 * @method STATUS_PROJETO      setStprNmDescricao()   Sets the current record's "stpr_nm_descricao" value
 * @method STATUS_PROJETO      setPROJETO()           Sets the current record's "PROJETO" collection
 * 
 * @package    Ricino
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSTATUS_PROJETO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('STATUS_PROJETO');
        $this->hasColumn('stpr_cd_chave', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('stpr_nm_descricao', 'string', 100, array(
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
        $this->hasMany('PROJETO', array(
             'local' => 'stpr_cd_chave',
             'foreign' => 'stpr_cd_chave'));
    }
}