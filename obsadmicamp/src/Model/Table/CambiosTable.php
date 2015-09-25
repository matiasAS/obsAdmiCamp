<?php
namespace App\Model\Table;

use App\Model\Entity\Cambio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cambios Model
 *
 */
class CambiosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('cambios');
        $this->displayField('id');
        $this->primaryKey('id');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('donde',['rule' => 'notempty','message'=>'Campo necesario']);

        $validator
            ->notEmpty('ahora',['rule' => 'notempty','message'=>'Campo necesario']);

        $validator
            ->notEmpty('despues',['rule' => 'notempty','message'=>'Campo necesario']);

        $validator
            ->notEmpty('fechaRegistro',['rule' => 'notempty','message'=>'Campo necesario']);

        $validator
            ->notEmpty('estado',['rule' => 'notempty','message'=>'Campo necesario']);

        return $validator;
    }
}
