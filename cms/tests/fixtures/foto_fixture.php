<?php
/* Foto Fixture generated on: 2011-05-13 01:18:11 : 1305260291 */
class FotoFixture extends CakeTestFixture {
	var $name = 'Foto';

	var $fields = array(
		'id_foto' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'celular_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'show' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'size' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id_foto', 'unique' => 1), 'fk_celulars_fotos' => array('column' => 'celular_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_foto' => 1,
			'celular_id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'show' => 1,
			'size' => 1
		),
	);
}
