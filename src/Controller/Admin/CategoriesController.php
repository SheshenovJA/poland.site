<?php

namespace App\Controller\Admin;

use Cake\Network\Exception\NotFoundException;



class CategoriesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Prices');

    }


    public function index()
    {


    }


    public function categories()
    {

    }

    public function addCategory()
    {
        $isPost = $this->request->is('post');

        if($isPost)
        {
            $data = $this->request->getData();

            if(!empty($data) && is_array($data))
            {
                $save = $this->Categories->store($data);
                if($save == "saved"){
                    $this->Flash->success("Saved");
                    return $this->redirect($this->referer());
                }else
                    {
                        $this->Flash->error("Some error");
                        return $this->redirect($this->referer());
                    }
            }
        }
    }



    public function delete($id)
    {
       if(!empty($id) && !is_null($id))
       {
           $res = $this->Categories->remove($id);
           if ($res == 'deleted')
           {
               $this->Flash->success("Deleted");
               return $this->redirect($this->referer());
           }


       }
    }


}