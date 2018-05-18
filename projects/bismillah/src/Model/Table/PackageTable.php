<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class PackageTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('package');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('PackageFeature', [
            'foreignKey' => 'package_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 500)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
