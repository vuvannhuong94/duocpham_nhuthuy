<?php

namespace App\Controller;

use App\Controller\AppController;

class FrontendsController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->Auth->allow(['index', 'view', 'tidings']);
        $this->viewBuilder()->layout("frontend");
        $this->loadModel('Products');
        $this->loadModel('News');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $this->loadModel('Answers');
        $this->loadModel('Settings');
    }

    public function index() {
        $users = $this->Users->find()
                ->where(['email' => 'admin@gmail.com']);
        $this->set(compact('users'));

        $answers = $this->Answers->find()
                ->limit(2)
                ->order(['created' => 'ASC']);
        $this->set(compact('answers'));

        $products = $this->Products->find()
                ->limit(9)
                ->order(['created' => 'desc']);
        $this->set(compact('products'));

        $news = $this->News->find('all')
                ->limit(1);
        $this->set(compact('news'));



        $footers = $this->Footers->find()
                ->where(['name' => 'địa chỉ 3']);
        $this->set(compact('footers'));
    }

    public function view($id = null) {
        $product = $this->Products->get($id);

        $products = $this->Products->find()
                ->limit(9)
                ->order(['created' => 'desc']);

        $this->set(compact('product', 'products'));


        $news = $this->News->find('all')
                ->limit(1);

        $this->set(compact('news'));
    }

    public function news($id = null) {
        $news = $this->News->find('all')
                ->limit(1);

        $this->set(compact('news'));
    }

}
