<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Auth;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    
   
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadModel('Products');
        $this->loadModel('Users');
        $this->loadModel('Answers');
        $this->loadModel('Footers');
        $this->loadModel('News');
        $this->loadModel('Settings');
        $this->loadModel('Banners');
        $this->loadComponent('Auth', [
            'authenticate'=>[
                'Form'=>[
                    'fields'=>[
                        'username'=>'email'
                    ]
                ]
            ],
            'loginAction'=>[
                'controller'=>'users',
                'action'=>'login'
            ]
        ]);
        
        
        $products = $this->Products->find()
                ->limit(9)
                ->order(['created' => 'desc']);
        
        $this->set(compact('product','products'));
           
        $answers = $this->Answers->find()
                ->limit(2)
                ->order(['created' => 'ASC']);
        $this->set(compact('answers'));
        
        
        $footers = $this->Footers->find()
                ->where(['name' => 'địa chỉ 3']);
        $this->set(compact('footers'));
        
        $users = $this->Users->find()
                ->where(['email' => 'admin@gmail.com']);
        $this->set(compact('users'));
        
        $settings = $this->Settings->find('all');
        $this->set(compact('settings'));
        
        $banners = $this->Banners->find('all');
        $this->set(compact('banners'));
        
                

        
    }
     


    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
