<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$result_array=$controller->getContentjustimg();
$relPath =$result_array[4];	
$basic_path=DIR_REL;
$basic_path=rtrim($basic_path,"/");
$burl=$basic_path.'/packages/pro_image/blocks/pro_image';
if($altText==null){echo '<style>#lightbox-container-image-data-box {border: 0 none !important;
    opacity: 0 !important;
    padding: 0 !important;
    visibility: hidden !important;}</style>';}
if($position=='center'){$position_css="margin:0 auto;";}else{$position_css="float:".$position.";";}	

echo '<div class="proimglightbox'.$bID.' proimglightbox " style="text-align:center;'.$position_css.'padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo '<a href="'.$relPath.'"   style="width:'.$maxWidth.'px;height:'.$maxHeight.'px" title="'.$altText.'">';
echo $result_array[0];
echo '</a>';
echo '</div>';
?>
<?php  

echo '<script type="text/javascript">
    $(function() {
       	$(".proimglightbox'.$bID.' a").lightBox(
		{
		imageLoading: "'.$burl.'/templates/fancybox/images/lightbox-ico-loading.gif",
	imageBtnClose: "'.$burl.'/templates/fancybox/images/close.png",
	imageBtnPrev: "'.$burl.'/templates/fancybox/images/lightbox-btn-prev.gif",
	imageBtnNext: "'.$burl.'/templates/fancybox/images/lightbox-btn-next.gif",
	imageBlank: "'.$burl.'/templates/fancybox/images/lightbox-blank.gif"
		}
		);
    });
    </script>';
	?>