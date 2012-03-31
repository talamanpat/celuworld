<?php
/* Precio Fixture generated on: 2011-05-13 01:30:01 : 1305261001 */
class PrecioFixture extends CakeTestFixture {
	var $name = 'Precio';

	var $fields = array(
		'id_precio' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'celular_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'referencia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'precio' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 40),
		'fecha' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id_precio', 'unique' => 1), 'fk_celulares_precio' => array('column' => 'celular_id', 'unique' => 0), 'fk_precio_referencia' => array('column' => 'referencia_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_precio' => 1,
			'celular_id' => 1,
			'referencia_id' => 1,
			'precio' => 1,
			'fecha' => '2011-05-13',
			'descripcion' => 'Lorem ipsum dolor sit amet'
		),
	);
}
