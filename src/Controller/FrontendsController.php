<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Session\DatabaseSession;

class FrontendsController extends AppController {

    public $component = ['pagination'];
    public $paginate = [
        'limit' => 6
    ];

    public function initialize() {

        parent::initialize();
        $this->Auth->allow();
        $this->viewBuilder()->layout("frontend");
        $this->loadModel('Footers');
        $this->loadModel('Settings');
        $this->loadModel('Banners');
        $this->loadModel('Supports');
        $this->loadModel('Products');
        $this->loadModel('News');
        $this->loadModel('Users');
        $this->loadModel('Answers');
        $this->loadModel('Distributions');
        $this->loadModel('Categories');
        $this->loadModel('Connections');
        $this->getInformation();
        
    }

    public function getInformation() {
        $categories = $this->Categories->find();
        $this->set(compact('categories'));
        $answers = $this->Answers->find()
                ->limit(2)
                ->order(['created' => 'ASC']);
        $footers = $this->Footers->find()
                ->where(['name' => 'địa chỉ 3']);
        $settings = $this->Settings->find('all');
        $banners = $this->Banners->find('all');
        $supports = $this->Supports->find()
                ->where(['type' => 'skype']);
        $support = $this->Supports->find()
                ->where(['type' => 'phone']);
        $suppor = $this->Supports->find()
                ->where(['type' => 'yahoo']);
        $this->set(compact('suppor', 'support', 'supports', 'banners', 'settings', 'footers', 'answers'));
    }

    public function index() {
        $news = $this->News->find()
                ->limit(1);
        $products = $this->paginate($this->Products->find('all')
                        ->order(['created' => 'desc'])
        );
        $this->set(compact('products', 'news'));
    }

    public function viewProduct($id = null) {
        $product = $this->Products->get($id);
        $this->set(compact('product'));
    }

    public function news() {
        $news = $this->News->find('all');
        $this->set(compact('news'));
    }

    public function viewNew($id = null) {
        $new = $this->News->get($id);
        $this->set(compact('new'));
    }

    public function hoidap($id = null) {
        $answer = $this->Answers->get($id);
        $this->set(compact('answer'));
    }

    public function product() {
        $products = $this->paginate($this->Products->find('all')
                        ->order(['created' => 'desc'])
                        ->limit(8));
        $this->set(compact('products'));
    }

    public function search($search = null) {
        $keyword = $this->request->data('keyword');
        $cond = [];
        $this->paginate = [
            'limit' => 9
        ];
        if ($keyword == '') {
            $this->redirect('/');
        } else {
            $cond = [
                "OR" => ["Products.name LIKE '%$keyword%'",
                    "Products.description LIKE '%$keyword%'"]
            ];
            $searches = $this->paginate($this->Products->find()->where($cond));
            $this->set(compact("searches", "keyword"));
        }
    }

    public function sum($cart) {
        $total = 0;
        foreach ($cart as $product) {
            $total = $total + $product['quantity'] * $product['price'];
        }
        return $total;
    }

   
   

    public function addToCart($id = null) {
        $this->viewBuilder()->layout(false);
        $this->autoRender = false; //khong can view van chay 
        if ($this->request->is('post')) {
            // tìm thông tin sản phẩm
            $product = $this->Products->find()->where(['id' => $id])->first();
               
            $item = $this->request->session()->read('cart');
            $item = $item ? $item : [];//nếu có gán vào item nếu chưa có thì gán vào mảng
            
            if (key_exists($id, $item)) {
                $item[$id]['quantity'] += 1;
            } else {
                $item[$id] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'category_id'=>$product->category_id,
                    'quantity' => 1
                ];
            }
          
           
              $this->Flash->set('Sản phẩm cho vào giỏ hàng.', [
                    'element' => 'great_success'
                ]);
            //tạo giỏ hàng và thêm sản phẩm vào trong đó
            $this->request->session()->write('cart', $item);


            //tính tổng giá trị của giỏ hàng 
            $cart = $this->request->session()->read('cart');
          
            $total = $this->sum($cart);
            $this->request->session()->write('payment', $total);
            $this->redirect($this->referer());
        }
    }
    public function deleteCart($id=null) {
        if($this->request->is('post')){
            $carts = $this->request->session()->read('cart');
            unset($carts[$id]);
            $this->request->session()->write('cart',$carts);
            if(empty($carts)){
                $this->removeCart();
            }else{
                $total = $this->sum($carts);
                $this->request->session()->write('payment',$total);
            }
            $this->redirect($this->referer());
        }       
    }

    public function removeCart() {
        if($this->request->is('post')){
        $this->request->session()->delete('cart');
        $this->request->session()->delete('payment');
        $this->redirect($this->referer());
    }
    }

    public function viewCart() {
        $carts = $this->request->session()->read('cart');
//       debug($cart);die;
        $payments = $this->request->session()->read('payment');
        $this->set(compact('carts', 'payments'));
    }

    public function healthInformation() {
        $healths = $this->News->find('all')
                ->limit(2);
        $this->set(compact('healths'));
    }

    public function advices() {
        $advices = $this->News->find('all')
                ->order(['created' => 'desc'])
                ->limit(2);
        $this->set(compact('advices'));
    }

    public function distributionSystem() {
        $distributions = $this->Distributions->find('all');
        $this->set(compact('distributions'));
    }
    public function introduction() {
        
    }
    public function category($id=null) {
         $categories = $this->Categories->find()
                 ->where(['Categories.id'=>$id])
                 ->contain([
                     'Products'
                          ])
                 ->first()
                 ;
                 
        $product=($categories->products);     
        $this->set(compact('product'));
    }
    
    public function connection() {
        $connection = $this->Connections->newEntity();
        if ($this->request->is('post')) {
            $connection = $this->Connections->patchEntity($connection, $this->request->data);
            if ($this->Connections->save($connection)) {
               $this->Flash->set('Bạn đã gửi thành công.', [
                    'element' => 'great_success'
                ]);
                return $this->redirect(['action' => 'connection']);
            } else {
                
                $this->Flash->error(__('The connection could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('connection'));
        $this->set('_serialize', ['connection']);
    }
}
