<?php
class BcImage extends AppModel {
	var $name = 'BcImage';
	var $table = 'images';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation',
			'description' => 'descriptionTranslation'
		),
	);
	
	var $belongsTo = array(
		'ImageGallery' => array(
			'model' => 'ImageGallery',
			'foreignKey' => 'image_gallery_id'
		)
	);
}
?>