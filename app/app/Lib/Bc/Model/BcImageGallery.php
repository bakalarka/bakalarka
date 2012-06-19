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
			'model' => 'Image',
			'foreignKey' => 'default_id'
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