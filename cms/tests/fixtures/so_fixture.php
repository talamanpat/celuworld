<?php
/* So Fixture generated on: 2011-05-13 01:08:02 : 1305259682 */
class SoFixture extends CakeTestFixture {
	var $name = 'So';

	var $fields = array(
		'id_so' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sistema' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'empresa' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id_so', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_so' => 1,
			'sistema' => 'Lorem ipsum dolor sit amet',
			'empresa' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet'
		),
	);
}
