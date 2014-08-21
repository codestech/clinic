<?php
App::uses('AppModel', 'Model');
/**
 * Media Model
 *
 * @property MediaCategory $MediaCategory
 */
class Patient extends AppModel {
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
 public $useTable = "patients";

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
            ),
            'between' => array(
                'rule' => array('between', 3, 50),
                'message' => 'between 3 to 50 letters'            
            )
        ),
        'email' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Can\'t be empty',
                'allowEmpty' => false,
                'required' => false,
                'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            
            'email' => array(
                'rule' => array('email'),
                'message' => 'invalid email'
            ),
            
        ),
        'age' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Can\'t be empty',
                'allowEmpty' => false,
                'required' => false,
                'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'address' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Can\'t be empty',
                'allowEmpty' => false,
                'required' => false,
                'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'phone' => array(
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
        'Priscription' => array(
            'className'     => 'Priscription',
            'foreignKey'    => 'patient_id',
            'dependent'     => true
        )
    );

}
