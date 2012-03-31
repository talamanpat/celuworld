<?php
/* Especificacion Fixture generated on: 2011-05-13 01:15:00 : 1305260100 */
class EspecificacionFixture extends CakeTestFixture {
	var $name = 'Especificacion';

	var $fields = array(
		'id_cel_esp' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'celular_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'analisis' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'evaluacion' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'so_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'smart' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'basico' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'touch' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'teclado' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'slide' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'flip' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'wifi' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'g' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'bluetooth' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'gps' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'sd' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'camara' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'flash' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'video_llamada' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'lanzamiento' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id_cel_esp', 'unique' => 1), 'fk_celulars_especificaciones2' => array('column' => 'celular_id', 'unique' => 0), 'fk_sos_especificacions' => array('column' => 'so_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_cel_esp' => 1,
			'celular_id' => 1,
			'analisis' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'evaluacion' => 1,
			'so_id' => 1,
			'smart' => 1,
			'basico' => 1,
			'touch' => 1,
			'teclado' => 1,
			'slide' => 1,
			'flip' => 1,
			'wifi' => 1,
			'g' => 1,
			'bluetooth' => 1,
			'gps' => 1,
			'sd' => 1,
			'camara' => 1,
			'flash' => 'Lorem ipsum dolor ',
			'video_llamada' => 1,
			'lanzamiento' => '2011-05-13'
		),
	);
}
