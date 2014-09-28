<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$result_array=$controller->getContentjustimg();
$basic_path=DIR_REL;
$basic_path=rtrim($basic_path,"/");
$burl=$basic_path.'/packages/pro_image/blocks/pro_image';	
$relPath =$result_array[4];
if($altText==null){echo '<style>#lightbox-container-image-data-box {border: 0 none !important;
    opacity: 0 !important;
    padding: 0 !important;
    visibility: hidden !important;}</style>';}
?>
<!--[if gte IE 9]>

<?php 
echo '
<style>
.imgno'.$bID.' {background: url("'.$result_array[1].'") no-repeat scroll center center transparent;display: inline-block;position:relative;
   }
</style>';


echo '<span class="mpinaps proimglightbox'.$bID.'" style="display:block; width:100%;height:auto;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo '<span class="card-image-wrap imgno'.$bID.'">';
echo '<a href="'.$relPath.'" title="'.$altText.'"  style="width:'.$maxWidth.'px;height:'.$maxHeight.'px" >';
echo '<img src="'.$result_array[1].'" width="'.$maxWidth.'" height="'.$maxHeight.'"/>';
echo '</a>';
echo '</span>';
echo '</span>';
?>
<![endif]-->

<!--[if !IE]><!-->

<?php 
echo '
<style>
.imgno'.$bID.' {background: url("'.$result_array[1].'") no-repeat scroll center center transparent;display: inline-block;position:relative;
   }
</style>';


echo '<span class="mpinaps proimglightbox'.$bID.'" style="display:block; width:100%;height:auto;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo '<span class="card-image-wrap imgno'.$bID.'">';
echo '<a href="'.$relPath.'" title="'.$altText.'"  style="width:'.$maxWidth.'px;height:'.$maxHeight.'px" >';
echo '<img src="'.$result_array[1].'" width="'.$maxWidth.'" height="'.$maxHeight.'"/>';
echo '</a>';
echo '</span>';
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
		imageLoading: "'.$burl.'/templates/rounded_lightbox/images/lightbox-ico-loading.gif",
	imageBtnClose: "'.$burl.'/templates/rounded_lightbox/images/close.png",
	imageBtnPrev: "'.$burl.'/templates/rounded_lightbox/images/lightbox-btn-prev.gif",
	imageBtnNext: "'.$burl.'/templates/rounded_lightbox/images/lightbox-btn-next.gif",
	imageBlank: "'.$burl.'/templates/rounded_lightbox/images/lightbox-blank.gif"
		}
		);
    });
    </script>';
	?>