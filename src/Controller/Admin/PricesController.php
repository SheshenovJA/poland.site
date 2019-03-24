<?php

namespace App\Controller\Admin;

use Cake\Network\Exception\NotFoundException;



class PricesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel("Categories");
    
    }


    public function index()
    {
        $categories = $this->Categories->getAll();
        $prices = $this->Prices->getDataToAdmin();
        //debug($prices->toArray());die;
        $this->set(compact(["categories", "prices"]));
    }

    public function addPrice()
    {
        $isPost = $this->request->is('post');

        if($isPost)
        {
            $data = $this->request->getData();

            if(!empty($data) && is_array($data)) {
               // dd($data);
                $save = $this->Prices->store($data);
                if ($save == "saved") {
                    $this->Flash->success("Saved");
                    return $this->redirect($this->referer());
                } else {
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
            $res = $this->Prices->remove($id);
            if ($res == 'deleted')
            {
                $this->Flash->success("Deleted");
                return $this->redirect($this->referer());
            }


        }
    }


    public function categories()
    {
        $categories = $this->Categories->getAll();
        $this->set(compact(["categories"]));

    }







}