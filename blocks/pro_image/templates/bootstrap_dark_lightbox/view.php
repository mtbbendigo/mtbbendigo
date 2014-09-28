<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$bt = BlockType::getByHandle('pro_image');
$basic_path=DIR_REL;
$basic_path=rtrim($basic_path,"/");
$burl=$basic_path.'/packages/pro_image/blocks/pro_image';

$result_array=$controller->getContentjustimg();
$relPath =$result_array[4];	
if($altText==null){echo '<style>#lightbox-container-image-data-box {border: 0 none !important;
    opacity: 0 !important;
    padding: 0 !important;
    visibility: hidden !important;}</style>';}
?>
<!--[if gte IE 9]>

<?php 
echo '<span  class="mpinaps bnapsimgdsl proimglightbox'.$bID.'" style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo '<a href="'.$relPath.'"   style="width:'.$maxWidth.'px;height:'.$maxHeight.'px" title="'.$altText.'" >';
echo $result_array[0];
echo '</a>';
echo '</span>';
?>

<![endif]-->
<!--[if !IE]><!-->
<?php 
echo '<span  class="mpinaps bnapsimgdsl proimglightbox'.$bID.'" style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo '<a href="'.$relPath.'" title="'.$altText.'"  style="width:'.$maxWidth.'px;height:'.$maxHeight.'px" >';
echo $result_array[0];
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
		imageLoading: "'.$burl.'/templates/bootstrap_dark_lightbox/images/lightbox-ico-loading.gif",
	imageBtnClose: "'.$burl.'/templates/bootstrap_dark_lightbox/images/close.png",
	imageBtnPrev: "'.$burl.'/templates/bootstrap_dark_lightbox/images/lightbox-btn-prev.gif",
	imageBtnNext: "'.$burl.'/templates/bootstrap_dark_lightbox/images/lightbox-btn-next.gif",
	imageBlank: "'.$burl.'/templates/bootstrap_dark_lightbox/images/lightbox-blank.gif"
		}
		);
    });
    </script>';
	?>
