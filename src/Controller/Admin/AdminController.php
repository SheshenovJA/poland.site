<?php

namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Network\Exception\NotFoundException;
use Cake\I18n\I18n;



class AdminController extends AppController
{
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);

    }

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Admins');
        $this->loadModel('AdminConfigs');
        $this->loadModel('Configs');
//        $this->loadModel('Orders');
    }


    public function beforeFilter(\Cake\Event\Event $event)
    {
         parent::beforeFilter($event);
         $this->Auth->allow(['login']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('');
        $remember = false;

        //if($this->){}

        if ($this->request->is('post')) {
            if (isset($this->request->getData()['remember']) && $this->request->getData()['remember'] == 'on') {
                unset($this->request->getData()['remember']);
                $remember = true;
            }
            $user = $this->Auth->identify();
            //debug($user);die;
            if ($user) {
                $this->Auth->setUser($user);
                $session = $this->request->getSession();
                $session->write('KCEDITOR.disabled', false);
                 //debug($name = $this->request->getSession()->read()); die;
                if ($remember) {
                    $this->Cookie->write('admin', $this->request->getData());
                    $this->Cookie->write('KCEDITOR.disabled', false);
                } elseif ($this->Cookie->check('admin')) {
                    $this->Cookie->delete('admin');
                }
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error('Логін чи пароль не вірні');
                return $this->redirect($this->referer());
            }
        }
        if ($this->Cookie->check('admin')) {

            $this->request->data = $this->Cookie->read('admin');
            $user = $this->Auth->identify();
            //debug($user);die;
            if ($user) {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl());
            }
        }
    }

    public function reg()
    {

        $this->viewBuilder()->setLayout('');
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (!empty($data)) {
                extract($data);

                $save_adm = $this->Admins->newEntity();
                //debug($save_adm); die;
                $data = $this->Admins->patchEntity($save_adm, $data);
                if ($this->Admins->save($data)) {
                    $this->Flash->success('Registration complete! You can sign in');
                    return $this->redirect('admin/login');
                } else {
                    $this->Flash->error('value of one or more fields is in database now');
                }
            } else {
                $this->Flash->error('Some errors');
                return $this->redirect($this->referer());
            }
        }
    }

    public function dashboard()
    {
        $seo = $this->Configs->getConfigs();

        $this->set('seo', $seo);

    }

    public function addSeo()
    {


        if ($this->request->is('post'))
        {
            $data = $this->request->getData();
            foreach ($data as $section => $value) {

                $conf = $this->Configs->findBySection($section)->first();
                if (!empty($conf)) {
                    $conf->value = $value;
                } else {
                    $conf = $this->Configs->newEntity(['section' => $section, 'value' => $value]);
                }
                $this->Configs->save($conf);
            }
            $this->Flash->success(__('Збережено'));
            return $this->redirect($this->referer());

        }
    }

    public function reloadAuth($tmp_user = null)
    {
        if (!isset($tmp_user)) {
            $tmp_user = $this->Admins->get($this->Auth->user('id'));
        }
        $this->Auth->setUser($tmp_user->toArray());
        if ($this->Cookie->check('user')) {
            $this->Cookie->delete('user');
            $this->Cookie->write('user', $tmp_user->toArray());
        }
    }

    public function showNotif()
    {
        //
        $this->autoRender = false;
        $this->response->withType('json');
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            extract($data);
            // debug($data, false); die;
            if ($islocked == '1' || $islocked == '0') {
                $this->loadModel('AdminConfigs');
                foreach ($data as $section => $value) {
                    $save_data = $this->AdminConfigs
                        ->find()
                        ->where(['name' => $name])
                        ->first();
                    if (!empty($save_data)) {
                        $save_data->value = intval($islocked);
                    } else {
                        $save_data = $this->AdminConfigs->newEntity(['name' => $section, 'value' => $value]);
                    }

                    $this->AdminConfigs->save($save_data);

                    $json_data = json_encode('Saved');
                    $response = $this->response->withType('json')->withStringBody($json_data);
                    return $response;
                }
            }
//            if($islocked == '0'){
//               // debug('save to table as 0', false); die;
//                $this->response->body(json_encode('Change saved.'));
//                $this->response->statusCode(200);
//                return $this->response;
//            }
        }

    }

    public function contacts()
    {
        $contacts = $this->Configs->getConfigs();
        $this->set('config', $contacts);

        if ($this->request->is('post')){

            $data = $this->request->getData();

            foreach ($data as $section => $value) {
                $conf = $this->Configs->findBySection($section)->first();
                if (!empty($conf)) {
                    $conf->value = $value;
                } else {
                    $conf = $this->Configs->newEntity(['section' => $section, 'value' => $value]);
                }
                $this->Configs->save($conf);
            }
            $this->Flash->success(__('Збережено'));
            return $this->redirect($this->referer());
        }


    }

    public function logout()
    {
        if ($this->Cookie->check('admin')) {
            $this->Cookie->delete('admin');
            $session = $this->request->getSession();
            $session->write('KCEDITOR.disabled', true);
        }
        if( $this->Cookie->check('KCEDITOR.disabled', false)){
            $this->Cookie->write('KCEDITOR.disabled', true);
        }

        return $this->redirect($this->Auth->logout());
    }

    public function changePassword()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            extract($data);

            if (!empty($old_pass) && !empty($pass) && !empty($conf_pass) ) {

                if ($pass != $conf_pass) {

                    $this->Flash->error(__('Паролі не співпадають'));
                    return $this->redirect($this->referer());
                }
                $tmp_user = $this->Admins->get($this->Auth->user('id'));

                if ((new DefaultPasswordHasher)->check($old_pass, $tmp_user->pass)) {
                    $tmp_user->pass = $pass;
                    $this->Admins->save($tmp_user);
                    $this->Flash->success('Пароль змінено');
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error('Пароль не вірний');
                    return $this->redirect($this->referer());
                }
            } else {
                $this->Flash->error('Відсутні обовязкові поля');
                return $this->redirect($this->referer());
            }
        }
    }

    public function changeLogin()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            extract($data);
            if (isset($login) && !empty($login)) {
                if ($this->Admins->exists(['login' => $login])) {
                    $this->Flash->error('Цей логін вже використовується.');
                    return $this->redirect($this->referer());
                }
                $tmp_user = $this->Admins->get($this->Auth->user('id'));
                $tmp_user->login = $login;
                if ($this->Admins->save($tmp_user)) {
                    $this->Flash->success('Логін змінено');
                    $this->reloadAuth();
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error('Логін не змінено');
                    return $this->redirect($this->referer());
                }
            }
            else {
                $this->Flash->error('Відсутні обовязкові поля');
                return $this->redirect($this->referer());
            }
        }
    }






}