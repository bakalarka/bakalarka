<?php
class BcImageGallery extends AppModel {
	var $name = 'ImageGallery';
	var $table = 'image_galleries';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation'
		),
	);
	
	var $belongsTo = array(
		'Default' => array(
			'className' => 'Image',
			'foreignKey' => 'default_id'
		)
	);
	
	var $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'image_gallery_id'
		)
	);
	
	/**
	 * Create new Image gallery
	 */
	public function createNew() {
		$this->create();
		if ($this->save())
			return $this->getLastInsertID();
		return false;
	}
}
?>