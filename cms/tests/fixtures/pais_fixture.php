<?php
/* Pais Fixture generated on: 2011-05-13 01:24:47 : 1305260687 */
class PaisFixture extends CakeTestFixture {
	var $name = 'Pais';

	var $fields = array(
		'id_pais' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'pais' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'imagen' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'moneda' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mon' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id_pais', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_pais' => 1,
			'pais' => 'Lorem ipsum dolor sit amet',
			'imagen' => 'Lorem ipsum dolor sit amet',
			'moneda' => 'Lorem ip',
			'mon' => 'Lorem '
		),
	);
}
