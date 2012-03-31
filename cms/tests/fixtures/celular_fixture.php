<?php
/* Celular Fixture generated on: 2011-05-13 01:22:22 : 1305260542 */
class CelularFixture extends CakeTestFixture {
	var $name = 'Celular';

	var $fields = array(
		'id_celular' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'cel_esp_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'marca_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'modelo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'vigente' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id_celular', 'unique' => 1), 'fk_celulars_especificaciones' => array('column' => 'cel_esp_id', 'unique' => 0), 'fk_marcas_celulars' => array('column' => 'marca_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_celular' => 1,
			'cel_esp_id' => 1,
			'marca_id' => 1,
			'modelo' => 'Lorem ipsum dolor sit amet',
			'vigente' => 1
		),
	);
}
