<?php

App::uses('AppController', 'Controller');

class DashboardController extends AppController {

	public $name = 'Dashboard';

	public $uses = array('User','Priscription','Patient','Test','Medicin','Assignedmedicin');
    
    public function beforeFilter(){
        $group = Authsome::get('group');
        
        if(empty($group) && $group!='manager' && $this->action!='login'){
            $this->redirect('/login');
            exit;
        }
    }
    
    public function index() {
        $condition = array('Patient.status' => 'active');

        $this->paginate['Patient'] =array(
            'conditions' => $condition,
            'limit' => 20,
            'order' => array('Patient.created' => 'DESC')
        );
        $this->set('patients', $this->paginate('Patient'));
        
    }
   
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('user deleted'));
            $this->redirect(array('action' => 'users'));
        }
        $this->Session->setFlash(__('user was not deleted'));
        $this->redirect(array('action' => 'users'));
    }
       
    
    
}
