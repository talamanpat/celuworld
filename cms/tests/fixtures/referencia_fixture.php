<?php
/* Referencia Fixture generated on: 2011-05-13 01:26:49 : 1305260809 */
class ReferenciaFixture extends CakeTestFixture {
	var $name = 'Referencia';

	var $fields = array(
		'id_referencia' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'pais_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id_referencia', 'unique' => 1), 'fk_paises_referencias' => array('column' => 'pais_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_referencia' => 1,
			'pais_id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
