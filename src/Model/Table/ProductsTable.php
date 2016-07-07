<?php

namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 */
class ProductsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->belongsTo('Categories', [
            'className' => 'Categories',
            'foreignKey' => 'category_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('name', 'create')
                ->notEmpty('name');
        $validator
                ->requirePresence('quantity', 'create')
                ->notEmpty('quantity');
        $validator
                ->requirePresence('price', 'create')
                ->notEmpty('price');

        $validator
                ->requirePresence('description', 'create')
                ->notEmpty('description');
        $validator
                ->requirePresence('image', 'create')
                ->notEmpty('image');


        return $validator;
    }

}
