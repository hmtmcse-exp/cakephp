<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class PackageFeatureTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('package_feature');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Package', [
            'foreignKey' => 'package_id',
            'joinType' => 'INNER'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('feature_name')
            ->maxLength('feature_name', 500)
            ->requirePresence('feature_name', 'create')
            ->notEmpty('feature_name');

        $validator
            ->scalar('feature_description')
            ->maxLength('feature_description', 500)
            ->requirePresence('feature_description', 'create')
            ->notEmpty('feature_description');

        return $validator;
    }


    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['package_id'], 'Package'));

        return $rules;
    }
}
