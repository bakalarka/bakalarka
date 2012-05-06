<?php
class BcImage extends AppModel {
	var $name = 'BcImage';
	var $table = 'images';
	
	var $belongsTo = array(
		'ImageGallery' => array(
			'model' => 'ImageGallery',
			'foreignKey' => 'image_gallery_id'
		),
		'Name' => array(
			'model' => 'Text',
			'foreignKey' => 'name_id'
		),
		'Description' => array(
			'model' => 'Text',
			'foreignKey' => 'description_id'
		)
	);
}
?>