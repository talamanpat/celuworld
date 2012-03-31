<?php
class Periodista extends AppModel {
	var $name = 'Periodista';
	var $primaryKey = 'id_periodista';
	var $displayField = 'nombre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Noticia' => array(
			'className' => 'Noticia',
			'foreignKey' => 'periodista_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
