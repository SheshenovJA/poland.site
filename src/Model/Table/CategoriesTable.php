<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CategoriesTable extends AppTable

{
    public function initialize(array $config)
    {
        $this->hasMany("Prices")
            ->setForeignKey('category_id');

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

    public function getAllToFront()
    {
        return $this->find("all")
            ->contain('Prices', function($q1){
                return $q1->find('all')->order(['created' => 'ASC']);
            })
            ->order(["Categories.created" => "ASC"]);
    }





}