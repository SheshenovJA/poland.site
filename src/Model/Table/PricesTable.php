<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class PricesTable extends AppTable

{
    public function initialize(array $config)
    {
        $this->belongsTo("Categories")
            ->setForeignKey('category_id');;

       // $this->hasMany("Categories");

    }


    public function beforeSave($event, $entity, $options)
    {
    	//dd($entity);

        if ($entity->isNew()) {
            $entity->created = time();
        }
        
    }



    public function store($data)
    {

        $ent = $this->newEntity($data);
        //debug($ent);die;
        if($this->save($ent))
        {
            return "saved";
        }else{
            return "error";
        }
    }

    public function update($data)
    {
    	# code...
    }

    public function remove($id)
    {
        $item = $this->get($id);

        if($this->delete($item))
        {
            return "deleted";
        }else{
            return "error";
        }
    }

    public function getDataToAdmin()
    {
        return $this->find("all")
            ->contain('Categories')
            ->order(["Categories.id" => "ASC"]);
    }

    public function getDataToFront()
    {
    		//sort asc
    }



  
}