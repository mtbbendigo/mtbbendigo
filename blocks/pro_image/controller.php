<?php  
defined('C5_EXECUTE') or die("Access Denied.");
Loader::block('library_file');
class ProImageBlockController extends BlockController {

		protected $btInterfaceWidth = 400;
		protected $btInterfaceHeight = 550;
		protected $btTable = 'btProImage';
		protected $btWrapperClass = 'ccm-ui';
		protected $btExportFileColumns = array('fID','fOnstateID');

		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Adds images from the library to pages.");
		}
		
		public function getBlockTypeName() {
			return t("Pro Image");
		}		
		
		public function getJavaScriptStrings() {
			return array(
				'image-required' => t('You must select an image.')
			);
		}
	
	
		function getFileID() {return $this->fID;}
		function getFileOnstateID() {return $this->fOnstateID;}
		function getFileOnstateObject() {
			if ($this->fOnstateID > 0) {
				return File::getByID($this->fOnstateID);
			}
		}
		function getFileObject() {
			return File::getByID($this->fID);
		}		
		function getAltText() {return $this->altText;}
		function getExternalLink() {return $this->externalLink;}
		function getInternalLinkCID() {return $this->internalLinkCID;}
		function getLinkURL() {
			if (!empty($this->externalLink)) {
				return $this->externalLink;
			} else if (!empty($this->internalLinkCID)) {
				$linkToC = Page::getByID($this->internalLinkCID);
				return (empty($linkToC) || $linkToC->error) ? '' : Loader::helper('navigation')->getLinkToCollection($linkToC);
			} else {
				return '';
			}
		}
		
		public function save($args) {		
			$args['fOnstateID'] = ($args['fOnstateID'] != '') ? $args['fOnstateID'] : 0;
			$args['fID'] = ($args['fID'] != '') ? $args['fID'] : 0;
			$args['maxWidth'] = (intval($args['maxWidth']) > 0) ? intval($args['maxWidth']) : 0;
			$args['maxHeight'] = (intval($args['maxHeight']) > 0) ? intval($args['maxHeight']) : 0;
			
			$args['cdnstatus'] = ($args['cdnstatus'] != '') ? $args['cdnstatus'] : 'false';
			$args['cdnurl'] = ($args['cdnurl'] != '') ? $args['cdnurl'] : 'url';
			$args['autocdn'] = ($args['autocdn'] != '') ? $args['autocdn'] : 'false';
			$args['position'] = ($args['position'] != '') ? $args['position'] : 'left';
			$args['spacetop'] = ($args['spacetop'] != '') ? $args['spacetop'] : '0';
			$args['spaceright'] = ($args['spaceright'] != '') ? $args['spaceright'] : '0';
			$args['spacebottom'] = ($args['spacebottom'] != '') ? $args['spacebottom'] : '0';
			$args['spaceleft'] = ($args['spaceleft'] != '') ? $args['spaceleft'] : '0';
			
			
			switch (intval($args['linkType'])) {
				case 1:
					$args['externalLink'] = '';
					break;
				case 2:
					$args['internalLinkCID'] = 0;
					break;
				default:
					$args['externalLink'] = '';
					$args['internalLinkCID'] = 0;
					break;
			}
			unset($args['linkType']); //this doesn't get saved to the database (it's only for UI usage)
			parent::save($args);
		}
		
		function getContentjustimg($align = false, $style = false, $id = null) {
			$c = Page::getCurrentPage();
			$bID = $this->bID;
			
			$f = $this->getFileObject();
			$fullPath = $f->getPath();
			$relPath = $f->getRelativePath();			
			$size = @getimagesize($fullPath);
			if (empty($size)) {
				echo t( 'Image Not Found. ');
			    return '';
			}	
			
			if ($this->maxWidth == $size[0] && $this->maxHeight == $size[1]) {
				$sizeStr = $size[3];
			} else if (!$this->forceImageToMatchDimensions && ($this->maxWidth > 0 || $this->maxHeight > 0)) { 
				$mw = $this->maxWidth > 0 ? $this->maxWidth : $size[0];
				$mh = $this->maxHeight > 0 ? $this->maxHeight : $size[1];
				$ih = Loader::helper('image');
				$thumb = $ih->getThumbnail($f, $mw, $mh);
				$sizeStr = ' width="' . $thumb->width . '" height="' . $thumb->height . '"';
				$relPath = $thumb->src;
			} 
			else if ($this->forceImageToMatchDimensions && ($this->maxWidth > 0 || $this->maxHeight > 0)) { 
				$mw = $this->maxWidth > 0 ? $this->maxWidth : $size[0];
				$mh = $this->maxHeight > 0 ? $this->maxHeight : $size[1];
				$ih = Loader::helper('image');
				$thumb = $ih->getThumbnail($f, $mw, $mh,true);
				$sizeStr = ' width="' . $thumb->width . '" height="' . $thumb->height . '"';
				$relPath = $thumb->src;
			}
			
			else {
				$sizeStr = $size[3];
			}
			
			$cdnstatus=$this->cdnstatus;
			$cdnurl=$this->cdnurl;
			$autocdn=$this->autocdn;
			$fullsize=$f->getRelativePath();
			if($cdnstatus=='true'){
				if($cdnurl){				
					$cdnthumburl=$cdnurl.$relPath;
					$relPath=$cdnthumburl;	
					$fullsize=$cdnurl.$fullsize;				
				}	
			

				}			

		$alttext=$this->altText;
		if($alttext==null){$alttext='pro image';}
		$img = "<img border=\"0\"  alt=\"{$alttext}\" src=\"{$relPath}\" {$sizeStr} ";
			$img .= ($align) ? "align=\"{$align}\" " : '';
			
			$img .= ($style) ? "style=\"{$style}\" " : '';
			if($this->fOnstateID != 0) {
				$fos = $this->getFileOnstateObject();
				$fullPathOnstate = $f->getPath();
				$sizehover = @getimagesize($fullPathOnstate);

				if ($this->maxWidth == $sizehover[0] && $this->maxHeight == $sizehover[1]) {
					$relPathHover = $fos->getRelativePath();
				} else if (!$this->forceImageToMatchDimensions && ($this->maxWidth > 0 || $this->maxHeight > 0)) {
					$thumbHover = $ih->getThumbnail($fos, $mw, $mh);				
					$relPathHover = $thumbHover->src;
				} else {
					$relPathHover = $fos->getRelativePath();
				}

				//$img .= " onmouseover=\"this.src = '{$relPathHover}'\" ";
				//$img .= " onmouseout=\"this.src = '{$relPath}'\" ";
			}
			
			$img .= ($id) ? "id=\"{$id}\" " : "";
			$img .= "/>";
			$return_array[0]=$img;
			$return_array[1]=$relPath;
			$return_array[2]=$this->altText;
			$return_array[3]=$thumb->width;
			$return_array[4]=$fullsize;
			return $return_array;
		}
		function getContentjustimg2($align = false, $style = false, $id = null) {
			$c = Page::getCurrentPage();
			$bID = $this->bID;
			
			$f = $this->getFileObject();
			$fullPath = $f->getPath();
			$relPath = $f->getRelativePath();			
			$size = @getimagesize($fullPath);
			if (empty($size)) {
				echo t( 'Image Not Found. ');
			    return '';
			}	
			
	if ($this->forceImageToMatchDimensions ){
				$mw = $this->maxWidth;
				if($mw==null){$mw=200;}
				if($mw==0){$mw=200;}
				$mh = $mw;
				$ih = Loader::helper('image');
				$thumb = $ih->getThumbnail($f, $mw, $mh,true);
				$sizeStr = ' width="' . $mh . '" height="' . $mh . '"';
				$relPath = $thumb->src;
			}
	else{		$mw = $this->maxWidth;
				$mh = $this->maxHeight;
				if($mw==null){$mw=200;}
				if($mw==0){$mw=200;}	
				if($mh==null){$mh=200;}
				if($mh==0){$mh=200;}				
				$ih = Loader::helper('image');
				$thumb = $ih->getThumbnail($f, $mw, $mh);
				$sizeStr = ' width="' . $mw . '" height="' . $mw . '"';
				$relPath = $thumb->src;}		
			
			$cdnstatus=$this->cdnstatus;
			$cdnurl=$this->cdnurl;
			$autocdn=$this->autocdn;
			$fullsize=$f->getRelativePath();
			if($cdnstatus=='true'){
				if($cdnurl){				
					$cdnthumburl=$cdnurl.$relPath;
					$relPath=$cdnthumburl;	
					$fullsize=$cdnurl.$fullsize;				
				}	
			

				}						

			$alttext=$this->altText;
		if($alttext==null){$alttext='pro image';}
		$img = "<img border=\"0\"  alt=\"{$alttext}\" src=\"{$relPath}\" {$sizeStr} ";
			$img .= ($align) ? "align=\"{$align}\" " : '';
			
			$img .= ($style) ? "style=\"{$style}\" " : '';
			if($this->fOnstateID != 0) {
				$fos = $this->getFileOnstateObject();
				$fullPathOnstate = $f->getPath();
				$sizehover = @getimagesize($fullPathOnstate);

				if ($this->maxWidth == $sizehover[0] && $this->maxHeight == $sizehover[1]) {
					$relPathHover = $fos->getRelativePath();
				} else if (!$this->forceImageToMatchDimensions && ($this->maxWidth > 0 || $this->maxHeight > 0)) {
					$thumbHover = $ih->getThumbnail($fos, $mw, $mh);				
					$relPathHover = $thumbHover->src;
				} else {
					$relPathHover = $fos->getRelativePath();
				}

				//$img .= " onmouseover=\"this.src = '{$relPathHover}'\" ";
				//$img .= " onmouseout=\"this.src = '{$relPath}'\" ";
			}
			
			$img .= ($id) ? "id=\"{$id}\" " : "";
			$img .= "/>";
			$return_array[0]=$img;
			$return_array[1]=$relPath;
			$return_array[2]=$this->altText;
			$return_array[3]=$mw;
			$return_array[4]=$fullsize;
			return $return_array;
		}
		function getContentAndGenerate($align = false, $style = false, $id = null) {
			$c = Page::getCurrentPage();
			$bID = $this->bID;
			
			$f = $this->getFileObject();
			$fullPath = $f->getPath();
			$relPath = $f->getRelativePath();			
			$size = @getimagesize($fullPath);
			if (empty($size)) {
				echo t( 'Image Not Found. ');
			    return '';
			}	
			
			if ($this->maxWidth == $size[0] && $this->maxHeight == $size[1]) {
				$sizeStr = $size[3];
			} else if (!$this->forceImageToMatchDimensions && ($this->maxWidth > 0 || $this->maxHeight > 0)) { 
				$mw = $this->maxWidth > 0 ? $this->maxWidth : $size[0];
				$mh = $this->maxHeight > 0 ? $this->maxHeight : $size[1];
				$ih = Loader::helper('image');
				$thumb = $ih->getThumbnail($f, $mw, $mh);
				$sizeStr = ' width="' . $thumb->width . '" height="' . $thumb->height . '"';
				$relPath = $thumb->src;
			}
			 else if ($this->forceImageToMatchDimensions && ($this->maxWidth > 0 || $this->maxHeight > 0)) { 
				$mw = $this->maxWidth > 0 ? $this->maxWidth : $size[0];
				$mh = $this->maxHeight > 0 ? $this->maxHeight : $size[1];
				$ih = Loader::helper('image');
				$thumb = $ih->getThumbnail($f, $mw, $mh,true);
				$sizeStr = ' width="' . $thumb->width . '" height="' . $thumb->height . '"';
				$relPath = $thumb->src;
			}
			else {
				$sizeStr = $size[3];
			}
			
			$cdnstatus=$this->cdnstatus;
			$cdnurl=$this->cdnurl;
			$autocdn=$this->autocdn;
						
			if($cdnstatus=='true'){
				if($cdnurl){				
					$cdnthumburl=$cdnurl.$relPath;
					$relPath=$cdnthumburl;	
					$fullsize=$cdnurl.$fullsize;				
				}	
			

				}	
			
		$img = "<img border=\"0\" class=\"ccm-pro-image-block\" alt=\"{$this->altText}\" src=\"{$relPath}\" {$sizeStr} ";
			$img .= ($align) ? "align=\"{$align}\" " : '';
			
			$img .= ($style) ? "style=\"{$style}\" " : '';
			if($this->fOnstateID != 0) {
				$fos = $this->getFileOnstateObject();
				$fullPathOnstate = $f->getPath();
				$sizehover = @getimagesize($fullPathOnstate);

				if ($this->maxWidth == $sizehover[0] && $this->maxHeight == $sizehover[1]) {
					$relPathHover = $fos->getRelativePath();
				} else if (!$this->forceImageToMatchDimensions && ($this->maxWidth > 0 || $this->maxHeight > 0)) {
					$thumbHover = $ih->getThumbnail($fos, $mw, $mh);				
					$relPathHover = $thumbHover->src;
				} else {
					$relPathHover = $fos->getRelativePath();
				}

				//$img .= " onmouseover=\"this.src = '{$relPathHover}'\" ";
				//$img .= " onmouseout=\"this.src = '{$relPath}'\" ";
			}
			
			$img .= ($id) ? "id=\"{$id}\" " : "";
			$img .= "/>";
			
			$linkURL = $this->getLinkURL();
			if (!empty($linkURL)) {
				$img = "<a href=\"{$linkURL}\">" . $img ."</a>";
			}
			return $img;
		}

	}

?>