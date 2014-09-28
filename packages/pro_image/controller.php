<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class ProImagePackage extends Package {

     protected $pkgHandle = 'pro_image';
     protected $appVersionRequired = '5.5.0';
     protected $pkgVersion = '1.2';

     public function getPackageDescription() {
          return t("A fully responsive, single image add-on with CDN capability and custom templates.");
     }

     public function getPackageName() {
          return t("Pro Image");
     }
    
     public function install() {
          $pkg = parent::install(); 
		Loader::model('collection_types');
		BlockType::installBlockTypeFromPackage('pro_image', $pkg);	
	
	
     }
   
}
?>