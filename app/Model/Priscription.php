<?php
App::uses('AppModel', 'Model');
/**
 * Media Model
 *
 * @property MediaCategory $MediaCategory
 */
class Priscription extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'name';
/**
 * Validation rules
 *
 * @var array
 */
 public $useTable = "priscriptions";
 
    public $belongsTo  = array(
        'Patient' => array(
            'className'     => 'Patient',
            'foreignKey'    => 'patient_id'
        )
    );

    public $hasMany = array(
        'Assignedmedicin' => array(
            'className'     => 'Assignedmedicin',
            'foreignKey'    => 'priscription_id',
            'dependent'     => true
        )
    );

    public $hasAndBelongsToMany = array(
        'Test' => array(
            'className' => 'Test', 
            'unique' => true,
            'foreignKey'=> 'priscription_id',
            'associationForeignKey'=>'test_id',
        ) 
    );

    function beforeSave( $options = Array() ) {
        
        if($this->validates()) :
            if($this->data['User']['password']):
                $this->data['User']['password'] = AuthSome::hash($this->data['User']['password']);
            else:
                unset($this->data['User']['password']);
            endif;
            return true;
        else :
            return false;
        endif;
    }

}
