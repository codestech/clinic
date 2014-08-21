<?php

App::uses('AppController', 'Controller');


class UsersController extends AppController {

	public $name = 'Users';

    public function beforeFilter(){
        
        $group = Authsome::get('group');
        
        if(empty($group) && $group!='manager' && $this->action!='login'){
            $this->redirect('/login');
            exit;
        }
    }

    public function login() {
        if (empty($this->data)) {
            $this->sidebar = false;
            $this->commonBanner = false;
                return;
        }

        $user = Authsome::login($this->data['User']);

        if (!$user) {
                $this->Session->setFlash('Invalid login. Please, try again.');
                return;
        }

        $remember = (!empty($this->data['User']['remember']));
        if ($remember) {
                Authsome::persist('2 weeks');
        }
        $this->redirect(array('controller'=>'Dashboard','action' => 'index'));
    }
    
    public function logout(){
        Authsome::logout();
        $this->redirect('/login');
        
    }

    public function register(){
        if (!empty($this->data)) {
            if($this->User->save($this->data)){
                $this->Session->setFlash('Your account hasbeen created.');
                return;
            }
        }
        return;
    }

}
