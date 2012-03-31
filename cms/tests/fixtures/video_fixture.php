<?php
/* Video Fixture generated on: 2011-06-28 01:56:29 : 1309236989 */
class VideoFixture extends CakeTestFixture {
	var $name = 'Video';

	var $fields = array(
		'id_video' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'celular_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id_video', 'unique' => 1), 'fk_celulars_videos' => array('column' => 'celular_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_video' => 1,
			'celular_id' => 1,
			'url' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>