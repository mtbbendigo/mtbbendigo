<?php  defined('C5_EXECUTE') or die("Access Denied.");

class OrbitImgBlockBlockController extends BlockController {
	
	protected $btName = 'Orbit Rotating Image Two';
	protected $btDescription = 'This block uses the default zurbfoundation Orbit image rotator components (as used/built by this site). Up to five images and captions can be used, in any order.';
	protected $btTable = 'btDCOrbitImgBlock';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function getSearchableContent() {
		$content = array();
		$content[] = $this->field_2_textarea_text;
		$content[] = $this->field_4_textarea_text;
		$content[] = $this->field_6_textarea_text;
		$content[] = $this->field_8_textarea_text;
		$content[] = $this->field_10_textarea_text;
		return implode(' - ', $content);
	}

	public function view() {
		$this->set('field_1_image', (empty($this->field_1_image_fID) ? null : $this->get_image_object($this->field_1_image_fID, 0, 0, false)));
		$this->set('field_3_image', (empty($this->field_3_image_fID) ? null : $this->get_image_object($this->field_3_image_fID, 0, 0, false)));
		$this->set('field_5_image', (empty($this->field_5_image_fID) ? null : $this->get_image_object($this->field_5_image_fID, 0, 0, false)));
		$this->set('field_7_image', (empty($this->field_7_image_fID) ? null : $this->get_image_object($this->field_7_image_fID, 0, 0, false)));
		$this->set('field_9_image', (empty($this->field_9_image_fID) ? null : $this->get_image_object($this->field_9_image_fID, 0, 0, false)));
	}


	public function edit() {
		$this->set('field_1_image', (empty($this->field_1_image_fID) ? null : File::getByID($this->field_1_image_fID)));
		$this->set('field_3_image', (empty($this->field_3_image_fID) ? null : File::getByID($this->field_3_image_fID)));
		$this->set('field_5_image', (empty($this->field_5_image_fID) ? null : File::getByID($this->field_5_image_fID)));
		$this->set('field_7_image', (empty($this->field_7_image_fID) ? null : File::getByID($this->field_7_image_fID)));
		$this->set('field_9_image', (empty($this->field_9_image_fID) ? null : File::getByID($this->field_9_image_fID)));
	}

	public function save($args) {
		$args['field_1_image_fID'] = empty($args['field_1_image_fID']) ? 0 : $args['field_1_image_fID'];
		$args['field_3_image_fID'] = empty($args['field_3_image_fID']) ? 0 : $args['field_3_image_fID'];
		$args['field_5_image_fID'] = empty($args['field_5_image_fID']) ? 0 : $args['field_5_image_fID'];
		$args['field_7_image_fID'] = empty($args['field_7_image_fID']) ? 0 : $args['field_7_image_fID'];
		$args['field_9_image_fID'] = empty($args['field_9_image_fID']) ? 0 : $args['field_9_image_fID'];
		parent::save($args);
	}

	//Helper function for image fields
	private function get_image_object($fID, $width = 0, $height = 0, $crop = false) {
		if (empty($fID)) {
			$image = null;
		} else if (empty($width) && empty($height)) {
			//Show image at full size (do not generate a thumbnail)
			$file = File::getByID($fID);
			$image = new stdClass;
			$image->src = $file->getRelativePath();
			$image->width = $file->getAttribute('width');
			$image->height = $file->getAttribute('height');
		} else {
			//Generate a thumbnail
			$width = empty($width) ? 9999 : $width;
			$height = empty($height) ? 9999 : $height;
			$file = File::getByID($fID);
			$ih = Loader::helper('image');
			$image = $ih->getThumbnail($file, $width, $height, $crop);
		}
	
		return $image;
	}
	


}
