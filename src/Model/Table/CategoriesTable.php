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

        if ($entity->isNew()) {
            $entity->created = time();
        }
    }

    public function store($data)
    {

        $ent = $this->newEntity($data);

        if($this->save($ent))
        {
            return "saved";
        }else{
            return "error";
        }
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


    public function update($id)
    {

    }

    public function getAll()
    {
        return $this->find("all")->order(["created" => "ASC"]);
    }





}