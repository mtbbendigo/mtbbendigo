<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$result_array=$controller->getContentjustimg2();
$relPath =$result_array[4];	
$basic_path=DIR_REL;
$basic_path=rtrim($basic_path,"/");
$burl=$basic_path.'/packages/pro_image/blocks/pro_image';	
if($maxWidth==null && $maxHeight!=null){$width=$maxHeight; $height=$maxHeight;}
if($maxWidth!=null && $maxHeight==null){$width=$maxWidth; $height=$maxWidth;}
if($maxWidth==null && $maxHeight==null){$width=$result_array[3]; $height=$result_array[3]; }
if($altText==null){echo '<style>#lightbox-container-image-data-box {border: 0 none !important;
    opacity: 0 !important;
    padding: 0 !important;
    visibility: hidden !important;}</style>';}
?>
<!--[if gte IE 9]>

<?php 
echo '
<style>
.imgno'.$bID.' {width:'.$width.'px;height:auto  }
</style>';


echo '<span class="mpinaps proimglightbox'.$bID.'" style="clear:both;display:block; width:100%;height:auto;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo '<a href="'.$relPath.'"   style="width:'.$maxWidth.'px;height:'.$maxHeight.'px" title="'.$altText.'">';
echo '<img src="'.$result_array[1].'" width="'.$width.'" height="'.$height.'" class="circle-image-wrap imgno'.$bID.'"/>';
echo '</a>';
echo '</span>';

?>
<![endif]-->

<!--[if !IE]><!-->

<?php 
echo '
<style>
.imgno'.$bID.' {width:'.$width.'px;height:auto  }
</style>';


echo '<span class="mpinaps proimglightbox'.$bID.'" style="clear:both;display:block; width:100%;height:auto;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo '<a href="'.$relPath.'"   style="width:'.$maxWidth.'px;height:'.$maxHeight.'px" title="'.$altText.'">';
echo '<img src="'.$result_array[1].'" width="'.$width.'" height="'.$height.'" class="circle-image-wrap imgno'.$bID.'"/>';
echo '</a>';
echo '</span>';

?>
<!--<![endif]-->

<!--[if lt IE 9]><?php 
echo '<span class="proimglightbox'.$bID.'" style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo($controller->getContentAndGenerate());
echo '</span>';?>
<![endif]-->
<?php  

echo '<script type="text/javascript">
    $(function() {
       	$(".proimglightbox'.$bID.' a").lightBox(
		{
		imageLoading: "'.$burl.'/templates/circle_lightbox/images/lightbox-ico-loading.gif",
	imageBtnClose: "'.$burl.'/templates/circle_lightbox/images/close.png",
	imageBtnPrev: "'.$burl.'/templates/circle_lightbox/images/lightbox-btn-prev.gif",
	imageBtnNext: "'.$burl.'/templates/circle_lightbox/images/lightbox-btn-next.gif",
	imageBlank: "'.$burl.'/templates/circle_lightbox/images/lightbox-blank.gif"
		}
		);
    });
    </script>';
	?>