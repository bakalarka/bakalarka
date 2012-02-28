<?php
class BcImageGallery extends AppModel {
	var $name = 'ImageGallery';
	var $table = 'image_galleries';
	
	var $belongsTo = array(
		'Name' => array(
			'model' => 'Text',
			'foreignKey' => 'name_id'
		),
		'Default' => array(
			'model' => 'Image',
			'foreignKey' => 'default_id'
		)
	);
}
?>