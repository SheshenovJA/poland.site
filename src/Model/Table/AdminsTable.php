<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class AdminsTable extends AppTable {
    public function initialize(array $config)
    {

    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew()) {
            $entity->created = time();
        }
    }
    public function validationDefault(Validator $validator)
    {

        $validator
            ->requirePresence('login', 'create')
            ->add('login', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
            ->allowEmptyString('login');

        $validator
            ->requirePresence('pass', 'create')
            ->allowEmptyString('pass');

        return $validator;

    }
}