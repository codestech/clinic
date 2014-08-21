<?php
App::uses('AppModel', 'Model');
/**
 * Media Model
 *
 * @property MediaCategory $MediaCategory
 */
class Assignedmedicin extends AppModel {
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
 public $useTable = "assignedmedicins";
 
 
    
	public $validate = array(
        'days' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Can\'t be empty',
                'allowEmpty' => false,
                'required' => false,
                'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'hrs' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Can\'t be empty',
                'allowEmpty' => false,
                'required' => false,
                'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'meal' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Can\'t be empty',
                'allowEmpty' => false,
                'required' => false,
                'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
    );

    public $belongsTo  = array(
        'Priscription' => array(
            'className'     => 'Priscription',
            'foreignKey'    => 'priscription_id'
        ),
        'Medicin' => array(
            'className'     => 'Medicin',
            'foreignKey'    => 'medicin_id'
        )
    );	
}
