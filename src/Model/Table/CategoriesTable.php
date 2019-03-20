<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CategoriesTable extends AppTable

{
    public function initialize(array $config)
    {
        $this->hasMany("Prices");

    }

    public function beforeSave($event, $entity, $options)
    {
    	dd($entity);

        if ($entity->isNew()) {
            $entity->created = time();
        }
    }

  
}