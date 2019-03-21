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

    }


    public function categories()
    {
        $categories = $this->Categories->getAll();
        $this->set(compact(["categories"]));

    }







}