<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class PricesTable extends AppTable

{
    public function initialize(array $config)
    {
        $this->belongsTo("Categories");

    }


    public function beforeSave($event, $entity, $options)
    {
    	dd($entity);

        if ($entity->isNew()) {
            $entity->created = time();
        }
        
    }



    public function store()
    {
    	# code...
    }

    public function update($data)
    {
    	# code...
    }

    public function remove($data)
    {
    	# code...
    }

    public function getDataToAdmin()
    {
    		//sort asc
    }

    public function getDataToFront()
    {
    		//sort asc
    }



  
}