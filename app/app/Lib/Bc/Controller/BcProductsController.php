<?php 
class BcProductsController extends AppController {	
	
	var $name 		= 'Products';
	var $uses 		= array(
		'Product'
	);
	
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('index', 'detail');
	}
	
	/** frontend **/
	
	/**
	 * index
	 * List products
	 */
	function index($category = null) {
		//
	}
	
	/**
	 * detail
	 * Product detail
	 */
	function detail($slug = null) {
		if ($slug == null)
			$this->redirect($this->referer());
		$this->set('product', $this->Product->detail($slug));
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * List products
	 */
	function admin_index($category) {
		//
	}
	
	/**
	 * admin_add
	 * Add new product
	 */
	function admin_add() {
		$id = $this->Product->createNew();
		$this->redirect(array('action' => 'admin_view', $id));
	}
	
	/**
	 * admin_clone
	 * Create new product from existing
	 */
	function admin_clone() {
		//
	}
	
	/**
	 * admin_view
	 * View product detail
	 */
	function admin_view($id) {
		$this->set('product', $this->Product->adminDetail($id));
	}
	
	/**
	 * admin_edit
	 * Edit existing product
	 */
	function admin_edit() {
		$this->layout = 'ajax';
		if ($this->Product->edit($this->request->data)) {
			
		} else {
			
		}

		//$this->redirect(array('action' => 'admin_view', $this->request->data['Product']['id']));
	}
	
	/**
	 * admin_hide
	 * Hide product
	 */
	function admin_hide() {
		$this->layout = 'ajax';
		$this->Product->hide($this->request->data['Product']['id']);
	}
	
	/**
	 * admin_delete
	 * Delete a product
	 */
	function admin_delete() {
		$this->layout = 'ajax';
		$this->Product->softDelete($this->request->data['Product']['id']);
	}
	
	/**
	 * admin_add_tag
	 * Add tag to product
	 */
	function admin_add_tag() {
		$this->layout = 'ajax';
		$this->Product->addTag($this->request->data['Product']['id'], $this->request->data['Tag']['id']);
	}
	
	/**
	 * admin_remove_tag
	 * Remove tag from product
	 */
	function admin_remove_tag() {
		$this->layout = 'ajax';
		$this->Product->removeTag($this->request->data['Product']['id'], $this->request->data['Tag']['id']);
	}
	
	/**
	 * admin_add_category
	 * Add category to product
	 */
	function admin_add_category() {
		$this->layout = 'ajax';
		$this->Product->addCategory($this->request->data['Product']['id'], $this->request->data['Category']['id']);
	}
	
	/**
	 * admin_remove_category
	 * Remove category from product
	 */
	function admin_remove_category() {
		$this->layout = 'ajax';
		$this->Product->removeCategory($this->request->data['Product']['id'], $this->request->data['Category']['id']);
	}
	
	/**
	 * admin_add_attribute
	 * Add attribute to product
	 */
	function admin_add_attribute() {
		$this->layout = 'ajax';
		$this->Product->addAttribute($this->request->data['Product']['id'], $this->request->data['Attribute']['id'], $this->request->data['Attribute']['value']);
	}
	
	/**
	 * admin_edit_attribute
	 * Edit attribute from product
	 */
	function admin_edit_attribute() {
		$this->layout = 'ajax';
		$this->Product->editAttribute($this->request->data['AttributeProduct']['id'], $this->request->data['AttributeProduct']['value']);
	}
	
	/**
	 * admin_remove_attribute
	 * Remove attribute from product
	 */
	function admin_remove_attribute() {
		$this->layout = 'ajax';
		$this->Product->removeAttribute($this->request->data['AttributeProduct']['id']);
	}
	
	/**
	 * admin_add_relation
	 * Add relation to product
	 */
	function admin_add_relation() {
		$this->layout = 'ajax';
	}
	
	/**
	 * admin_change_relation_type
	 * Change product relation type
	 */
	function admin_change_relation_type() {
		$this->layout = 'ajax';
	}
	
	/**
	 * admin_remove_relation
	 * Remove relation to product
	 */
	function admin_remove_relation() {
		$this->layout = 'ajax';
	}
	
	/**
	 * admin_add_image
	 * Add image to product gallery
	 */
	function admin_add_image() {
		$this->layout = 'ajax';
		$this->Product->addImage($this->request->data);
	}
	
	/**
	 * admin_edit_image_data
	 * Edit image data from product gallery
	 */
	function admin_edit_image_data() {
		$this->layout = 'ajax';
	}
	
	/**
	 * admin_remove_image
	 * Remove image from product gallery
	 */
	function admin_remove_image() {
		$this->layout = 'ajax';
		$this->Product->removeImage($this->request->data['Image']['id']);
	}
	
	/**
	 * admin_shipping_method
	 * Add shipping to product
	 */
	function admin_add_shipping_method() {
		$this->layout = 'ajax';
		$this->Product->addShippingMethod($this->request->data['Product']['id'], $this->request->data['ShippingMethod']['id'], $this->request->data['ShippingMethod']['ratio']);
	}
	
	/**
	 * admin_edit_shipping_method
	 * Edit shipping method from product
	 */
	function admin_edit_shipping_method() {
		$this->layout = 'ajax';
		$this->Product->editShippingMethod($this->request->data['ProductShippingMethod']['id'], $this->request->data['ProductShippingMethod']['ratio']);
	}
	
	/**
	 * admin_remove_shipping_method
	 * Remove shipping_method from product 
	 */
	function admin_remove_shipping_method() {
		$this->layout = 'ajax';
		$this->Product->removeShippingMethod($this->request->data['ProductShippingMethod']['id']);
	}
	
	/** utility functions **/
	
		
}
?>