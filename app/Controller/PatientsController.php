<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PatientsController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Patient');
	var $allowed_files=array('application/pdf');

	public function appoinment(){
		if(!empty($this->data)){
			if($this->Patient->save($this->data)){
                $this->Session->setFlash('Your appoinment has been set.');
                return;
            }
		}
		$appDateOption = array(
		    'recursive' => -1, //int
		    //array of field names
		    'fields' => array('Patient.app_date'),
		    //string or array defining order
		    'order' => array('Patient.app_date DESC')
		);
		$lastAppDate = $this->Patient->find('first');
		if(!empty($lastAppDate)){
			$lastDate = new DateTime($lastAppDate['Patient']['app_date']);
			$appDate = clone $lastDate;
			$appDate->modify('+15 minutes');
		}
		else{
			$lastDate = new DateTime();
			$appDate = clone $lastDate;
			$appDate->modify('+15 minutes');
		}
		$this->set('appDate', $appDate->format('Y-m-d H:i:s'));
	}


	public function addhistory($id = null){
        if($id == null){
            throw new MethodNotAllowedException();
        }
        $this->Patient->id = $id;
        if(!empty($this->data)){
        	if($this->data['Patient']['file']['error']!=4 && !in_array($this->data['Patient']['file']['type'],$this->allowed_files)){
                $this->Session->setFlash('File Upload Error: Invalid file type for Patient history! Please use pdf type file.');
                $this->redirect($this->referer());
                exit();
            }
            $path_to_upload_dir = WWW_ROOT . DS . 'history' . DS . $id;
			if(!file_exists($path_to_upload_dir)){
                if(!mkdir($path_to_upload_dir)){
                    $this->Session->setFlash(__('Cant create Directory!', true));
                    $this->redirect($this->referer());
                }
            }
			App::uses('File', 'Utility');
			$file = new File($this->data['Patient']['file']['tmp_name']);
			$data = $file->read();
			$file->close();
			$history_file_name=uniqid().'.pdf';
			$history = array('Patient' => array('history' => $history_file_name ));
			$file = new File($path_to_upload_dir.DS.$history_file_name, true,0777);	
			$file->write($data);
			$file->close();
			if($this->Patient->save($history)){
				$this->Session->setFlash('File Uploaded Successfully: Patient history added.');
            	$this->redirect(array('controller'=>'dashboard', 'action'=>'index'));
			}
        }
        $this->set('id', $id);
    }

    public function details($id = null){
    	if($id == null){
            throw new MethodNotAllowedException();
        }
    }

}
