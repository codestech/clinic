<?php
App::uses('AppModel', 'Model');
/**
 * Media Model
 *
 * @property MediaCategory $MediaCategory
 */
class Medicin extends AppModel {
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
 public $useTable = "medicins";
 

    public $actsAs = array(
        'Sluggable' => array('label' => 'name', 'overwrite' => true), 
    );
 
    
	public $validate = array(
		'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Can\'t be empty',
                'allowEmpty' => false,
                'required' => false,
                'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        )
    );

    public $hasMany = array(
        'Assignedmedicin' => array(
            'className'     => 'Assignedmedicin',
            'foreignKey'    => 'medicin_id',
            'dependent'     => true
        )
    );	
}
